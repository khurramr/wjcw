<?php

include("session_login.php");
include("index_mysqli.php");

$next_level = $next_stage_info["gift_donation_level"] + 1;
$action = "update member_registration set gift_donation_level = $next_level where member_id = $member_id";
$sql = "insert into wjcw_payments(sent_by, amount, comment, action, active)
values($member_id, $next_stage_amount, 'Payment for next level', '$action', 1)
";

    $result = mysqli_query($link, $sql);
    return "Success!";
    
?>