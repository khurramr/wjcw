<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include("../db/connect.php");
$email = $_POST['email'];
$memberid = $_POST['memberid'];
$sql = "SELECT email FROM member_registration where email = '$email' AND member_id = '$memberid' AND status = '1'";
$result = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows >= 1){



//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mailer->CharSet = 'UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.wjcwcf.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'wjcwcf_registration@wjcwcf.com';                     //SMTP username
    $mail->Password   = 'WelcomeTas15';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Sender
    $mail->setFrom('wjcwcf_registration@wjcwcf.com', 'WJCW CF');
    //Recipient(s)    
    $mail->addAddress($_POST['email']);     //Add a recipient
    
    echo $change_password = 'https://wjcwcf.com/my_account/change_password.php?memberid='. $memberid;
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML

    $mail->addEmbeddedImage('cropped-logo15.jpg','mainlogo','logo.jpeg');    
    $message ='<img src="cid:mainlogo" style="border-radius: 15px;">';    
    $message .= "<h2 style='font-size:16px; text-align:center; color:green; font-family:arial'>Forgot your password ?</h2>";
    $message .= "<p style='font-size:16px'> Assalamu Alaikum, <span style='color:green'></p>";
    $message .= "<p style='font-size:16px'>We received a request to reset the password for your account.</p>";
    $message .= "<p style='font-size:18px'>" . $change_password . "</p>";

    $message_alt = "<p>Forgot your password ?</p>";
    $message_alt .= "<p>Assalamu Alaikum, </p>";
    $message_alt .= "<p>We received a request to reset the password for your account.</p>";
    $message_alt .= "<p style='font-size:18px'>$change_password</p>";
      
    
    
    $mail->Subject = 'WJCW CF Change Password';

    $mail->Body    = $message;
    $mail->AltBody = $message_alt;
    $mail->SMTPKeepAlive = true;   
    $mail->Mailer = “smtp”; // don't change the quotes!

    $mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
}
?>