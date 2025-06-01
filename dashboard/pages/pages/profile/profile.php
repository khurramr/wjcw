<?php
include("../../session_login.php"); 
include("../../../db/connect.php");

$select = "SELECT * FROM member_registration where member_id = '$member_id'";
$result = mysqli_query($link, $select);
$row = mysqli_fetch_assoc($result);
$member_id = $row['member_id'];
$fname = $row['first_name'];
$lname = $row['last_name'];
$password = $row['password'];
$contact_no = $row['contact_no_1'];
$email = $row['email'];
$address = $row['address_1'];
$country = $row['country'];
$city = $row['city'];
$zip_code = $row['zip_code'];

if (isset($_GET['update'])) {
  $firstNameUpdate = $_GET['firstName'];
  $lastNameUpdate = $_GET['lastName'];
  $passwordUpdate = $_GET['password'];
  $emailUpdate = $_GET['email'];
  $phoneUpdate = $_GET['phone'];
  $address1Update = $_GET['address_1'];
  $countryUpdate = $_GET['country'];
  $cityUpdate = $_GET['city'];
  $zipUpdate = $_GET['zip'];

  // SETTING INTO FIELDS
  $fname = $firstNameUpdate;
  $lname = $lastNameUpdate;
  $password = $password;
  $contact_no = $phoneUpdate;
  $email = $emailUpdate;
  $address = $address1Update;
  $country = $countryUpdate;
  $city = $cityUpdate;
  $zip_code = $zipUpdate;
  
  $updateQuery = "UPDATE member_registration SET first_name = '$firstNameUpdate', last_name = '$lastNameUpdate', address_1 = '$address1Update', email = '$emailUpdate', contact_no_1 = '$phoneUpdate', password = '$passwordUpdate', country = '$countryUpdate', city = '$cityUpdate', zip_code = '$zipUpdate' where member_id = '$member_id'";
  mysqli_query($link, $updateQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/size_adjustment.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel="stylesheet" href="style.css">

<link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

   <style>
    .header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
    }
    .span_alert {
    display:none
}

    .bigicon {
        font-size: 22px;
        color: #36A0FF;
    }
    
        
    input[type=text], input[type=password] {
      border: 1px solid purple;
    }    
    
    .checkbox-inline {
/*    padding-left: 30px !important;*/
    margin-right: 15px;
    }    
        
  .required:after {
    content:"*";
    color: red;
  }
</style>


<style>
   .expand{
    width: 100%;
    height: auto;
    -webkit-transition: width .2s;
    position:absolute;
    top:0; right:-5%; 
}
.expand:hover{
    width:110%
}
/*Not supported in firefox / edge browsers */
.scroll-menu {
  width: 100%;
  height: 800px;
  overflow: auto;
}
/* width */
.scroll-menu::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.scroll-menu::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.scroll-menu::-webkit-scrollbar-thumb {
/*  background: #5cb85c; */
  background: grey; 
  border-radius: 10px;
}

/* Handle on hover */
.scroll-menu::-webkit-scrollbar-thumb:hover {
/*  background: #0275d8; */
  background: #5bc0de; 
}
    
</style>    
</head>
<body class="hold-transition sidebar-mini">
<?php include"../../../google_translator.php"; ?>
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
    <img src="../../../assets/images/cropped-logo.png" alt="WJCW Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WJCW</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/fafa.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $fullname; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
       <?php include"../sidebar-menu-pages.php" ?>      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php include"../../header_green.php" ?>
        <div class="content-wrapper">
        <div class="container" style="position:relative">
            <?php include "profille-form.php" ?>
        </div>
        
  </div>
  </div>
  <?php include"../../copy_right.php"; ?>

<script>

$("#btn_cancel").click((e) => {
  e.preventDefault();
  location.reload();
});

$("#save_edit").click(function(){
var sp_type = $("#spt_update").val();
var sp_name = $("#spn_update").val();
var account_no = $("#acc_update").val();
var id =  $("#row_id").val();
$.ajax({
    url:"../../../ajax/payment_method_update.php",
    method:"post",
    data:{id:id, sp_type:sp_type, sp_name:sp_name, account_no:account_no},
    success:function(data, success){
        $("#payment_methods").html(data);          
        $("#saved").show().delay(1250).fadeOut(function(){
                    $('#modal_edit').modal('hide');        
        });          

    }
})
    
})
    
$(".btn-edit").click(function(){
var id = $(this).attr("id_btn");
var spt = $("#spt_" + id).text(); 
var spt = $("#spt_" + id).text(); 
var spn = $("#spn_" + id).text(); 
var acc = $("#acc_" + id).text(); 
$("#spt_update").val(spt);
$("#spn_update").val(spn);
$("#acc_update").val(acc);
$("#row_id").val(id);
 $('#modal_edit').modal('show');
})
    
$(".btn-delete").click(function(){
var id = ($(this).attr("id_btn"));
$.ajax({
            url:"../../../ajax/payment_method_delete.php",
            method:"post",
            data:{id:id},
                    success:function(data, success){
                   $("#payment_methods").html(data);  
                      
                    }   
})    
});
    
$("#btn_add_payment_method").click(function(){
var add_sp_type = $("#add_sp_type").val();
var add_sp_name = $("#add_sp_name").val();
var add_account_no = $("#add_account_no").val();
var memberid = "586";//$("#memberid").val();
    
if(add_sp_type == ""){
$("#span_add_sp_type").show();    
    return false;
}else{
    $("#span_add_sp_type").hide();    
}   
    
if(add_sp_name == ""){
$("#span_add_sp_name").show();    
    return false;
}else{
    $("#span_add_sp_name").hide();    
}   
    
if(add_account_no == ""){
$("#span_add_account_no").show();    
    return false;
}else{
    $("#span_add_account_no").hide();    
}
    
$.ajax({
            url:"../../../ajax/payment_method_add.php",
            method:"post",
            data:{add_sp_type:add_sp_type, add_sp_name:add_sp_name, add_account_no:add_account_no, memberid:memberid},
                    success:function(data, success){
                  $("#payment_methods").html(data);  
                   $("#add_sp_type").val("");
                   $("#add_sp_name").val("");
                   $("#add_account_no").val("");
                        
                    }   
})
})    
</script>
<script>
$(document).ready(function(){
    var sidebar = "hidden";
    $(".div_fa_bars").click(function(){
    if ( $(window).width() > 700) { 
            $(".resizeable_h").removeClass("h_fonts");
            $(".resizeable_p").removeClass("p_fonts");
            $(".resizeable_h").removeClass("h_small_font_animate");
            $(".resizeable_p").removeClass("p_small_fonts_animate");
        if (sidebar == "hidden"){
            $(".resizeable_h").addClass("h_large_font_animate");
            $(".resizeable_p").addClass("p_large_font_animate");
            $(".expand").css("width", "115%");
            sidebar = "visible";
        }else if (sidebar == "visible"){
            $(".resizeable_h").removeClass("h_large_font_animate");
            $(".resizeable_p").removeClass("p_large_font_animate");
            $(".expand").css("width", "100%");
            $(".resizeable_h").addClass("h_small_font_animate");
            $(".resizeable_p").addClass("p_small_fonts_animate");
            sidebar = "hidden";
        }
    }        
    })
});
    
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>