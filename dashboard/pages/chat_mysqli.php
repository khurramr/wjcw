<?php 
    include("../../db/connect.php");
    
    $login_id = $member_id;

    $sql = "Select * from member_registration where member_id = '$login_id'";
    $result = mysqli_query($link, $sql);
    $me = mysqli_fetch_assoc($result);
    $sponser_reference = $me['sponser_reference'];


    $sql = "Select * from member_registration where member_id = '$sponser_reference'";
    $sponser = mysqli_query($link, $sql);
    
    $sql = "Select * from member_registration where sponser_reference = '$login_id'";
    $members = mysqli_query($link, $sql);

?>