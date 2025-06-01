<?php

include("../../../db/connect.php");
$sql = "Select count(member_id) as total_members from member_registration where sponser_reference = '$member_id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$total_members = $row['total_members'];

$sql = "Select count(member_id) as total_active from member_registration where sponser_reference = '$member_id' and status = '1'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$total_active = $row['total_active'];

$sql = "Select count(member_id) as total_suspended from member_registration where sponser_reference = '$member_id' and status = '2'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$total_suspended = $row['total_suspended'];

$sql = "Select count(member_id) as total_cancelled from member_registration where sponser_reference = '$member_id' and status = '3'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$total_cancelled = $row['total_cancelled'];

$sql = "Select count(member_id) as total_lapsed from member_registration where sponser_reference = '$member_id' and status = '4'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$total_lapsed = $row['total_lapsed'];


$sql = "SELECT * FROM member_registration where member_id = $member_id";
$user_detail = mysqli_query($link, $sql);
$user_detail = mysqli_fetch_assoc($user_detail);
$direct_name = $user_detail["first_name"].' '.$user_detail["last_name"];
$direct_member_id = $user_detail["member_id"];


/*Total Members*/
$sql = "SELECT * FROM member_registration";
$result_total = mysqli_query($link, $sql);
$all_total_members = mysqli_num_rows($result_total);

//my team members

$sql = "Select * from member_registration where sponser_reference = '$member_id'";
$result_total_detail = mysqli_query($link, $sql);
$sql = "
WITH RECURSIVE sponsorship_hierarchy AS (
    SELECT 
        member_id,
        first_name,
        last_name,
        email,
        contact_no_1,
        sponser_reference,
        0 AS level,
        CAST(member_id AS CHAR(1000)) AS visited_ids
    FROM member_registration
    WHERE member_id = '$member_id'  -- Starting from current member
    
    UNION ALL
    
    SELECT 
        m.member_id,
        m.first_name,
        m.last_name,
        m.email,
        m.contact_no_1,
        m.sponser_reference,
        sh.level + 1,
        CAST(CONCAT(sh.visited_ids, ',', m.member_id) AS CHAR(1000))
    FROM member_registration m
    JOIN sponsorship_hierarchy sh ON m.sponser_reference = sh.member_id
    WHERE FIND_IN_SET(m.member_id, sh.visited_ids) = 0
    AND sh.level < 100
)
SELECT 
    member_id,
    first_name,
    last_name,
    email,
    contact_no_1,
    sponser_reference AS invited_by,
    level
FROM sponsorship_hierarchy
WHERE level > 0  -- This excludes the root sponsor
ORDER BY level, member_id;
";

$result_hierarchy = mysqli_query($link, $sql);
$total_members = mysqli_num_rows($result_hierarchy);


// active members
$sql_active_members = "
WITH RECURSIVE sponsorship_hierarchy AS (
    -- Start with the root sponsor
    SELECT 
        mr.member_id,
        mr.first_name,
        mr.last_name,
        mr.email,
        mr.contact_no_1,
        mr.sponser_reference,
        0 AS level,
        CAST(mr.member_id AS CHAR(1000)) AS visited_ids
    FROM member_registration mr
    WHERE mr.member_id = '$member_id'  -- Starting member
    
    UNION ALL
    
    -- Find direct invitees not already in the hierarchy
    SELECT 
        m.member_id,
        m.first_name,
        m.last_name,
        m.email,
        m.contact_no_1,
        m.sponser_reference,
        sh.level + 1,
        CAST(CONCAT(sh.visited_ids, ',', m.member_id) AS CHAR(1000))
    FROM member_registration m
    JOIN sponsorship_hierarchy sh ON m.sponser_reference = sh.member_id
    WHERE FIND_IN_SET(m.member_id, sh.visited_ids) = 0  -- Ensure no duplicates
    AND sh.level < 100  -- Prevent infinite recursion
)
SELECT DISTINCT 
    sh.member_id,
    sh.first_name,
    sh.last_name,
    sh.email,
    sh.contact_no_1,
    sh.sponser_reference AS invited_by,
    sh.level,
    tp.expiry_date,
    CONCAT(
        FLOOR(DATEDIFF(tp.expiry_date, NOW()) / 30), ' months ', 
        MOD(DATEDIFF(tp.expiry_date, NOW()), 30), ' days'
    ) AS remaining_days
