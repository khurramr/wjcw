<?php 

include("../../../db/connect.php");

$sql = "Select SUM(amount) as Total from gift_donation_transactions where sent_by = $member_id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$Total = $row['Total'];

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and sent_by = $member_id and level = 1 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level1 = mysqli_num_rows($result);


$sql = "Select * from gift_donation_transactions where sent_by <> received_by and sent_by = $member_id and level = 2 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level2 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and sent_by = $member_id and level = 3 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level3 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and sent_by = $member_id and level = 4 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level4 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and sent_by = $member_id and level = 5 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level5 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where  sent_by <> received_by and sent_by = $member_id and level = 6 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level6 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and  sent_by = $member_id and level = 7 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level7 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and  sent_by = $member_id and level = 8 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level8 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and  sent_by = $member_id and level = 9 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level9 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and  sent_by = $member_id and level = 10 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level10 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where sent_by <> received_by and  sent_by = $member_id and level = 11 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level11 = mysqli_num_rows($result);

$sql = "Select * from gift_donation_transactions where  sent_by <> received_by and sent_by = $member_id and level = 12 and verified = 1";
$result = mysqli_query($link, $sql);
$status_level12 = mysqli_num_rows($result);


$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 1";
$result_level1 = mysqli_query($link, $sql);

$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 2";

$result_level2 = mysqli_query($link, $sql);


$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 3";
$result_level3 = mysqli_query($link, $sql);

$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 4";

$result_level4 = mysqli_query($link, $sql);


$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 5";

$result_level5 = mysqli_query($link, $sql);

$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 6";

$result_level6 = mysqli_query($link, $sql);


$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 7";

$result_level7 = mysqli_query($link, $sql);

$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 8";

$result_level8 = mysqli_query($link, $sql);


$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 9";

$result_level9 = mysqli_query($link, $sql);

$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 10";

$result_level10 = mysqli_query($link, $sql);


$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 11";

$result_level11 = mysqli_query($link, $sql);

$sql = "SELECT
gift_donation_transactions.sent_by,
gift_donation_transactions.received_by,
gift_donation_transactions.amount,
gift_donation_transactions.`level`,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.account_no,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
member_registration.first_name,
member_registration.last_name
FROM
gift_donation_transactions
INNER JOIN member_registration ON gift_donation_transactions.received_by = member_registration.member_id
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.sent_by = $member_id AND 
gift_donation_transactions.`level` = 12";

$result_level12 = mysqli_query($link, $sql);
?>