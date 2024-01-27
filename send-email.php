<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = "From: " . $email . "\nMessage: " . $_POST['message'];

require "vendor/autoload.php"; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = '587';

$mail->Username = 'chathurahasanga074@gmail.com';
$mail->Password ='ervh auay vabe uvbw';

$mail->setFrom($email, $name); 
$mail->addAddress('chathurahasanga074@gmail.com', 'Chathura Abeywickrama');

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;


echo "Email sent successfully. You will be contacted shortly. Thank you, " . $name . ".";
?>
