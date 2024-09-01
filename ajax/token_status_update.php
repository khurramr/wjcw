<?php
include("../db/connect.php");
$token = $_POST['token'];
$date = date("Y-d-m");
$expiry_date = date("Y-d-m", strtotime($date. ' + 1 year'));

$sql = "SELECT * FROM member_registration where token = '$token'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$member_id = $row['member_id'];


$update = "UPDATE token_purchase SET status = '0', issued_date = '$date', purchasedby = '$member_id', expiry_date = '$expiry_date' where token = '$token'";
mysqli_query($link, $update);
?>