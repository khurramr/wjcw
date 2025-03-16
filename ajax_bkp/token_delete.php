<?php
include("../db/connect.php");
$id = $_POST['id'];
$delete = "DELETE FROM token_purchase where id = '$id'";
mysqli_query($link, $delete);
?>

<?php include "token_purchase_select.php" ?>
