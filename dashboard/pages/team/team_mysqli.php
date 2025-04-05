<?php 

    include("../../../db/connect.php");
    $sql = "Select count(member_id) as total_members from member_registration where sponser_reference = '$member_id'and sponser_reference <> member_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_members = $row['total_members'];
    
    $sql = "Select count(member_id) as total_active from member_registration where sponser_reference = '$member_id' and status = '1' and sponser_reference <> member_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_active = $row['total_active'];
    
    $sql = "Select count(member_id) as total_suspended from member_registration where sponser_reference = '$member_id' and status = '2' and sponser_reference <> member_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_suspended = $row['total_suspended'];
    
    $sql = "Select count(member_id) as total_cancelled from member_registration where sponser_reference = '$member_id' and status = '3' and sponser_reference <> member_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_cancelled = $row['total_cancelled'];
    
    $sql = "Select count(member_id) as total_lapsed from member_registration where sponser_reference = '$member_id' and status = '4' and sponser_reference <> member_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_lapsed = $row['total_lapsed'];
    
    /*Total Members*/
    $sql = "Select * from member_registration where sponser_reference = '$member_id' and sponser_reference <> member_id";
    $result_total = mysqli_query($link, $sql);
    
    $sql = "Select * from member_registration where sponser_reference = '$member_id' and sponser_reference <> member_id";
    $result_total_detail = mysqli_query($link, $sql);
    

    /*Active Members*/
    $sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '1' and sponser_reference <> member_id";
    $result_active = mysqli_query($link, $sql);
    
    $sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '1' and sponser_reference <> member_id";
    $result_active_detail = mysqli_query($link, $sql);
    

    /*Suspended Members*/
    $sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '2' and sponser_reference <> member_id";
    $result_suspended = mysqli_query($link, $sql);

    $sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '2' and sponser_reference <> member_id";
    $result_suspended_detail = mysqli_query($link, $sql);


    /*Cancelled Members*/
    $sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '3' and sponser_reference <> member_id";
    $result_cancelled = mysqli_query($link, $sql);

    $sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '3' and sponser_reference <> member_id";
    $result_cancelled_detail = mysqli_query($link, $sql);

    /*Lapsed Members*/
    $sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '4' and sponser_reference <> member_id";
    $result_lapsed = mysqli_query($link, $sql);

    $sql = "Select * from member_registration where sponser_reference = '$member_id' and status = '4' and sponser_reference <> member_id";
    $result_lapsed_detail = mysqli_query($link, $sql);

?>