<?php
class MasrviSession
{

    /**
     * @var string Marchand id du client
     */
    public static $merchantId = "3214564785636589";

    /**
     * @var string Url de paiement
     */
    public static $masrviUrl = 'https://masrviapp.mr/online/online.php';

    /**
     * Methode qui appel masrvi et recupere le sessionID
     * @return false|string
     */
    public static function getSessionId()
    {
        $url = self::$masrviUrl.'?merchantid=' . self::$merchantId;
        $response = file_get_contents($url);

        if (substr($response, 0, 2) === "OK") {
            return substr($response, 3, strlen($response));
        } else return "NOK";

    }
}
