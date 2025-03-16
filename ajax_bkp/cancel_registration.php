<?php
include("../db/connect.php");
$registration_process = $_POST['registration_process'];
$delete = "DELETE FROM member_registration where registration_process = '$registration_process'";
mysqli_query($link, $delete);
?>