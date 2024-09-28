<?php 

include("../../../db/connect.php");

$id = $_POST["id"];

$sql = "SELECT * from wjcw_payments where id = $id";
$action = mysqli_fetch_assoc(mysqli_query($link, $sql))["action"];

mysqli_query($link, $action);

mysqli_query($link, "update wjcw_payments set active = 0 where id = $id;");

return "Success!";

?>