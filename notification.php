<?php

$myFile = "test.log";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, "\n\n--------------------------------------
        -------------------------\n");
foreach($_SERVER as $h=>$v)
    if(preg_match('/HTTP\_(.+)/',$h,$hp))
        fwrite($fh, "$h = $v\n");
fwrite($fh, "\r\n");
fwrite($fh, file_get_contents('php://input'));
fclose($fh);
//echo "<html><head /><body><iframe src=\"$myFile\"
//        style=\"height:100%; width:100%;\"></iframe></body></html>";



$contents='';
foreach ($_GET as $key => $value) {
    $contents .= $key . " => " . $value . "\n"; // or use `"\r\n"`
}
file_put_contents("test.log", $contents, FILE_APPEND);

//require_once "model/Notif.php";
//
//if(!session_id())
//{
//    session_start();
//}
//
//$msg = $_GET['clientid'];
//if (isset($_SERVER['QUERY_STRING'])) {

//foreach ($_GET as $key => $value) {
//    $msg .= $key . " = " . urldecode($value) . "<br />\n";
//}

//$_SESSION['notif'] = $msg;
//Notif::setMsg($msg);



//$sendMail = mail("scavalpha@gmail.com", "notification", $msg);
//
//if (function_exists('mail')) {
//    echo 'mail() is available';
//} else {
//    echo 'mail() has been disabled';
//}
//
//
//if ($sendMail) {
//    echo "Email Sent Successfully";
//} else {
//    echo "Mail Failed";
//}

