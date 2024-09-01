<?php
include("../db/connect.php");
$id = $_POST['id'];
$member_id = $_POST['member_id'];
$delete = "DELETE FROM payment_methods where id = '$id'";
mysqli_query($link, $delete);
?>

<?php include "payment_method_select.php" ?>
