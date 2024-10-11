<?php
include("../db/connect.php");
include("../db/mail.php");
include("../dashboard/session_login.php");
$id  = $_POST['id'];
$select = "UPDATE gift_donation_transactions SET verified = '1' where id = '$id'";
$result = mysqli_query($link, $select);

$no_of_transation = mysqli_fetch_assoc(mysqli_query($link, "SELECT count(*) as count, level FROM gift_donation_transactions where received_by = $member_id and verified = 1 group by level order by level desc limit 1"));

if (isset($no_of_transation["count"]) && $no_of_transation["count"] == '6') {
        $insert_sql = "Insert Into gift_donation_transactions (sent_by, received_by, amount, level, method_of_payment, account_no, remarks)
                SELECT $member_id, member_registration.sponser_reference, member_registration.gift_donation_amount,
                       member_registration.gift_donation_level + 1, payment_methods.service_provider_name,  payment_methods.account_no, remarks                 
                                       FROM
                                       member_registration
                                       LEFT OUTER JOIN payment_methods ON member_registration.member_id = payment_methods.memberid
                                       WHERE
                                       member_registration.member_id = $member_id LIMIT 1";
   mysqli_query($link, $insert_sql);
    $person_info = mysqli_fetch_assoc(mysqli_query($link, "select * from member_registration mr where mr.member_id = $member_id"));
    if ($person_info["email"] != '') {
        $stages_n_payment = array(
            1 => "60",
            2=> "120",
            3=> "300",
            4=> "750",
            5=> "1500",
            6=> "3000",
            7=> "6000",
            8=> "12000",
            9=> "24000",
            10=> "48000",
            11=> "96000",
            12=> "192000"
        );
        $pay_wjcf = array(
            1 => "10",
            2 => "10",
            3 => "25",
            4 => "125",
            5 => "250",
            6 => "500",
            7 => "1000",
            8 => "2000",
            9 => "4000",
            10 => "8000",
            11 => "16000",
            12 => "96000"
        );
        // sendMail($person_info["email"], "Ready for level up?", "You are entited to apply for level ". ((int)$no_of_transation["level"] + 1), "muhammadhani295@gmail.com");
        $name = $person_info["first_name"]." ".$person_info["last_name"];
        $current_level = (int)$person_info["gift_donation_level"];
        $current_level_payment = $stages_n_payment[$current_level];
        $next_level = (int)$person_info["gift_donation_level"] + 1;
        $next_level_payment = $pay_wjcf[$next_level];
        sendNextStepMail($person_info["email"], $name, $current_level, $current_level_payment, $next_level, $next_level_payment, $person_info["member_id"]);
    }
}
if($result){
echo "1";
}

?>