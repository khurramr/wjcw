<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/CarouselAllCss.css">
    <link rel="stylesheet" href="../css/site.css">
    <link rel="stylesheet" href="../css/login.css">
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

        .checkbox-inline {
        margin-right: 15px;
            }    
        #submit {
          position: absolute;
          left: 100px;
        }        
           body {
/*          background-color: #E6E6FA;*/
        } 

        li{
          margin: 10px 0;
        }
    </style>
    <title>Login</title>
</head>
<body>

    <?php
        include"../google_translator.php";
    include '../header_footer/headers.php'?>
      <section id="MainBanner">
            
                    <img class="d-block w-100" src="../assets/images/login/login_1920x500.jpg" alt="login">

        </section>
    
    
<div class="container-fluid">
    <div class="row">
<!--    <div class="col-md-6">-->
    <?php include 'login-form.php' ?>
<!--    </div>-->
    </div>
</div>
<div class="pt-5 mt-3">
<?php 

    include'../header_footer/footer.php' ?>
      
</div>
</body>
<script>
    
$("#login").click(function(){
event.preventDefault();
var password = $("#password").val();    
var email = $("#email").val();
    $.ajax({
        url:"../ajax/registration_confirm.php",
        method:"POST",
        data:{email:email, password:password},
        success:function(data, success){
        if(data == "login successful"){
                window.location.href = ("../dashboard/index.php");
        }else{
        swal({
          title: "WJCW CF!",
          text: data,
          icon: "error",
          button: "Okay",
        });

        }
        }
    })

});

</script>
</html>