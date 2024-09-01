<?php
include("../db/connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email  = $_POST['email'];
$contactno  = $_POST['contactno'];
$insert = "INSERT INTO registration(user_name, password, first_name, last_name, email, contact_no) VALUES('$username', '$password', '$firstname', '$lastname', '$email', '$contactno')";
mysqli_query($link, $insert);
echo " You have been successfully registered";
?>