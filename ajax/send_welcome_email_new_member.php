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
    $gift_donation_amount = $_POST['gift_donation_amount'];
    $GBP = "&pound;";
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

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML

    
    
    $mail->addEmbeddedImage('cropped-logo15-min.jpg','mainlogo','logo.jpeg');    
    $message ='<img src="cid:mainlogo" style="border-radius: 15px;">';    
    $message .= "<h2><span style='color:green'>Congratulations! " . $fullname . "</span> Welcome to  this welfare system which will benefit you and others around the globe through providing a platform to enable welfare activities via technology.</h2>";
    $message .= "<p style='font-size:16px'>Unity is very important for the whole community around the globe. Your journey starts by becoming a qualified shareholder of WJCW.</p>";
    $message .= "<p style='font-size:16px'>World Jafaria Community Welfare will provide financial freedom, free Hajj and ziyarat and many more welfare benefits.</p>";
    $message .= "<p style='font-size:16px'>You can read WJCW's aims to work together to help each other to follow the system, and the system will follow you.</p>";
    $message .= "<p style='font-size:16px'>Incredible journey with blessings of Allah SWT with strong system and knowledge first welfare platform round the globe.</p>";
    $message .= "<p style='font-size:16px; color:green'>WJCW's message Holy household to every household around the globe. Welfare benefits for everyone.</p>";
    $message .= "<p style='font-size:16px; color:green'>You will pay $GBP $gift_donation_amount to your sponser and will send $GBP $gift_donation_amount amount gift/donation to the
                nearest active member.</p>";
    $message .= "<p style='font-size:16px'>KNOWLEDGE IS POWER. OUR GOAL IS TO PROVIDE YOU WITH THE POWER KNOWLEDGE GIVES.</p>";
    $message .= "<p style='font-size:16px'>WJCW Crowdfunding globe team.</p>";
    
    $message_alt = "<p>Congratulations! You are a new member!</p>";
    $message_alt= "<p>The Holy Prophet Muhammad (S.A.W.W) said, exchange gifts, as that will lead to increasing your love for one another.</p>";
    $message_alt .= "<h2>" . $fullname . " Welcome to  this welfare system which will benefit you and others around the globe through providing a platform to enable welfare activities via technology.</h2>";
    $message_alt .= "<p>Unity is very important for the whole community around the globe. Your journey starts by becoming a qualified shareholder of WJCW.</p>";
    $message_alt .= "<p>World Jafaria Community Welfare will provide financial freedom, free Hajj and ziyarat and many more welfare benefits.</p>";
    $message_alt .= "<p>You can read WJCW's aims to work together to help each other to follow the system, and the system will follow you.</p>";
    $message_alt .= "<p>Incredible journey with blessings of Allah SWT with strong system and knowledge first welfare platform round the globe.</p>";
    $message_alt .= "<p>WJCW's message Holy household to every household around the globe. Welfare benefits for everyone.</p>";
    $message_alt .= "<p style='font-size:16px; color:green'>You will pay $GBP $gift_donation_amount to your sponser and will send $GBP $gift_donation_amount amount gift/donation to the
                nearest active member.</p>";    
    $message_alt .= "<p>KNOWLEDGE IS POWER. Our goal is to provide you with the POWER KNOWLEDGE GIVES.</p>";
    $message_alt .= "<p>WJCW Crowdfunding globe team.</p>";
    
    
    $mail->Subject = 'Welcome To WJCW CF';

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