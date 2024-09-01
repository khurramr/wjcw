<?php
include("../db/connect.php");
$reference_id  = $_POST['reference_id'];
$select = "SELECT reference_id from member_registration where reference_id = '$reference_id'";
$result = mysqli_query($link, $select);
$rowcount = mysqli_num_rows($result);
echo $rowcount;
?>