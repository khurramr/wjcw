<?php
$data = json_decode(file_get_contents('php://input'), true);
if(!isset($data['is_visitor'])){
    include('../../dashboard/session_login.php');
}
include("../../db/connect.php");
include("mail/send_email_on_purchese_token.php");

$name = isset($fullname) ? $fullname : "Test-User";

if(isset($data['module']) && $data['module'] == 'purchase_token'){
    $no_of_tokens = $data['no_of_tokens'];
    if($no_of_tokens > 0){
        $memberid = $data['memberid'];
        $description = $data['token']['paymentMethodData']['description'];
        $cardDetails = $data['token']['paymentMethodData']['info']['cardDetails'];
        $cardNetwork = $data['token']['paymentMethodData']['info']['cardNetwork'];
        $token = $data['token']['paymentMethodData']['tokenizationData']['token'];
        $date = date('Y-m-d');
        $token = strtoupper(substr(md5(time(). $name . $memberid), 0, 14));
                    
        // mysqli_query($link, "delete from token_purchase where memberid = $member_id;");
    
        $amount = $no_of_tokens * 12;
        $values = "";
    
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
        $select = "SELECT * FROM member_registration where member_id = '$member_id'";
        $result = mysqli_query($link, $select);
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $name = $row['first_name'].' '.$row['last_name'];
        sendTokenPurchaseEmail($email,$name,$amount,$token_arr,'WJCW CF Purchase token successful');
    
        echo mysqli_query($link, $insert);   
    }else{
        return 0;
    }
   
}
if(isset($data['module']) && $data['module'] == 'purchase_token_outside'){
    $no_of_tokens = $data['no_of_tokens'];
    if($no_of_tokens > 0){
        $name = $data['name'];
        $email = $data['email'];
        $memberid = NULL;
        $description = $data['token']['paymentMethodData']['description'];
        $cardDetails = $data['token']['paymentMethodData']['info']['cardDetails'];
        $cardNetwork = $data['token']['paymentMethodData']['info']['cardNetwork'];
        $token = $data['token']['paymentMethodData']['tokenizationData']['token'];
        $date = date('Y-m-d');
        $token = strtoupper(substr(md5(time(). $name . $memberid), 0, 14));
    
        $amount = $no_of_tokens * 12;
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
        if(mysqli_query($link,$action)){
            echo 2;
        }
        // $insert = "insert into wjcw_payments (sent_by, amount, date, Comment, action, active)
        // values ($memberid, $amount, '$date', 'Purchase Token Online', \"$action\", 1)
        // ";
        sendTokenPurchaseEmail($email,$name,$amount,$token_arr,'WJCW CF Purchase token successful');

    
        // echo mysqli_query($link, $insert);   
    }else{
        return 0;
    }
   
}

if(isset($data['module']) && $data['module'] == 'pay_wjcw'){
    $memberid = $data['memberid'];
    $amount = $data['amount'];
    $date = date('Y-m-d');
    $action = '';
    $insert = "insert into wjcw_payments (sent_by, amount, date, Comment, action, active)
    values ($memberid, $amount, '$date', 'Purchase Token Online', \"$action\", 1);
    ";

    $select = "SELECT * FROM member_registration where member_id = '$member_id'";
    $result = mysqli_query($link, $select);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $name = $row['first_name'].' '.$row['last_name'];
    $token_arr = [];
    sendTokenPurchaseEmail($email,$name,$amount,$token_arr,'Payment to WJCW was successful');

    echo mysqli_query($link, $insert);   
}

?>