<?php
session_start();
if(isset($_SESSION['fullname']) || isset($_GET["is_visitor"])){
    if (isset($_SESSION['fullname'])) {
        $fullname = $_SESSION['fullname']; 
        $member_id = $_SESSION['member_id'];    
    }
} else
    {
    // header("location: http://wjcwcf.com/index.php");
}
?>