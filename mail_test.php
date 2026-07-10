<?php

require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bhartisingh.2503@gmail.com';
    $mail->Password = 'YOUR_NEW_APP_PASSWORD';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('bhartisingh.2503@gmail.com');
    $mail->addAddress('bhartisingh.2503@gmail.com');

    $mail->Subject = 'SMTP Test';
    $mail->Body = 'Testing Gmail SMTP';

    $mail->send();

    echo "Mail Sent";

} catch (Exception $e) {

    echo $mail->ErrorInfo;

}