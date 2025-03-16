<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'wjcwcf.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'wjcwcf_registration@wjcwcf.com';                     //SMTP username
    $mail->Password   = 'WelcomeTas15';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Sender
    $mail->setFrom('wjcwcf_registration@wjcwcf.com', 'WJCW CF');
    //Recipient(s)    
    $mail->addAddress($_POST['to']);     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->addEmbeddedImage('cropped-logo15-min.jpg','mainlogo','logo.jpeg');    
    $message ='<img src="cid:mainlogo" style="border-radius: 15px;">';
    $message .= "<h2><span style='color:green'>New Help Request</span></h2>";
    $message .= "<p style='font-size:16px; text-align:justify'> Memebr Id: ". $_POST["memberId"] .".</p>";
    $message .= "<p style='font-size:16px; text-align:justify'> Full Name: ". $_POST["firstName"]. " ". $_POST["lastName"] .".</p>";
    $message .= "<p style='font-size:16px; text-align:justify'> Email: ". $_POST["email"] .".</p>";
    $message .= "<p style='font-size:16px; text-align:justify'> Phone Number: ". $_POST["contactNo"] .".</p>";
    $message .= "<p style='font-size:16px; text-align:justify'> Message: ". $_POST["message"] .".</p>";
    
    $mail->Subject = 'New help requested!';

    $mail->Body    = $message;
    
    $mail->SMTPKeepAlive = true;   
    $mail->Mailer = "smtp"; // don't change the quotes!

    $mail->send();
    
echo 'Request has been submitted';
} catch (Exception $e) {
echo "Request could not be submitted. Mailer Error: {$mail->ErrorInfo}";
}
?>