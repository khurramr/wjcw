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
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.wjcwcf.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'wjcwcf_registration@wjcwcf.com';                     //SMTP username
    $mail->Password   = 'WelcomeTas15';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
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


function sendNextStepMail($to, $fullname, $current_level, $current_stage_amount, $next_level, $next_amount, $member_id) {
    $mail = new PHPMailer();
    
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = 'mail.wjcwcf.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'wjcwcf_registration@wjcwcf.com';                     //SMTP username
    // $mail->Password   = 'WelcomeTas15';                               //SMTP password
    $mail->Username = 'muhammadhani295@gmail.com';       // Your Gmail address
    $mail->Password = 'fgcf iyef zznd eavp';              // Your Gmail password (use App Password for better security)
    $mail->Host = 'smtp.gmail.com';                 // Specify main SMTP server (e.g., Gmail)
    
    $mail->Port       = 587;               
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
//   $mail->SMTPDebug = 2;
    
    //Recipients
    $mail->setFrom('wjcwcf_registration@wjcwcf.com');
    $mail->addAddress($to);

    //Content
    $mail->isHTML(true);         
    $mail->addEmbeddedImage('cropped-logo15-min.jpg','mainlogo','logo.jpeg');    
    $mail->Subject = 'Next Steps for Your Gift/Donation';
    $message ='<img src="cid:mainlogo" style="border-radius: 15px;">';
    $message .= "<h2><span style='color:green'>Congratulations!</span> You  have  Completed Stage 1</h2>";
    $message .= "<p style='font-size:16px; text-align:justify'> Dear ".$fullname.", ".$member_id." </p>";
    $message .= "<p style='font-size:16px'; text-align:justify'>Thank you for your generous support! We're excited to move forward with you in this journey. As part of Stage ".$current_level.", we appreciate your commitment of £".$current_stage_amount.", which can be made in six payments.</p>";
    $message .= "<p style='font-size:16px'; text-align:justify'>To proceed to the next stage, we kindly ask you to make a payment of £".$next_amount." to our WJCW bank account. You can also choose from various online payment methods that suit you best.</p>";
    $message .= "<p style='font-size:16px'>Thank you once again for your support!</p>";
    $message .= "<p style='font-size:16px'>Best regards,</p>";
    $message .= "<p style='font-size:16px'>WJCW Crowdfunding globe team.</p>";
    
    $mail->Body    = $message;
       //Send the email
       if(!$mail->send()) {
        return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return 'Message has been sent';
    }
    
};
?>