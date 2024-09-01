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

    <title>Join US</title>
</head>
<body>
    <?php
    session_start();
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
                <li class="breadcrumb-item font-weight-bold mr-0 pr-0"><a class="black-text active-1" href=""> CHANGE PASSWORD</a> </li>
              </ol>
            </nav>
          </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
    <?php include 'change_password_form.php' ?>
    </div>
</div>
<div class="pt-5 mt-5">
<?php include'../header_footer/footer.php' ?>

</div>
</body>
<script>
$("#submit").click(function(){
    event.preventDefault();
var email = $("#email").val();
$.ajax({
            url:"../ajax/new_registration_duplicate_email_check.php",
            method:"post",
            data:{email:email},
                    success:function(data, success){
                        if (data > 0){
                            $("#duplicate_email_span").show()
                            return false;
                        }else{
                            $("#duplicate_email_span").hide()
                        }
                    }   
})
})    
    
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
var email = $("#email").val();

var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;    
if (member_id == ""){
    $("#member_id_span").show()
}else{
    $("#member_id_span").hide()
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

if (email == ""){
    $("#email_span").show()
}else{
    $("#email_span").hide()
}
    

if(member_id == "" || password == "" || cpassword == "" || email == ""){
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
    
if(cpassword != password){
    $("#cpassword_password_error").hide();
    $("#cpassword").after('<span class="text-danger" id="cpassword_password_error">Password does not match.</span>');
}else{
    $("#cpassword_password_error").hide();
}    
    
swal({
  title: "SAVE",
  text: "Do you want to save this information ?",
  icon: "info",
  buttons: true,
})
.then((willSave) => {
  if (willSave) {    
$.ajax({
            url:"../ajax/password_reset.php",
            method:"POST",
            data:{member_id:member_id, email:email, password:password},
                    success:function(data, success){
                    if(data == 0){
                    $("#member_id_span").show();
                    return false;    
                    }else {
                    $("#response").html(data);
                    $("#member_id_span").hide();    
                    window.location.href = "join-us-next-step.php";                        
                    } 
                    }    
})
}
});
    
    
});

</script>
</html>