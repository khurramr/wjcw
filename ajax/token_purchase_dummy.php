<?php
include('../dashboard/session_login.php');
include("../db/connect.php");

$name = isset($fullname) ? $fullname : "Test-User";

$memberid = $_POST['memberid'];
$no_of_tokens = $_POST['no_of_tokens'];
$date = date('Y-d-m');
$token = strtoupper(substr(md5(time(). $name . $memberid), 0, 14));
            
// mysqli_query($link, "delete from token_purchase where memberid = $member_id;");

$amount = $no_of_tokens * 12;
$values = "";
for ($x = 0; $x < $no_of_tokens; $x++) {
    $token = strtoupper(substr(md5(time(). $name . $memberid . $x), 0, 14));
    $values .= "('$token', $memberid, $memberid, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP + INTERVAL 1 YEAR, 12, 1)";
    if (($x+1) != $no_of_tokens) {
        $values .= ",";
    }


}
$action = $memberid == 0 ? "" : "INSERT INTO token_purchase (token, memberid, purchasedby, purchase_date, issued_date, expiry_date, annual_fee, status) values $values";

$insert = "insert into wjcw_payments (sent_by, amount, date, Comment, action, active)
values ($memberid, $amount, $date, 'Purchase Token Online', \"$action\", 1);
";
echo mysqli_query($link, $insert);
?>