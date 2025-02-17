<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/CarouselAllCss.css">
    <link rel="stylesheet" href="../css/site.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
  .purchase-token-btn {
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>

    <title>Join US</title>
</head>
<body>
    <?php
    
            include"../google_translator.php";
    include '../header_footer/headers.php'; ?>
    
<section id="MainBanner">
            <img class="d-block w-100" src="../assets/images/joinus_1920x500.jpg" alt="pic">
</section>
<div class="container-fluid">
    <div class="container mt-5 pt-5">
        <div class="row ">
          <div class="col-auto col-md-10 ">
            <nav aria-label="breadcrumb" class="first d-md-flex">
              <ol class="breadcrumb indigo lighten-6 first-1 shadow-lg mb-5 ">
                <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="../index.php"><span>home</span></a><img class="ml-md-3" src="https://img.icons8.com/offices/30/000000/double-right.png" width="20" height="20"> </li>
                <li class="breadcrumb-item font-weight-bold mr-0 pr-0"><a class="black-text active-1" href="">JOIN US / GENERAL INFORMATION</a> </li>
              </ol>
            </nav>
          </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
    <?php include 'join-us-form.php' ?>
    </div>
</div>
<div class="pt-5 mt-5">
<?php include'../header_footer/footer.php' ?>

</div>
</body>
<script>
    
function getCheckBoxValues(){
    var values = ''; 
        $('[name="check_donation"]').each( function (){
            if($(this).prop('checked') == true){
                values = values + $(this).val()+",";
            }
        });
        return values;
    }
    
$("#member_id").blur(function(){
    var len = $("#member_id").val();
    var length = len.length;
    if(length > 4){
        $("#col-token").fadeIn(function(){
        $("#col-token input").focus();            
        });

    }else {
        $("#col-token").fadeOut();
    }
})
    
    
$("#submit").click(function(){
    event.preventDefault();
var member_id = $("#member_id").val();
var cpassword = $("#cpassword").val();
var password = $("#password").val();    
var member_id = $("#member_id").val();    
var token_no = $("#token_no").val();    
var firstname = $("#fname").val();
var lastname = $("#lname").val();
var email = $("#email").val();
var cemail = $("#cemail").val();
var contactno = $("#phone").val();    
var gift_donation = getCheckBoxValues();
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;    
var icensing_fee = $("#check_licensing_fee").val();
var response = "";
if (member_id == ""){
    $("#member_id_span").show()
}else{
    $("#member_id_span").hide()
}
if (token_no == ""){
    $("#token_no_span").show()
}else{
    $("#token_no_span").hide()
}
if (cemail == ""){
    $("#cemail_span").show()
}else{
    $("#cemail_span").hide()
}
if (password == ""){
    $("#password_span").show()
}else{
    $("#password_span").hide()
}

if (cpassword == ""){
    $("#cpassword_span").show()
}else{
    $("#cpassword_span").hide()
}

if (firstname == ""){
    $("#fname_span").show()
}else{
    $("#fname_span").hide()
}

if (lastname == ""){
    $("#lname_span").show()
}else{
    $("#lname_span").hide()
}
    
if (email == ""){
    $("#email_span").show()
}else{
    $("#email_span").hide()
}
    
if (contactno == ""){
    $("#phone_span").show()
}else{
    $("#phone_span").hide()
}
    

if(!emailReg.test(cemail)){
    $("#cemail_err").hide();
    $("#cemail_span").hide();
     $("#cemail").after('<span class="text-danger" id="cemail_err">Enter a valid email address.</span>');
    return false;
}else{
    $("#cemail_err").hide();
}
    
if(token_no == "" || member_id == "" || password == "" || cpassword == "" || firstname == "" || lastname == "" || email == "" || contactno == "" || cemail == ""){
    return false;
}     

if(!emailReg.test(email)){
    $("#email_err").hide();
    $("#email_span").hide();
     $("#email").after('<span class="text-danger" id="email_err">Enter a valid email address.</span>');
    return false;
}else{
    $("#email_err").hide();
}
    
if(cemail != email){
    $("#cemail_email_error").hide();
    $("#cemail").after('<span class="text-danger" id="cemail_email_error">Email does not match.</span>');
}else{
    $("#cemail_email_error").hide();
}    
    
if(cpassword != password){
    $("#cpassword_password_error").hide();
    $("#cpassword").after('<span class="text-danger" id="cpassword_password_error">Password does not match.</span>');
}else{
    $("#cpassword_password_error").hide();
}    
    
    
if(cemail != email || cpassword != password){
    return false;
} 
    
  if ($("#check_licensing_fee").prop('checked') ==  false)
      {
          $("#check_licensing_fee_span").show();
          return false;
      }else{
          $("#check_licensing_fee_span").hide();
      }

if ($("#form_join_us input:checkbox[name=check_donation]:checked").length > 0)
    {
    $("#check_donation").hide();
    }else{
    $("#check_donation").show();
    return false;    
    }
    

    
/*swal({
  title: "SAVE",
  text: "Do you want to save this information ?",
  icon: "info",
  buttons: true,
})*/
// .then((willSave) => {
//   if (willSave) {    
$.ajax({
            url:"../ajax/member-registration.php",
            method:"POST",
            data:{token_no:token_no, member_id:member_id, firstname:firstname, lastname:lastname, email:email, contactno:contactno, password:password, icensing_fee:icensing_fee, gift_donation:gift_donation},
                    success:function(data, success){
                    
                    if(data == 'Duplicate Email'){
                    $("#duplicate_email_span").show()
                    } else{
                    $("#duplicate_email_span").hide()    
                    } 
                    if(data == 'Invalid Token'){
                    $("#token_no_span2").show();
                    } else{
                    $("#token_no_span2").hide();                        
                    }
                    if(data == 0){
                    $("#member_id_span").show();
                    }else {
                    $("#member_id_span").hide();
                    }
                        if(data != 'Duplicate Email' && data != 'Invalid Token' && data != '0'){
                        $("#response").html(data);
                            window.location.href = "join-us-next-step.php";
                        }
                        
                    } 
                    
})
// }
// });
    
    
});

</script>
</html>