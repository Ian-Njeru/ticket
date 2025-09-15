<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "./../vendor/autoload.php";
//$img = include_once "img/image.jpg";
// Enable or disable exceptions via variable
$debug = true;
try {
    // Create instance of PHPMailer class
    $mail = new PHPMailer($debug);
     if ($debug) {
         // issue a detailed log
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    }
    // Authentication with SMTP
    $mail-> isSMTP();
    $mail->SMTPAuth = true;
    // Login
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // 587
    $mail->Username = "testprojectmaktaba@gmail.com";
    $mail->Password = "njqzvmcqugryvkty";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->setFrom('testprojectmaktaba@gmail.com', 'Ticket');
    $mail->addAddress('ianjeru020@gmail.com', 'Ian');
    //$mail-> addAttachment($img, "image.jpg");
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->isHTML(true);
    $mail->Subject = 'The subject of your mail';
    $mail->Body = 'The mail text in HTML content. <b>bold</b> elements are allowed.';
    $mail->AltBody = 'The text as a simple text element';
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: ".$e->getMessage();
}
?>
</body>
</html>