<?php 

include("../../../db/connect.php");


$sql = "SELECT * FROM member_registration where member_id = $member_id";
$current_user_level = mysqli_fetch_assoc(mysqli_query($link, $sql))["gift_donation_level"];

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 1;";
$result_level1 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 2;";
$result_level2 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 3;";
$result_level3 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 4;";
$result_level4 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 5;";
$result_level5 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 6;";
$result_level6 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 7;";
$result_level7 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 8;";
$result_level8 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 9;";
$result_level9 = mysqli_query($link, $sql);


$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 10;";
$result_level10 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 11;";
$result_level11 = mysqli_query($link, $sql);

$sql = "Select mr.first_name, mr.last_name, gdt.* from gift_donation_transactions gdt
  inner join member_registration mr ON (mr.member_id = gdt.sent_by)
where received_by = $member_id and level = 12;";
$result_level12 = mysqli_query($link, $sql);



$sql = "select wp.*, mr.first_name, mr.last_name, mr.gift_donation_level from wjcw_payments wp left join member_registration mr ON (mr.member_id = wp.sent_by)  where active = 1;";
$wjcw_payments = mysqli_query($link, $sql);



// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 2 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level2 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 3 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level3 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 4 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level4 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 5 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level5 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 6 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level6 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 7 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level7 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 8 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level8 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 9 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level9 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 10 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level10 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 11 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level11 = mysqli_num_rows($result);

// $sql = "Select * from gift_donation_transactions where received_by = $member_id and level = 12 and verified = 1";
// $result = mysqli_query($link, $sql);
// $result_level12 = mysqli_num_rows($result);


// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND
// gift_donation_transactions.`level` = 1";
// $result_level1 = mysqli_query($link, $sql);

// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.sent_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 2";

// $result_level2 = mysqli_query($link, $sql);


// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 3";
// $result_level3 = mysqli_query($link, $sql);

// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 4";

// $result_level4 = mysqli_query($link, $sql);


// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 5";

// $result_level5 = mysqli_query($link, $sql);

// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 6";

// $result_level6 = mysqli_query($link, $sql);


// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 7";

// $result_level7 = mysqli_query($link, $sql);

// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 8";

// $result_level8 = mysqli_query($link, $sql);


// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 9";

// $result_level9 = mysqli_query($link, $sql);

// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 10";

// $result_level10 = mysqli_query($link, $sql);


// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND 
// gift_donation_transactions.`level` = 11";

// $result_level11 = mysqli_query($link, $sql);

// $sql = "SELECT
// member_registration.member_id,
// member_registration.first_name,
// member_registration.last_name,
// gift_donation_transactions.method_of_payment,
// gift_donation_transactions.`level`,
// gift_donation_transactions.account_no,
// member_registration.email,
// member_registration.contact_no_1,
// gift_donation_transactions.amount,
// gift_donation_transactions.dated,
// gift_donation_transactions.remarks
// FROM
// member_registration
// INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
// WHERE
// gift_donation_transactions.received_by = $member_id AND gift_donation_transactions.verified = 1 AND
// gift_donation_transactions.`level` = 12";
// $result_level12 = mysqli_query($link, $sql);
?>