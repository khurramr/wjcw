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
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.wjcwcf.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'wjcwcf_registration@wjcwcf.com';                     //SMTP username
    $mail->Password   = 'WelcomeTas15';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    
    $to_email = $_POST['email'];
    $from_email = $_POST['from_email'];
    $fullname = $_POST['fullname'];
    $member_id = $_POST['member_id'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    
    //Sender
    $mail->setFrom('wjcwcf_registration@wjcwcf.com', 'WJCW CF');    
    // $mail->setFrom($from_email, $fullname);
    //Recipient(s)    
    
    $mail->addAddress($to_email);     //Add a recipient

//    $mail->addAttachment('../assets/images/cropped-logo.png', 'cropped-logo.png');    //Optional name


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    
    $message = "<h1>Congratulations! You have a new active member! <b>$member_id</b></h3>";
    $message .= "<h2>Assalamu Alaikum,</h2>";
    $message .= "<h2>" . $fullname . "</h2>" . "<h3 style='color:green'> has just registered as a new active member with the worldwide WJCW crowdfunding team.</h3>";
    $message .= "<h3 style='color:green'>The next step is very important and needs to be actioned as soon as possible. Log into your account on the website and get in touch with ". $fullname . " You can find their email and phone number in your online account.</h3>";
    $message .= "<h3>Give them a very warm welcome to WJCW crowdfunding. Remember Allah SWT asks us to help one another in good deeds. Together we will achieve all of our objectives and work together like one family for the welfare of the community around the globe.</h3>";

    $message1 = "<p>Congratulations! You have a new active member!</p>";
    $message1 .= "<p>Assalamu Alaikum</p>";
    $message1 .= "<p>". $fullname ." has just registered as a new active member with the worldwide WJCW crowdfunding team.</p>";
    $message1 .= "<p>The next step is very important and needs to be actioned as soon as possible.// Log into your account on the website and get in touch with" . $fullname . " You can find their email and phone number in your online account.</p>";
    $message1 .= "<p>Give them a very warm welcome to WJCW Crowd Funding. Remember Allah SWT asks us to help one another in good deeds. Together we will achieve all of our objectives and work together like one family for the welfare of the community around the globe.</p>";
    echo $link = "http://wjcwcf.com/index.php?member_id=$member_id";

    $mail->Subject = $subject;
    $mail->Body = $message . '  ' . $link;
    $mail->addEmbeddedImage('cropped-logo.jpg', 'cropped');    

    //$mail->AltBody = $message1;
    $mail->SMTPKeepAlive = true;   
    // $mail->Mailer = “smtp”; // don't change the quotes!

    $mail->send();
    
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>