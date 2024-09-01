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
                <li class="breadcrumb-item font-weight-bold mr-0 pr-0"><a class="black-text active-1" href=""> FORGET PASSWORD</a> </li>
              </ol>
            </nav>
          </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
    <?php include 'forget_password_form.php' ?>
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
var memberid = $("#memberid").val();

var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;    

if (email == ""){
    $("#email_span").show()
    $("#email_err").hide()
    return false;
}else{
    $("#email_span").hide()
}
    
if (memberid == ""){
    $("#memberid_span").show()
    return false;
}else{
    $("#memberid_span").hide()
}
    


if(!emailReg.test(email)){
    $("#email_span").hide();
     $("#email_err").show();
    return false;
}else{
    $("#email_err").hide();
}
    
    
swal({
  title: "VERIFICATION",
  text: "Do you want to send the link to change password ?",
  icon: "info",
  buttons: true,
})
.then((willSave) => {
  if (willSave) {    
$.ajax({
            url:"../ajax/active_member_email_verify.php",
            method:"POST",
            data:{memberid:memberid, email:email},
                    success:function(data, success){
                    if(data == ""){
                    $("#email_link_fail").show();
                    $("#email_link_fail2").show();
                    $("#email_link_verify").hide();
                    }else {
                    $("#email_link_verify").show();
                    $("#email_link_fail").hide();
                    $("#email_link_fail2").hide();
                    } 
                    }    
})
}
});
    
    
});

</script>
</html>