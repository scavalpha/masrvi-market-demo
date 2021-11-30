<?php

class Notif
{
    public static string $msg= "vide";

    /**
     * @return mixed
     */
    public static function getMsg()
    {
        return self::$msg;
    }

    /**
     * @param mixed $msg
     */
    public static function setMsg($msg): void
    {
        self::$msg = $msg;
    }


}
