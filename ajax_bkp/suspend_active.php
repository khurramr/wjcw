<?php
include("../db/connect.php");
$id = $_POST['id'];
$status = $_POST['status'];
if($status == 1){
    $status = 0;
}else{
    $status = 1;
}
$update = "UPDATE member_registration SET status = '$status' WHERE id = $id";
mysqli_query($link, $update);
echo 1;
?>

