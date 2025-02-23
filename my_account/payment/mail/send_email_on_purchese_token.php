<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../ajax/vendor/autoload.php';

/**
 * Function to send a token purchase confirmation email
 *
 * @param string $to_email Recipient's email address
 * @param string $fullname Name of the person who made the purchase
 * @param float  $amount Total amount paid
 * @param array  $tokens List of purchased tokens
 * @param string $subject Email subject
 * @return bool            Returns true if the email is sent successfully, false otherwise
 */
function sendTokenPurchaseEmail($to_email, $fullname, $amount, $tokens, $subject,$template = 'purchase_token') {
    // Instantiate PHPMailer
    $mail = new PHPMailer(true); // Passing true enables exceptions

    try {
        // SMTP server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'mail.wjcwcf.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
        $mail->Username   = 'wjcwcf_registration@wjcwcf.com';        // SMTP username
        $mail->Password   = 'WelcomeTas15';                          // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption
        $mail->Port       = 587;                                     // TCP port to connect to

        // Sender's email
        $mail->setFrom('wjcwcf_registration@wjcwcf.com', 'WJCW CF');

        // Add recipient
        $mail->addAddress($to_email);

        if($template == 'purchase_token'){
             // Prepare the email body with dynamic content
            $message = "<h1>Thank you {$fullname} for purchasing tokens!</h1>";
            $message .= "<p>Your payment of <strong>£{$amount}</strong> was successful. Here are your token(s) purchased:</p>";
            $message .= "<ul>";
            
            // Add tokens to the email body
            foreach ($tokens as $token) {
                $message .= "<li>{$token}</li>";
            }

            $message .= "</ul>";
            $message .= "<p>WJCW Crowdfunding Globe team.</p>";

            // Prepare a simpler version of the message for plain text email
            $message1 = "Thank you {$fullname} for purchasing tokens!";
            $message1 .= "\nYour payment of £{$amount} was successful. Here are your token(s) purchased:\n";
            
            // Add tokens to the plain text version
            foreach ($tokens as $token) {
                $message1 .= "- {$token}\n";
            }

            $message1 .= "\nWJCW Crowdfunding Globe team.";
        }
        elseif($template == 'pay_wjcw'){
            $message1 = "Thank you {$fullname} for payment to WJCW,";
            $message1 .= "\nYour payment of £{$amount} was successful.";
            $message1 .= "\n\nWJCW Crowdfunding Globe team.";
        }
       

        // Insert a custom link (you can use any dynamic value here)
        // $link = "https://wjcwcf.com/index.php?member_id=12345"; // Example link (replace with dynamic member ID if needed)
        // $message .= "<p><a href='{$link}'>Click here to view your profile</a></p>";

        // Set email content
        $mail->isHTML(true);                                          // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;                                    // HTML formatted message
        $mail->AltBody = $message1;                                   // Plain text version of the message

        // Optional: Add an embedded image (logo)
        // $mail->addEmbeddedImage('cropped-logo.jpg', 'cropped');        

        // Send the email
        $mail->send();

        return true; // Email sent successfully
    } catch (Exception $e) {
        // In case of an error
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}
?>
