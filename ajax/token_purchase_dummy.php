<?php
include("../db/connect.php");

$memberid = $_POST['memberid'];
$no_of_tokens = $_POST['no_of_tokens'];
$email = $_POST['email'];
$date = date('Y-d-m');
$token = strtoupper(substr(md5(time(). $fullname . $i), 0, 14));
                                               
$insert = "INSERT INTO token_purchase(token, memberid, purchase_date, purchased_by, status, bank_key)
VALUES('$token', '$memberid', '$date', '$memberid', '1', 'free')";
echo mysqli_query($link, $insert);
?>