FROM sponsorship_hierarchy sh
LEFT JOIN token_purchase tp ON sh.member_id = tp.purchasedby
WHERE sh.level > 0  -- Exclude the root sponsor
  AND tp.expiry_date > NOW()  -- Exclude expired tokens
ORDER BY sh.level, sh.member_id;
";

$result_active_members = mysqli_query($link, $sql_active_members);
$total_active = mysqli_num_rows($result_active_members);

// //inactive 
$sql_inactive_members = "
WITH RECURSIVE sponsorship_hierarchy AS (

    SELECT 
        mr.member_id,
        mr.first_name,
        mr.last_name,
        mr.email,
        mr.contact_no_1,
        mr.sponser_reference,
        0 AS level,
        CAST(mr.member_id AS CHAR(1000)) AS visited_ids
    FROM member_registration mr
    WHERE mr.member_id = '51214' 
    
    UNION ALL
    
   
    SELECT 
        m.member_id,
        m.first_name,
        m.last_name,
        m.email,
        m.contact_no_1,
        m.sponser_reference,
        sh.level + 1,
        CAST(CONCAT(sh.visited_ids, ',', m.member_id) AS CHAR(1000))
    FROM member_registration m
    JOIN sponsorship_hierarchy sh ON m.sponser_reference = sh.member_id
    WHERE FIND_IN_SET(m.member_id, sh.visited_ids) = 0  
    AND sh.level < 100  
)
SELECT DISTINCT
    sh.member_id,
    sh.first_name,
    sh.last_name,
    sh.email,
    sh.contact_no_1,
    sh.sponser_reference AS invited_by,
    sh.level,
    CASE
        WHEN tp.expiry_date <= NOW() THEN 'Pending Renewal'  
        ELSE 'Active'  
    END AS renewal
FROM sponsorship_hierarchy sh
LEFT JOIN token_purchase tp ON sh.member_id = tp.purchasedby
WHERE sh.level > 0  -- Exclude the root sponsor
  AND tp.expiry_date <= NOW() 
ORDER BY sh.level, sh.member_id;
";

$result_inactive_members = mysqli_query($link, $sql_inactive_members);
$total_inactive = mysqli_num_rows($result_inactive_members);


//direct sponsor
$sql_direct_sponsors = "
SELECT * 
FROM member_registration 
WHERE sponser_reference = $member_id
and sponser_reference <> member_id
ORDER BY first_name, last_name;
";

$result_direct_sponsors = mysqli_query($link, $sql_direct_sponsors);
$total_direct_sponsors = mysqli_num_rows($result_direct_sponsors);


// Count of active members (simpler version for display)
$sql_active_count = "SELECT COUNT(*) as total_active FROM member_registration 
                    WHERE sponser_reference = '$member_id' AND status = '1'";
$result = mysqli_query($link, $sql_active_count);
$row = mysqli_fetch_assoc($result);
$total_active_count = $row['total_active'];


/*Active Members*/
$sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '1'";
$result_active = mysqli_query($link, $sql);

$sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '1'";
$result_active_detail = mysqli_query($link, $sql);


/*Suspended Members*/
$sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '2'";
$result_suspended = mysqli_query($link, $sql);

$sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '2'";
$result_suspended_detail = mysqli_query($link, $sql);


/*Cancelled Members*/
$sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '3'";
$result_cancelled = mysqli_query($link, $sql);

$sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '3'";
$result_cancelled_detail = mysqli_query($link, $sql);

/*Lapsed Members*/
$sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '4'";
$result_lapsed = mysqli_query($link, $sql);

$sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '4'";
$result_lapsed_detail = mysqli_query($link, $sql);
