<?php
session_start();
include("../db/connect.php");
$member_id = $_POST['member_id'];
$token_no = $_POST['token_no'];


$sql = "update token_purchase set memberid = $member_id, status = 0 where token = '$token_no' and status = 1;";

$result = mysqli_query($link, $sql);
$result = mysqli_affected_rows($link);

if ($result > 0) {
    echo "Success";
} else {
    echo "Something went wrong, please make sure token exist & its valid too.";
}
?>


