<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
require 'phpmailer/vendor/autoload.php'; // Adjust based on your installation method

$mail = new PHPMailer(true); // Enable exceptions

// $mail = new PHPMailer(true);

try {
    $mail->IsSMTP();

    $mail->SMTPSecure = 'ssl';
    
    $mail->Host = "live.smtp.mailtrap.io"; //hostname masing-masing provider email
    $mail->SMTPDebug = 2;
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    
    $mail->Timeout = 60; // timeout pengiriman (dalam detik)
    $mail->SMTPKeepAlive = true; 
    
    $mail->Username = "api"; //user email
    $mail->Password = "d922ec2b937f91086c742c50cf35fa4d"; //password email
    $mail->SetFrom("padang.gamer.rp@gmail.com","Nama pengirim yang muncul"); //set email pengirim
    $mail->Subject = "Pemberitahuan Email dari Website"; //subyek email
    $mail->AddAddress("dionfebrizon42@gmail.com","Nama penerima yang muncul"); //tujuan email
    $mail->MsgHTML("Pengiriman Email Dari Website");
    
    if($mail->Send()) echo "Message has been sent";
    else echo "Failed to sending message";
    
    echo 'Message has been sent';

} catch (Exception $th) {
    echo "PHPMailer Error: {$mail->ErrorInfo}";
}

?>