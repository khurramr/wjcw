<?php
    
    session_start();
    $_SESSION['member_email'];
    $amount = $_SESSION['tokens'] * 1200;
    
    require("vendor/autoload.php");
    header('Content-Type', 'application/json');
 
    $Stripe = new Stripe\StripeClient("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");
    
    $session = $Stripe->checkout->sessions->create([
        "success_url" => "https://www.wjcwcf.com/dashboard/pages/payment/success.php",
        "cancel_url" => "https://www.wjcwcf.com/dashboard/pages/tokens/purchase_token.php",
        "payment_method_types" => ['card'],
        "mode" => "payment",
        "line_items" => [
            [
                "currency" => "gbp",
                "name" => "WJCW CF",
                "amount" => $amount,
                "quantity" => 1

            ]
            
        ]
    ]);

echo json_encode($session);

?>