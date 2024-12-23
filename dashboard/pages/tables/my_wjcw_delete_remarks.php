<?php 

include("../../../db/connect.php");

$donation_id = $_POST["donation_id"];
$update = "UPDATE gift_donation_transactions set remarks = null where id = $donation_id";
mysqli_query($link, $update);
?>