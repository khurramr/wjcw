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
    $mail->addAddress($_POST['email']);     //Add a recipient
    $new_member_id = $_POST['new_member_id'];
    $firstname = $_POST['firstname'];     
    $lastname = $_POST['lastname'];
    $fullname = $firstname . " " . $lastname; //Add full name

    /*
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
    */

    //Attachments
    /*
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    */

    echo $verify_now = 'https://wjcwcf.com/my_account/email_verified.php?memberid=' . $new_member_id;
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML

    $mail->addEmbeddedImage('cropped-logo15-min.jpg','mainlogo','logo.jpeg');    
    $message ='<img src="cid:mainlogo" style="border-radius: 15px;">';    
    $message .= "<p style='font-size:16px; text-align:justify; color:green; font-family:arial'>The Holy Prophet Muhammad (S.A.W.W) said, exchange gifts, as that will lead to increasing your love for one another.</p>";
    $message .= "<h2><span style='color:green'>Congratulations!</span> You are a new member!</h2>";
    $message .= "<p style='font-size:16px'> Assalamu Alaikum <span style='color:green'>" . $fullname . "</span> We are happy you signed up for WJCW CF.</p>";
    $message .= "<p style='font-size:16px'>To start exploring the WJCW CF please confirm your email address.</p>";
    $message .= "<p style='font-size:18px'>$verify_now</p>";
    $message .= "<p style='font-size:16px'>WJCW Crowdfunding globe team.</p>";
    
    $message_alt = "<p>Congratulations! You are a new member!</p>";
    $message_alt .= "<p> Assalamu Alaikum ". $fullname ." We are happy you signed up for WJCW CF.</p>";
    $message_alt .= "<p style='font-size:18px'>$verify_now</p>";
    $message_alt .= "<p style='font-size:16px'>WJCW Crowdfunding globe team.</p>";  
    
    
    $mail->Subject = 'WJCW CF Verify Email';

    $mail->Body    = $message;
    $mail->AltBody = $message_alt;
    $mail->SMTPKeepAlive = true;   
    $mail->Mailer = "smtp";

    $mail->send();
    
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>