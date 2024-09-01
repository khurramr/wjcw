<?php
include("../db/connect.php");
$add_sp_type = $_POST['add_sp_type'];
$add_sp_name = $_POST['add_sp_name'];
$add_account_no = $_POST['add_account_no'];
$remarks = $_POST['remark'];
$member_id = $_POST['member_id'];
$i = 0;
$insert = "INSERT INTO payment_methods(service_provider_type, service_provider_name, account_no, memberid, remarks) 
            VALUES('$add_sp_type', '$add_sp_name', '$add_account_no', '$member_id', '$remarks')";

mysqli_query($link, $insert);
?>
<?php include "payment_method_select.php" ?>

