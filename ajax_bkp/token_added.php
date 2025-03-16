<?php
include("../db/connect.php");
$id = $_POST['id'];
$update = "UPDATE token_purchase SET added = '1' WHERE id = '$id'"; 
mysqli_query($link, $update);
include "token_purchase_select.php"
?>