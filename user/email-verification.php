<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification | Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/email.css">
</head>
<body>

<?php
require_once "./../vendor/autoload.php";
include "./../session/session_start.php";
include "././controller/verification.controller.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
//$img = include_once "img/image.jpg";
// Enable or disable exceptions via variable
$debug = true;
try {
    // Create instance of PHPMailer class
    $mail = new PHPMailer($debug);
     //if ($debug) {
         // issue a detailed log
       // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    //}
    $name = $name;
    $code = $verification_code;
    // Authentication with SMTP

    $mail-> isSMTP();
    $mail->SMTPAuth = true;
    // Login
    $mail->Host = $_ENV['MAIL_HOST'];
    $mail->Port = $_ENV['MAIL_PORT']; // 587
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->setFrom('testprojectmaktaba@gmail.com', 'Ticket');
    $mail->addAddress($email, $name);
    //$mail-> addAttachment($img, "image.jpg");
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->isHTML(true);
    $mail->Subject = 'The subject of your mail';
    ob_start(); 
    include __DIR__.'/email-template.htm';
    $htmlBody = ob_get_clean();
    $mail->Body = $htmlBody;
    $mail->AltBody = 'The text as a simple text element';
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: ".$e->getMessage();
}

?>
<div class="bar">
    <div class="img"><img src="assets/logo.png" alt=""></div>
</div>

<div class="body">
    <div class="header">
        <div class="icon">
            <i class="fa fa-envelope-circle-check"></i>
        </div>
        <div class="title">
            <h2>EMAIL SENT</h2>
        </div>
    </div>

    <div class="par">
        <p>We have sent you a verification email. Please check your inbox (or spam folder) and click on the link to activate your account</p>
    </div>
</div>
</body>
</html>