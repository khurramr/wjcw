<?php
include('../dashboard/session_login.php');
include("../db/connect.php");

$memberid = $_POST['memberid'];
$no_of_tokens = $_POST['no_of_tokens'];
$date = date('Y-d-m');
$token = strtoupper(substr(md5(time(). $fullname . $memberid), 0, 14));
            
// mysqli_query($link, "delete from token_purchase where memberid = $member_id;");

$amount = $no_of_tokens * 12;
$action = "INSERT INTO token_purchased_online(memberid, no_of_tokens) VALUES('$memberid', '$no_of_tokens');";

$insert = "insert into wjcw_payments (sent_by, amount, date, Comment, action, active)
values ($member_id, $amount, $date, 'Purchase Token Online', \"$action\", 1);
";

echo mysqli_query($link, $insert);
?>