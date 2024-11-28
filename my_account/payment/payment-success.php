<?php
include("../../db/connect.php");
include("../../dashboard/session_login.php"); 
include("../../db/configuration.php");
include("mail/send_email_on_purchese_token.php");

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST']; // e.g., 'www.example.com'
$baseUrl = $protocol . $host;

// Get the payment details from PayPal after redirection
$payment_id = $_GET['paymentId'];
$PayerID = $_GET['PayerID'];
$module = $_GET['module'];
$status = $_GET['payment_status'];

// PayPal API credentials
$paypal_client_id = PAYPAL_CLIENT_ID;
$paypal_secret = PAYPAL_SECRET;
$paypal_api_url = 'https://api.sandbox.paypal.com/v1/';

// Prepare the authorization header with the client id and secret
$basic_auth = base64_encode($paypal_client_id . ":" . $paypal_secret);

// Get the access token from PayPal API
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $paypal_api_url . 'oauth2/token');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Authorization: Basic ' . $basic_auth,
    'Content-Type: application/x-www-form-urlencoded'
]);
$response = curl_exec($curl);
$response_data = json_decode($response, true);

$access_token = $response_data['access_token'];
curl_close($curl);

// Execute the payment after success
$execute_payment_data = [
    'payer_id' => $PayerID
];

$execute_payment_data_json = json_encode($execute_payment_data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $paypal_api_url . 'payments/payment/' . $payment_id . '/execute');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $access_token,
    'Content-Type: application/json'
]);
curl_setopt($curl, CURLOPT_POSTFIELDS, $execute_payment_data_json);

$response = curl_exec($curl);


$response_data = json_decode($response, true);
curl_close($curl);

