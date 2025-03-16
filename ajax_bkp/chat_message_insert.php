<?php
include("../db/connect.php");
$id = $_POST['id'];
$sender = $_POST['sender'];
$reciever = $_POST['reciever'];
$msg = $_POST['msg'];
$login_id = $sender; 

if(isset($msg)){
$insert = "INSERT INTO chat(sender_userid, reciever_userid, message) 
            VALUES('$sender', '$reciever', '$msg')";
mysqli_query($link, $insert);
}

?>

<?php include("chat_data.php"); ?>