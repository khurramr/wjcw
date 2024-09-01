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
    $mailer->CharSet = 'UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth = true;
    $mail->Host       = 'mail.wjcwcf.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'wjcwcf_registration@wjcwcf.com';                     //SMTP username
    $mail->Password   = 'WelcomeTas15';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Sender
    $mail->setFrom('wjcwcf_registration@wjcwcf.com', 'WJCW CF');
    //Recipient(s)    
    $mail->addAddress("gatif786@gmail.com");     //Add a recipient
    $firstname = "Atif";     
    $lastname = "Hussain";
    $fullname = $firstname . " " . $lastname; //Add full name
    $GBP = "&pound;";
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->addEmbeddedImage('cropped-logo15-min.jpg','mainlogo','logo.jpeg');    
    $message ='<img src="cid:mainlogo" style="border-radius: 15px;">';
    $message .= "<h2><span style='color:green'>Congratulations!</span> You have a new active member!</h2>";
    $message .= "<p style='font-size:16px; text-align:justify'> Assalamu Alaikum <span style='color:green'>" . $fullname . "</span> has just registered as a new active member with the worldwide WJCW crowdfunding team.</p>";
    $message .= "<p style='font-size:16px'; text-align:justify'>The next step is very important and needs to be actioned as soon as possible. Log into your account on the website and get in touch with <span style='color:green'>". $fullname . "</span> You can find their email and phone number in your online account.</p>";
    $message .= "<p style='font-size:16px'; text-align:justify'>Give them a very warm welcome to WJCW crowdfunding. $GBP 500 Remember Allah SWT asks us to help one another in good deeds. Together we will achieve all of our objectives and work together like one family for the welfare of the community around the globe.</p>";
    $message .= "<p style='font-size:16px'>WJCW Crowdfunding globe team.</p>";

    $message1 = "<p>Congratulations! You have a new active member!</p>";
    $message1 .= "<p>Assalamu Alaikum</p>";
    $message1 .= "<p>". $fullname ." has just registered as a new active member with the worldwide WJCW crowdfunding team.</p>";
    $message1 .= "<p>The next step is very important and needs to be actioned as soon as possible. Log into your account on the website and get in touch with" . $fullname . " You can find their email and phone number in your online account.</p>";
    $message1 .= "<p>Give them a very warm welcome to WJCW crowdfunding. Remember Allah SWT asks us to help one another in good deeds. Together we will achieve all of our objectives and work together like one family for the welfare of the community around the globe.</p>";
    $message1 .= "<p style='font-size:16px'>WJCW Crowdfunding globe team.</p>";
    
    
    $mail->Subject = 'WJCW CF New Member';

    $mail->Body    = $message;
    
    $mail->AltBody = $message1;
    $mail->SMTPKeepAlive = true;   
    $mail->Mailer = “smtp”; // don't change the quotes!

    $mail->send();
    
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>