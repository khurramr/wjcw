<?php
session_start();
include("../db/connect.php");
$member_id = $_POST['member_id'];
$token_no = $_POST['token_no'];
$email = $_POST['email'];


$member_info_sql = "select * from member_registration where email = '$email' and member_id = '$member_id'";

$memberInfo = mysqli_query($link, $member_info_sql);
$memberInfoCount = mysqli_affected_rows($link);

if ($memberInfoCount > 0) {
    $sql = "update token_purchase set memberid = $member_id, status = 0 where token = '$token_no' and status = 1;";

    $result = mysqli_query($link, $sql);
    $result = mysqli_affected_rows($link);

    if ($result > 0) {
        echo "Success";
    }
} else {
    echo "Something went wrong, please make sure token is valid & your email is valid.";
}
?>


