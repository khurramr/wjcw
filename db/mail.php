<?php 



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'Exception.php';
require 'SMTP.php';
require 'PHPMailer.php';


function sendMail($to, $subject, $body, $from) {
    //Create a new PHPMailer instance
    $mail = new PHPMailer();
    
    //Server settings
    $mail->isSMTP();                                // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                 // Specify main SMTP server (e.g., Gmail)
    $mail->SMTPAuth = true;                         // Enable SMTP authentication
    $mail->Username = '';       // Your Gmail address
    $mail->Password = '';              // Your Gmail password (use App Password for better security)
    $mail->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                              // TCP port to connect to
    // $mail->SMTPDebug = 2;

    //Recipients
    $mail->setFrom($from);
    $mail->addAddress($to);

    //Content
    $mail->isHTML(true);                            // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;

    //Send the email
    if(!$mail->send()) {
        return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return 'Message has been sent';
    }
}
?>