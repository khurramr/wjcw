<?php
session_start();
include("../db/connect.php");
$tokenId = $_POST['tokenId'];
$sql = "DELETE FROM token_purchase where id = $tokenId";
$result = mysqli_query($link, $sql);
// $row = mysqli_fetch_assoc($result);
echo "Deleted successfully!";

?>