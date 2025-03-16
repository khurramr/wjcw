<?php
session_start();
include("../db/connect.php");
$id = $_POST['id'];

$member_info_sql = "delete from gift_donation_transactions where id = $id";

$memberInfo = mysqli_query($link, $member_info_sql);
echo "Success";
?>


