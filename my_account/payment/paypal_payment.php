<?php
include("../../db/configuration.php");

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST']; // e.g., 'www.example.com'
$baseUrl = $protocol . $host;

$amount = $_POST['f_amount'];  // The amount user wants to pay
$module = $_POST['module'];  // The amount user wants to pay

$currency = 'GBP';  // The currency chosen by the user
$cancelUrl = $baseUrl;
$successUrl = $baseUrl;

if($module == 'purchase_token'){
    $cancelUrl = $baseUrl."/my_account/payment/payment-success.php?payment_status=cancel&module=puchase_token";
    $successUrl = $baseUrl."/my_account/payment/payment-success.php?payment_status=success&module=puchase_token";
}
if($module == 'pay_wjcw'){
    $cancelUrl = $baseUrl."/my_account/payment/payment-success.php?payment_status=cancel&module=pay_wjcw";
    $successUrl = $baseUrl."/my_account/payment/payment-success.php?payment_status=success&module=pay_wjcw";
}
if($module == 'purchase_token_outside'){
    $name = $_POST['name'];  // The amount user wants to pay
    $email = $_POST['email'];  // The amount user wants to pay
    $cancelUrl = $baseUrl . "/my_account/payment/payment-success.php?payment_status=cancel&module=purchase_token_outside&name=" . urlencode($name) . "&email=" . urlencode($email)."&is_visitor=1";
    $successUrl = $baseUrl . "/my_account/payment/payment-success.php?payment_status=success&module=purchase_token_outside&name=" . urlencode($name) . "&email=" . urlencode($email)."&is_visitor=1";
}
// PayPal API credentials
$paypal_client_id = PAYPAL_CLIENT_ID;
$paypal_secret = PAYPAL_SECRET;

// Set up PayPal API endpoint
$paypal_api_url = 'https://api.sandbox.paypal.com/v1/';

$curl = curl_init();

// Prepare the authorization header with the client id and secret
$basic_auth = base64_encode($paypal_client_id . ":" . $paypal_secret);

// Set up the curl request for getting the access token
curl_setopt($curl, CURLOPT_URL, $paypal_api_url . 'oauth2/token');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Authorization: Basic ' . $basic_auth,
    'Content-Type: application/x-www-form-urlencoded'
]);

// Get the access token from PayPal API response
$response = curl_exec($curl);
$response_data = json_decode($response, true);

$access_token = $response_data['access_token'];

// Close the curl request
curl_close($curl);

// Set up payment details (order info)
$payment_data = [
    'intent' => 'sale',
    'payer' => [
        'payment_method' => 'paypal'
    ],
    'transactions' => [
        [
            'amount' => [
                'total' => $amount,  // Use the amount entered by the user
                'currency' => $currency  // Use the selected currency
            ],
            'description' => 'Purchase Token'
        ]
    ],
    'redirect_urls' => [
        'return_url' => $successUrl,  // Success URL
        'cancel_url' => $cancelUrl  // Cancel URL
    ]
];

// Convert payment data to JSON format
$payment_data_json = json_encode($payment_data);

// Send payment creation request to PayPal API
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $paypal_api_url . 'payments/payment');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $access_token,
    'Content-Type: application/json'
]);
curl_setopt($curl, CURLOPT_POSTFIELDS, $payment_data_json);

$response = curl_exec($curl);
$response_data = json_decode($response, true); 

// Check if the response data contains the expected fields
if (isset($response_data['state']) && $response_data['state'] == 'created') {
    // Iterate through the links array to find the approval URL
    $approval_url = null; // Default to null in case no approval URL is found
    if (isset($response_data['links']) && is_array($response_data['links'])) {
        
        foreach ($response_data['links'] as $link) {
            // Check for the 'approval_url' link
            if ($link['rel'] == 'approval_url') {
                $approval_url = $link['href'];
                break; // Exit loop once the approval URL is found
            }
        }
      
    }
    // Check if an approval URL was found
    if ($approval_url) {
        // Redirect to PayPal for payment approval
        header("Location: " . $approval_url);
        exit();
    } else {
        echo 'Error: Approval URL not found in the response.';
    }
} else {
    // If payment creation failed or state is not 'created', handle the error
    $error_message = isset($response_data['message']) ? $response_data['message'] : 'Unknown error occurred';
    echo 'Error: ' . $error_message;
}

// Close the cURL request
curl_close($curl);

?>
