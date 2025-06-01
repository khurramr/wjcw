<?php 
include("../../session_login.php");
include("../../../db/connect.php");

$logged_in_member = mysqli_fetch_assoc(mysqli_query($link, "select * from member_registration mr where mr.member_id = $member_id"));
if ($logged_in_member["privilege"] != 1) {
    header("location: https://wjcwcf.com/index.php");
}

$id = $_POST["id"];

$sql = "SELECT * from wjcw_payments where id = $id";
$action = mysqli_fetch_assoc(mysqli_query($link, $sql))["action"];
if ($action != "") {
    mysqli_query($link, $action);
}

mysqli_query($link, "update wjcw_payments set active = 0 where id = $id;");

return "Success!";

?>