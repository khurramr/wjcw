<?php
session_start();
// print_r($_POST);
// die;
if(isset($_SESSION['fullname']) || isset($_GET["is_visitor"]) || isset($_POST["is_visitor"])){
    if (isset($_SESSION['fullname'])) {
        $fullname = $_SESSION['fullname']; 
        $member_id = $_SESSION['member_id'];    
    }
} else
    {
    header("location: https://wjcwcf.com/index.php");
}
?>