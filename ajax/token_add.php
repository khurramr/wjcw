<?php
include("../db/connect.php");
$no_of_tokens = $_POST['no_of_tokens'];
$memberid = $_POST['memberid'];
$annual_fee = $_POST['annual_fee'];

$member_name = "Atif";
$i = 1;
while($i <= $no_of_tokens){
$token = md5(time(). $member_name. $i);
$insert = "INSERT INTO token_purchase(memberid, token, annual_fee) 
            VALUES('$memberid', '$token', '$annual_fee')";

mysqli_query($link, $insert);
$i++;    
}    
include "token_purchase_select.php"
?>