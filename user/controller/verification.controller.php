<?php

include "./../autoload/autoloader.php";

$id = $_GET['id'];
$name = $_GET['name'];
$verification_code = $_GET['verification_code'];

$verification = new verification();

$result = $verification->checkVerificationCode($id, $name, $verification_code);
?>