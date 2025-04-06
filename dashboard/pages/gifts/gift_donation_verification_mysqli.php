<?php 
include("../../../db/connect.php");
/*STAGE LEVEL 01*/

$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '1'";
$result_level_1 = mysqli_query($link, $sql);

/*STAGE LEVEL 02*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '2'";
$result_level_2 = mysqli_query($link, $sql);

/*STAGE LEVEL 03*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '3'";
$result_level_3 = mysqli_query($link, $sql);
/*STAGE LEVEL 04*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '4'";
$result_level_4 = mysqli_query($link, $sql);

/*STAGE LEVEL 05*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '5'";
$result_level_5 = mysqli_query($link, $sql);

/*STAGE LEVEL 06*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '6'";
$result_level_6 = mysqli_query($link, $sql);

/*STAGE LEVEL 07*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '7'";
$result_level_7 = mysqli_query($link, $sql);

/*STAGE LEVEL 08*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '8'";
$result_level_8 = mysqli_query($link, $sql);

/*STAGE LEVEL 09*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '9'";
$result_level_9 = mysqli_query($link, $sql);

/*STAGE LEVEL 10*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '10'";
$result_level_10 = mysqli_query($link, $sql);

/*STAGE LEVEL 11*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '11'";
$result_level_11 = mysqli_query($link, $sql);

/*STAGE LEVEL 12*/
$sql = "SELECT
member_registration.member_id,
member_registration.first_name,
member_registration.last_name,
gift_donation_transactions.id as gdt_id,
gift_donation_transactions.amount,
gift_donation_transactions.method_of_payment,
gift_donation_transactions.dated,
gift_donation_transactions.verified,
gift_donation_transactions.`status`
FROM
member_registration
INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.sent_by
WHERE
gift_donation_transactions.sent_by <> gift_donation_transactions.received_by and 
gift_donation_transactions.received_by = '$member_id' AND gift_donation_transactions.level = '12'";
$result_level_12 = mysqli_query($link, $sql);

?>