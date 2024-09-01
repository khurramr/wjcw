<?php 
    include("../../session_login.php");
    $_SESSION['tokens'] = $_GET['tokens'];
    $fullname = "Visitor"
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css">

<style>
    .visitor-page .main-footer,
    .visitor-page .content-wrapper {
        margin: 0px !important;
    }

.scroll-menu {
  width: 100%;
  height: 600px;
  overflow: auto;
}
::-webkit-scrollbar {
  width: 4px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #99ccff;
}    
    .expand{
    width: 100%;
    height: auto;
    -webkit-transition: width .2s;
    position:absolute;
    top:0; right:-5%; 
}
    .stripe-button-el{
            width: 100%;
            height: auto;
            background-color: #f44336;

    }
    </style>    
</head>
<body class="hold-transition sidebar-mini <?php isset($_GET["is_visitor"]) ? 'visitor-page' : '' ?>">
<?php include"../../../google_translator.php"; ?>
<?php if (!isset($_GET["is_visitor"])) {?>
<div class="wrapper" id="main-wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include"../sidebar-menu-pages.php" ?>      
  </aside>
  <?php include"../../header_green.php" ?>
  <?php } ?>
        <div class="content-wrapper  mt-4">
            <?php 
                include "payment_method_form.php";
                $key = substr(md5(time(). $fullname . 5), 14);
            ?>
            
            <a class='btn btn-danger' href='bank_verification.php?tokens=<?php echo $_GET['tokens'] ?>&bankkey=<?php echo $key ?>' hidden>Bank Verificaiton Page</a> 
        </div>
</div>

<script>

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
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
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

// $("#btn").click(function(){

// var email_length = $("#member_email").val().length
// if(email_length > 12){
//     const stripe = Stripe("pk_live_51JYcHOEXbBTiuaUXxfebS0A9SM9pLytdrisfBI9xHpKNwJCiEJpAysNDswmnhKembz88u0jcmRCt26JOT7z5XK9Z000JUXxmIS")
//     fetch('checkout.php',{
//         method:"POST",
//         headers:{
//             'Content-Type' : 'application/json',
            
//         },
//         body: JSON.stringify({})
        
//     }).then(res=> res.json())
//     .then(payload =>{
//         stripe.redirectToCheckout({sessionId: payload.id})
//     })
// }else{
//     $("#email_alert").slideDown(1000);
// }
// })

$("#checkout-btn").click(function(){
var memberid = '<?= $member_id; ?>';
var email = $("#member_email").val();
var no_of_tokens = '<?= $_GET['tokens']; ?>';
    
    $.ajax({
            // url:"../../../ajax/token_purchased_online_add_delete.php",
            url:"../../../ajax/token_purchase_dummy.php",
            method:"POST",
            data:{memberid:memberid, email:email, no_of_tokens:no_of_tokens},
                    success:function(data, success){
                    }    
    })
})
});

    
    
</script>
<?php include"../../copy_right.php"; ?>
</body>

</html>