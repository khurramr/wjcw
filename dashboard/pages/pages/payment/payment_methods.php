<?php include("../../session_login.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css"><style>
<style>
#main-nav {
position: fixed;
/*width: 100%;*/
height: 100vh;

z-index: 9999;
}

   .expand{
    width: 100%;
    height: auto;
    -webkit-transition: width .2s;
    position:absolute;
    top:0; right:-5%; 
}
.p_fonts {text-align:justify}

.scroll-menu {
  width: 100%;
  height: 700px;
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

/*Not supported in firefox / edge browsers */
.scroll {
  width: 100%;
  height:600px;
    
  overflow: auto;
  overflow-x: hidden    
}
/* width */
.scroll::-webkit-scrollbar {
  width: 15px;
}

/* Track */
.scroll::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px green; 
  border-radius: 10px;
}
 
/* Handle */
.scroll::-webkit-scrollbar-thumb {
  background: #5cb85c; 
  border-radius: 10px;
}

/* Handle on hover */
.scroll::-webkit-scrollbar-thumb:hover {
/*  background: #0275d8; */
  background: #5bc0de; 
}

</style>    
</head>
<body class="hold-transition sidebar-mini">
<?php include"../../../google_translator.php"; ?>
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" id="main-nav">
       <?php include"../sidebar-menu-pages.php" ?>      
  </aside>
<?php include"../../header_green.php" ?>
<div class="content-wrapper  mt-4 ">
<div class="container-fluid">
    <h1 style="text-align:center">Payment Methods</h1> 
    <p class="p_fonts resizeable_p" style="text-align:center">On this page, please choose how you wish to receive gifts/donations payments. It is important that the correct payment information for your bank or money transfer account such as PayPal or any other please entered below.</p>
</div>       
        <div style="margin-left:50px">
        <div class="scroll" style="position:relative;">
            <?php include "payment_method_add.php" ?>
        </div>
  </div>
  </div>
</div>

<?php include"../../copy_right.php"; ?>
<script>

$("#save_edit").click(function(){
var sp_type = $("#spt_update").val();
var sp_name = $("#spn_update").val();
var account_no = $("#acc_update").val();
var remark = $("#remark_update").val();
var member_id = <?php echo $member_id ?>;
console.log(member_id)
var id =  $("#row_id").val();
$.ajax({
    url:"../../../ajax/payment_method_update.php",
    method:"post",
    data:{id:id, sp_type:sp_type, sp_name:sp_name, account_no:account_no, remark:remark, member_id:member_id},
    success:function(data, success){
        $("#payment_methods_table").html(data);
        $("#saved").show().delay(1250).fadeOut(function(){
            
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
var remark = $("#remark_" + id).text();
$("#spt_update").val(spt);
$("#spn_update").val(spn);
$("#acc_update").val(acc);
$("#remark_update").val(remark);
$("#row_id").val(id);
$('#modal_edit').modal('show');
})
    
$(".btn-delete").click(function(){
var id = ($(this).attr("id_btn"));
var memberid = <?php echo $member_id ?>;    
$.ajax({
            url:"../../../ajax/payment_method_delete.php",
            method:"post",
            data:{id:id, member_id:memberid},
                    success:function(data, success){
                   $("#payment_methods_table").html(data);  
                      
                    }   
})    
});
    
$("#btn_add_payment_method").click(function(){
var add_sp_type = $("#add_sp_type").val();
var add_sp_name = $("#add_sp_name").val();
var add_account_no = $("#add_account_no").val();
var remark = $("#add_remark").val();
var member_id = <?php echo $member_id ?>;
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
            data:{add_sp_type:add_sp_type, add_sp_name:add_sp_name, add_account_no:add_account_no, member_id:member_id, remark:remark},
                    success:function(data, success){
                  $("#payment_methods_table").html(data);  
                   $("#add_sp_type").val("");
                   $("#add_sp_name").val("");
                   $("#add_account_no").val("");
                   $("#add_remark").val("");
                    }   
})
})    
</script>
<script>
/*
$('a').click(function() {
    //store the id of the collapsible element
    localStorage.setItem('send_gift_donation', $(this).attr('href'));
});
var collapseItem = localStorage.getItem('send_gift_donation'); 
if (collapseItem) {
   $(collapseItem).collapse('show')
}
*/
$("#main-nav").show();
// document.onreadystatechange = function() {
//     if (document.readyState <> "complete") {
//         document.querySelector("#main-nav").style.visibility = "visible";
//     }/* else {
//         document.querySelector("#main-nav").style.visibility = "visible";
//     }*/
// };    

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
//            $(".expand").css("width", "100%");
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

<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>