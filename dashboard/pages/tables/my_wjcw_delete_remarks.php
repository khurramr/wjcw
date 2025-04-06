<?php 

include("../../../db/connect.php");

$donation_id = $_POST["donation_id"];
$update = "DELETE FROM gift_donation_transactions where id = $donation_id ";
mysqli_query($link, $update);
?>