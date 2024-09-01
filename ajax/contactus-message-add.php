<?php
include("../db/connect.php");
$member_id = $_POST['member_id'];
$message  = $_POST['message'];

$sql = "SELECT * FROM member_registration where member_id = '$member_id'";
$result = mysqli_query($link, $sql);
$rowCount = mysqli_num_rows($result);
if($rowCount >= 1){
    $insert = "INSERT INTO chat(sender_userid, message) VALUES('$member_id', '$message')";
    mysqli_query($link, $insert);
    echo " Your message has been sent";
}else {
    echo "0";
}    
?>