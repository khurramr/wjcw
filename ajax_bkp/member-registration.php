<?php
session_start();
include("../db/connect.php");
$member_id = $_POST['member_id'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email  = $_POST['email'];
$contactno  = $_POST['contactno'];
$icensing_fee = $_POST['icensing_fee'];
$gift_donation = $_POST['gift_donation'];


$token_no = $_POST['token_no'];
$select = "SELECT id FROM token_purchase where token = '$token_no' AND status = '1'";
$result = mysqli_query($link, $select);
$num_rows = mysqli_num_rows($result);
if($num_rows == 0){
    echo 'Invalid Token';
    exit();
}


$select = "SELECT email from member_registration where email = '$email'";
$result = mysqli_query($link, $select);
$num_rows = mysqli_num_rows($result);
if($num_rows >= 1){
    echo 'Duplicate Email';
    exit();
}



$registration_process = substr(md5(time(). $email . $firstname . $lastname), 20);
$_SESSION['registration_process'] = $registration_process;

$sql = "select member_id from member_registration where member_id = '$member_id'";

$result = mysqli_query($link, $sql);
$numrows = mysqli_num_rows($result);

if($numrows < 1){
    echo "0";
    exit();
}


$sql = "select max(member_id) as member_id from member_registration";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$member_id_add = $row['member_id'] + 1;


$insert = "INSERT INTO member_registration(registration_process, member_id, sponser_reference, token, password, first_name, last_name, email, contact_no_1, licensing_fee, gift_donation_amount) VALUES('$registration_process', '$member_id_add', '$member_id', '$token_no', '$password', '$firstname', '$lastname', '$email', '$contactno', '$icensing_fee', '$gift_donation')";
mysqli_query($link, $insert);
echo "Your information has been saved successfully!";
?>