// Handle response and display confirmation message
if($module == 'puchase_token'){
    if ($response_data['state'] == 'approved' || $status != 'cancel') {
        paypalTransactionDetail($response_data,$link);
        $amount = $response_data['transactions'][0]['amount']['total'];
        $no_of_tokens = $amount / 12;
        $memberid = $_SESSION['member_id'];
        $name = $_SESSION['fullname'];
        $cardDetails = $response_data['payer']['payer_info']['email'];
        $cardNetwork = "Paypal";
        $description = 'Purchase Token';
        $date = date('Y-m-d');
        $token = $response_data['transactions'][0]['related_resources'][0]['sale']['id'];
        $values = "";
        $token_arr = [];
        for ($x = 0; $x < $no_of_tokens; $x++) {
            $token = strtoupper(substr(md5(time(). $name . $memberid . $x), 0, 14));
            $values .= "('$token', $memberid, $memberid, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP + INTERVAL 1 YEAR, 12, 1,'$description','$cardDetails','$cardNetwork','$token')";
            if (($x+1) != $no_of_tokens) {
                $values .= ",";
            }
            $token_arr[] = $token;
        }
        $action = $memberid == 0 ? "" : "INSERT INTO token_purchase (token, memberid, purchasedby, purchase_date, issued_date, expiry_date, annual_fee, status,`description`,`cardDetails`,`cardNetwork`,`tokenizationData`) values $values";
        mysqli_query($link,$action);
        $insert = "insert into wjcw_payments (sent_by, amount, date, Comment, action, active)
        values ($memberid, $amount, '$date', 'Purchase Token Online', \"$action\", 1);
        ";
        mysqli_query($link, $insert);
        // get detail of member
        $select = "SELECT * FROM member_registration where member_id = '$member_id'";
        $result = mysqli_query($link, $select);
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $name = $row['first_name'].' '.$row['last_name'];
        sendTokenPurchaseEmail($email,$name,$amount,$token_arr,'WJCW CF Purchase token successful');

        header('Location: '.$baseUrl.'/dashboard/pages/tokens/purchase_token.php?status=success');
    }
    else {
        header('Location: '.$baseUrl.'/dashboard/pages/tokens/purchase_token.php?status=cancel');   
    }
}
if($module == 'purchase_token_outside'){
    if ($response_data['state'] == 'approved' || $status != 'cancel') {
    
        paypalTransactionDetail($response_data,$link);
        $amount = $response_data['transactions'][0]['amount']['total'];

        $no_of_tokens = (int) $amount / 12;
        $amount = $response_data['transactions'][0]['amount']['total'];
       
        $memberid = NULL;
        $name = $_GET['name'];
        $email = $_GET['email'];
        $cardDetails = $response_data['payer']['payer_info']['email'];
        $cardNetwork = "Paypal";
        $description = 'Purchase Token';
        $date = date('Y-m-d');
        $token = $response_data['transactions'][0]['related_resources'][0]['sale']['id'];
        $values = "";
        $token_arr = [];
        for ($x = 0; $x < $no_of_tokens; $x++) {
            $token = strtoupper(substr(md5(time(). $name . $memberid . $x), 0, 14));
            $values .= "('$token', '$memberid', '$memberid', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP + INTERVAL 1 YEAR, 12, 1,'$description','$cardDetails','$cardNetwork','$token')";
            if (($x+1) != $no_of_tokens) {
                $values .= ",";
            }
            $token_arr[] = $token;
        }
        $action = "INSERT INTO token_purchase (token, memberid, purchasedby, purchase_date, issued_date, expiry_date, annual_fee, status,`description`,`cardDetails`,`cardNetwork`,`tokenizationData`) values $values";
        
        mysqli_query($link,$action);
        // $insert = "insert into wjcw_payments (sent_by, amount, date, Comment, action, active)
        // values ($memberid, $amount, '$date', 'Purchase Token Online', \"$action\", 1);
        // ";
        // mysqli_query($link, $insert);
        sendTokenPurchaseEmail($email,$name,$amount,$token_arr,'WJCW CF Purchase token successful');
        header('Location: '.$baseUrl.'?status=success_outside');
    }
    else {
        header('Location: '.$baseUrl.'?status=cancel');
    }
    // echo 'Payment Success! Transaction ID: ' . $response_data['transactions'][0]['related_resources'][0]['sale']['id'];
} 
if($module == 'pay_wjcw'){
    if ($response_data['state'] == 'approved' || $status != 'cancel') {
    
        paypalTransactionDetail($response_data,$link);
        $amount = $response_data['transactions'][0]['amount']['total'];
        $no_of_tokens = $amount / 12;
        $memberid = $_SESSION['member_id'];
        $name = $_SESSION['fullname'];
        $date = date('Y-m-d');
        $action = '';
        $insert = "insert into wjcw_payments (sent_by, amount, date, Comment, action, active)
        values ($memberid, $amount, '$date', 'Purchase Token Online', \"$action\", 1);
        ";
        mysqli_query($link, $insert);
        $select = "SELECT * FROM member_registration where member_id = '$member_id'";
        $result = mysqli_query($link, $select);
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $name = $row['first_name'].' '.$row['last_name'];
        $token_arr = [];
        sendTokenPurchaseEmail($email,$name,$amount,$token_arr,'Payment to WJCW was successful');
        header('Location: '.$baseUrl.'/dashboard/pages/payment/pay_annaul_fee.php?status=success');
    }
    else {
        header('Location: '.$baseUrl.'/dashboard/pages/payment/pay_annaul_fee.php?status=cancel');
    }
} 
function paypalTransactionDetail($response_data,$link){
    $payment_id = $response_data['id'];
    $intent = $response_data['intent'];
    $state = $response_data['state'];
    $cart = $response_data['cart'];
    $create_time = $response_data['create_time'];
    $update_time = $response_data['update_time'];

    $payer_info = $response_data['payer']['payer_info'];
    $payer_id = $payer_info['payer_id'];
    $payer_email = $payer_info['email'];
    $payer_first_name = $payer_info['first_name'];
    $payer_last_name = $payer_info['last_name'];
    $payer_business_name = $payer_info['business_name'];
    $payer_country_code = $payer_info['country_code'];

    $shipping_address = $payer_info['shipping_address'];
    $shipping_recipient_name = $shipping_address['recipient_name'];
    $shipping_line1 = $shipping_address['line1'];
    $shipping_line2 = $shipping_address['line2'];
    $shipping_city = $shipping_address['city'];
    $shipping_state = $shipping_address['state'];
    $shipping_postal_code = $shipping_address['postal_code'];
    $shipping_country_code = $shipping_address['country_code'];

    $transaction = $response_data['transactions'][0];
    $transaction_id = $transaction['related_resources'][0]['sale']['id'];
    $transaction_total_amount = $transaction['amount']['total'];
    $transaction_currency = $transaction['amount']['currency'];
    $transaction_subtotal = $transaction['amount']['details']['subtotal'];
    $transaction_shipping = $transaction['amount']['details']['shipping'];
    $transaction_handling_fee = $transaction['amount']['details']['handling_fee'];
    $transaction_discount = $transaction['amount']['details']['discount'];
    $transaction_payee_email = $transaction['payee']['email'];
    $transaction_description = $transaction['description'];

    $related_sale = $transaction['related_resources'][0]['sale'];
    $related_sale_id = $related_sale['id'];
    $related_sale_state = $related_sale['state'];
    $related_sale_total_amount = $related_sale['amount']['total'];
    $related_sale_transaction_fee = $related_sale['transaction_fee']['value'];
    $related_sale_payment_mode = $related_sale['payment_mode'];
    $related_sale_protection_eligibility = $related_sale['protection_eligibility'];
    $related_sale_protection_eligibility_type = $related_sale['protection_eligibility_type'];
    $related_sale_receivable_amount = $related_sale['receivable_amount']['value'];
    $related_sale_exchange_rate = $related_sale['exchange_rate'];

    $sql = "INSERT INTO paypal_transactions (
        id, intent, state, cart, payer_id, payer_email, payer_first_name, payer_last_name, 
        payer_business_name, payer_country_code, shipping_recipient_name, shipping_line1, 
        shipping_line2, shipping_city, shipping_state, shipping_postal_code, shipping_country_code, 
        transaction_id, transaction_total_amount, transaction_currency, transaction_subtotal, 
        transaction_shipping, transaction_handling_fee, transaction_discount, transaction_payee_email, 
        transaction_description, related_sale_id, related_sale_state, related_sale_total_amount, 
        related_sale_transaction_fee, related_sale_payment_mode, related_sale_protection_eligibility, 
        related_sale_protection_eligibility_type, related_sale_receivable_amount, related_sale_exchange_rate, 
        create_time, update_time
    ) VALUES (
        '$payment_id', '$intent', '$state', '$cart', '$payer_id', '$payer_email', '$payer_first_name', 
        '$payer_last_name', '$payer_business_name', '$payer_country_code', '$shipping_recipient_name', 
        '$shipping_line1', '$shipping_line2', '$shipping_city', '$shipping_state', '$shipping_postal_code', 
        '$shipping_country_code', '$transaction_id', '$transaction_total_amount', '$transaction_currency', 
        '$transaction_subtotal', '$transaction_shipping', '$transaction_handling_fee', '$transaction_discount', 
        '$transaction_payee_email', '$transaction_description', '$related_sale_id', '$related_sale_state', 
        '$related_sale_total_amount', '$related_sale_transaction_fee', '$related_sale_payment_mode', 
        '$related_sale_protection_eligibility', '$related_sale_protection_eligibility_type', 
        '$related_sale_receivable_amount', '$related_sale_exchange_rate', '$create_time', '$update_time'
    )";
    return mysqli_query($link, $sql);
}
?>
