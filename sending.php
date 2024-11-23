<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "postalbox112000@gmail.com";
$mail->Password = "xbvu jzqz foke dpqr";

$mail->setFrom($email, $name);
$mail->addAddress("postalbox112000@gmail.com", "");

$mail->Subject = "";
$mail->Body = $message;

$mail->send();