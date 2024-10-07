<?php
session_start();
include("../db/connect.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM member_registration where email = '$email' and password = '$password'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$memberId = $row["member_id"];

$sql = "SELECT
TIMESTAMPDIFF( YEAR, expiry_date, now() ) as _years
,TIMESTAMPDIFF( MONTH, now(), expiry_date) % 12 as _month
,FLOOR( TIMESTAMPDIFF( DAY, now(), expiry_date) % 30.4375 ) as _day from token_purchase where (purchasedby = '$memberId' or memberid = '$memberId') and issued_date is not null ORDER BY issued_date DESC  LIMIT 1";
$user_expiration = mysqli_fetch_assoc(mysqli_query($link, $sql));

$isExpired = $user_expiration['_years'] == 0 && $user_expiration['_month'] == 0 && $user_expiration['_day'] == 0;

$rowCount = mysqli_num_rows($result);
    if ($isExpired){
        echo "Please renew your membership!";
    }else if ($rowCount > 0) {

        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $member_id = $row['member_id'];
        $fullname = $first_name . ' ' . $last_name;
        $_SESSION['fullname'] = $fullname; 
        $_SESSION['member_id'] = $member_id;
        echo "login successful";
        
    }else{
        echo"Invalid login";
    }    
?>