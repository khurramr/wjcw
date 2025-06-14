<?php 
    include("../db/connect.php");
    
    $sql = "Select count(member_id) as total_members from member_registration where sponser_reference = '$member_id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_members = $row['total_members'];

    $sql = "Select count(member_id) as active_members from member_registration where sponser_reference = '$member_id' and status = '1'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $active_members = $row['active_members'];

    $sql = "Select sum(amount) as total_sent from gift_donation_transactions where sent_by = '$member_id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_sent = $row['total_sent'];

    $sql = "Select sum(amount) as total_received from gift_donation_transactions where received_by = '$member_id' and verified is true";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_received = $row['total_received'];


    $next_stage_info = mysqli_fetch_assoc(mysqli_query($link, "select * from member_registration where member_id = $member_id"));
    $next_stage_amount = 0;
    $show_next_stage_btn = false;
    $current_level = $next_stage_info["gift_donation_level"];
    $payment_req_count = mysqli_num_rows(mysqli_query($link, "select * from wjcw_payments where sent_by = $member_id and Comment = 'Payment for next level' and active = 1"));
    $members_enrolled_current_stage = mysqli_num_rows(mysqli_query($link, "SELECT * FROM gift_donation_transactions g where g.received_by = $member_id and g.level = $current_level;"));
    if ($payment_req_count == 0 && $members_enrolled_current_stage >= 6) {
        $show_next_stage_btn = true;
    };
    if (($next_stage_info["gift_donation_level"] + 1) == 1) {
        $next_stage_amount = 10;
    } else if (($next_stage_info["gift_donation_level"] + 1) == 2) {
        $next_stage_amount = 10;
    }  else if (($next_stage_info["gift_donation_level"] + 1) == 3) {
        $next_stage_amount = 25;
    }  else if (($next_stage_info["gift_donation_level"] + 1) == 4) {
        $next_stage_amount = 125;
    }  else if (($next_stage_info["gift_donation_level"] + 1) == 5) {
        $next_stage_amount = 250;
    }  else if (($next_stage_info["gift_donation_level"] + 1) == 6) {
        $next_stage_amount = 500;
    }  else if (($next_stage_info["gift_donation_level"] + 1) == 7) {
        $next_stage_amount = 1000;
    }  else if (($next_stage_info["gift_donation_level"] + 1) == 8) {
        $next_stage_amount = 2000;
    }   else if (($next_stage_info["gift_donation_level"] + 1) == 9) {
        $next_stage_amount = 4000;
    }   else if (($next_stage_info["gift_donation_level"] + 1) == 10) {
        $next_stage_amount = 8000;
    }   else if (($next_stage_info["gift_donation_level"] + 1) == 11) {
        $next_stage_amount = 16000;
    }   else if (($next_stage_info["gift_donation_level"] + 1) == 12) {
        $next_stage_amount = 96000;
    } 
    //Auto Selection of Send Gifts 

$sql = "SELECT * FROM member_registration WHERE member_id = $member_id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$sponser_reference = $row['sponser_reference'];
$sql = "SELECT * FROM gift_donation_transactions where sent_by = $member_id AND received_by = '$sponser_reference' and level = 1";
$result = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows == 0){
     $sql = "INSERT INTO gift_donation_transactions (sent_by, received_by, amount, level, method_of_payment, account_no, remarks)
             SELECT $member_id, member_registration.member_id, member_registration.gift_donation_amount,
                    member_registration.gift_donation_level, payment_methods.service_provider_name,  payment_methods.account_no, remarks                 
                                    FROM
                                    member_registration
                                    LEFT OUTER JOIN payment_methods ON member_registration.member_id = payment_methods.memberid
                                    WHERE
                                    member_registration.member_id = $sponser_reference AND member_registration.gift_donation_level = '1' LIMIT 1";

      $result = mysqli_query($link, $sql);
}     

$sql = "SELECT * FROM gift_donation_transactions where sent_by = $member_id";
$result = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows < 2){

$sql_check_user = "SELECT * FROM member_registration WHERE sponser_reference = '$sponser_reference' and gift_donation_level = 1 and member_id <> $member_id 
                   ORDER BY id ASC";
$result_check_user = mysqli_query($link, $sql_check_user);
while($row = mysqli_fetch_assoc($result_check_user)){
$receiver_id = $row['member_id'];
$num_rows = mysqli_num_rows($result_check_user);

if($num_rows < 6){
$sql = "SELECT * FROM gift_donation_transactions WHERE sent_by = $receiver_id AND received_by = $member_id AND level = 1";
$result = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows == 0){    
$sql = "SELECT * FROM gift_donation_transactions WHERE sent_by = $member_id AND received_by = $receiver_id AND level = 1";
$result = mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows == 0){
     $insert_sql = "Insert Into gift_donation_transactions (sent_by, received_by, amount, level, method_of_payment, account_no, remarks)
             SELECT $member_id, member_registration.member_id, member_registration.gift_donation_amount,
                    member_registration.gift_donation_level, payment_methods.service_provider_name,  payment_methods.account_no, remarks                 
                                    FROM
                                    member_registration
                                    LEFT OUTER JOIN payment_methods ON member_registration.member_id = payment_methods.memberid
                                    WHERE
                                    member_registration.member_id = $receiver_id LIMIT 1";
mysqli_query($link, $insert_sql);
break;
}}}}}

// Send Gift to Grand Parent if There is no close sponser found and receivers are less than 2.

$sql1 = "SELECT * FROM gift_donation_transactions where sent_by = $member_id";
$result1 = mysqli_query($link, $sql1);
$num_rows1 = mysqli_num_rows($result1);

    $sql_sponser = "SELECT * FROM member_registration where member_id = $sponser_reference";
    $result_sponser = mysqli_query($link, $sql_sponser);
    $row_sponser = mysqli_fetch_assoc($result_sponser);
    $row_sponser_id = $row_sponser['sponser_reference'];

if($num_rows1 < 2){
         $insert_sql = "Insert Into gift_donation_transactions (sent_by, received_by, amount, level, method_of_payment, account_no, remarks)
             SELECT $member_id, member_registration.member_id, member_registration.gift_donation_amount,
                    member_registration.gift_donation_level, payment_methods.service_provider_name,  payment_methods.account_no, remarks                 
                                    FROM
                                    member_registration
                                    LEFT OUTER JOIN payment_methods ON member_registration.member_id = payment_methods.memberid
                                    WHERE
                                    member_registration.member_id = $row_sponser_id LIMIT 1";
    mysqli_query($link, $insert_sql);

}


?>