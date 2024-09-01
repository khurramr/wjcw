<?php
include("../db/connect.php");
$id  = $_POST['id'];
$select = "UPDATE gift_donation_transactions SET verified = '1' where id = '$id'";
if($result = mysqli_query($link, $select)){
echo "1";
}

?>