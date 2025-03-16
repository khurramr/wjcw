<?php
include("../db/connect.php");

$memberid = $_POST['memberid'];
$no_of_tokens = $_POST['no_of_tokens'];
$email = $_POST['email'];

$delete = "DELETE FROM token_purchased_online where memberid = '$memberid'";
mysqli_query($link, $delete);
$insert = "INSERT INTO token_purchased_online(memberid, no_of_tokens, email) VALUES('$memberid', '$no_of_tokens', '$email')";
mysqli_query($link, $insert);
?>