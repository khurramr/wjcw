<?php
include("../db/connect.php");
$id = $_POST['id'];
$sp_type = $_POST['sp_type'];
$sp_name = $_POST['sp_name'];
$account_no = $_POST['account_no'];
$remark = $_POST['remark'];
$update = "UPDATE payment_methods SET service_provider_type = '$sp_type', service_provider_name = '$sp_name', account_no = '$account_no',
remarks = '$remark' WHERE id = '$id'";
mysqli_query($link, $update);
?>
<?php include "payment_method_select.php" ?>
