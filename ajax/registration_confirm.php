<?php
session_start();
include("../db/connect.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM member_registration where email = '$email' and password = '$password'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);


$rowCount = mysqli_num_rows($result);
    if ($rowCount > 0){
        
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