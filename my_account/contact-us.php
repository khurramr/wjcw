<?php 
    include("../db/constants.php"); ?>

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
    
    input[type=text], input[type=password], #message {
      border: 1px solid purple;
    }    
    
    .checkbox-inline {
    margin-right: 15px;
    }    
    #submit {
      position: absolute;
      left: 100px;
    }        
      .required:after {
        content:"*";
        color: red;
      }
    
        #flags {
          position: absolute;
          top: 100px;
          border: 2px solid green;
        }
        
    </style>
    <title>Contact Us</title>
</head>
<body>
    
    
    <?php
        include"../google_translator.php";
    include '../header_footer/headers.php'?>
<section id="MainBanner">
            <img class="d-block w-100" src="../assets/images/contact-us/contact-us_1920x500.jpg" alt="pic">
</section>

    
    
    <div class="container">
    <div class="container mt-5 pt-5">
        <div class="row ">
          <div class="col-auto col-md-10 ">
            <nav aria-label="breadcrumb" class="first d-md-flex">
              <ol class="breadcrumb indigo lighten-6 first-1 shadow-lg mb-5 ">
                <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="../index.php"><span>home</span></a><img class="ml-md-3" src="https://img.icons8.com/offices/30/000000/double-right.png" width="20" height="20"> </li>
                <li class="breadcrumb-item font-weight-bold mr-0 pr-0"><a class="black-text active-1" href=""><span>CONTACT US</span></a> </li>
              </ol>
            </nav>
          </div>
        </div>
    </div>
    </div>
    
    
    
<div class="container-fluid">
<!--    <div class="row">-->
<!--    <div class="col-md-6">-->
    <?php include 'contact-us-form.php' ?>
<!--    </div>-->
    </div>
<!--</div>-->
<div class="pt-s5 mt-5">
<?php include'../header_footer/footer.php' ?>

</div>
</body>
<script>
    
$('#member_id').on('input', function() {
var member_id = $("#member_id").val();
var count_length =  member_id.length;
if(count_length >= 5){

$("#wait").show();
$.ajax({
    url:"../ajax/contactus-member_verify.php",
    method:"post",
    data:{member_id:member_id},
    success:function(data,success){
        $("#contact_us_form").html(data);
        $("#message").focus();
        $("#wait").hide();        
    }           
})

}else{
return false;
}    
    
})    
    
$("#submit").click(function(){
event.preventDefault();
var firstname = $("#fname").val();
var lastname = $("#lname").val();
var member_id = $("#member_id").val();
var email = $("#email").val();
var contactno = $("#phone").val();    
var message = $("#message").val();    
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;    
if(!emailReg.test(email)){
    $("#email_err").hide();
    $("#email_span").hide();
     $("#email").after('<span class="text-danger" id="email_err">Enter a valid email address.</span>');
    return false;
}else{
    $("#email_err").hide();
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
if (member_id == ""){
    $("#member_id_span").show()
}else{
    $("#member_id_span").hide()
}
    
if (contactno == ""){
    $("#phone_span").show()
}else{
    $("#phone_span").hide()
}

if ($("#message").val().trim() == ""){
    $("#message_span").show()
}else{
    $("#message_span").hide()
}
    
if($("#message").val().trim() == ""){
    return false;
}
    
if(member_id == "" || firstname == "" || lastname == "" || email == "" || contactno == "" || $("#message").val().trim() == ""){
    return false;
}   
    
swal({
  title: "SEND",
  text: "Do you want to send the message ?",
  icon: "info",
  buttons: true,
})
.then((willSave) => {
  if (willSave) {    
    $("#submit").html("Loading, please wait...");
    $("#submit").attr("disabled", "disabled");
    console.log('send_email_to_contact_us')
    $.ajax({
            url:"../ajax/send_email_to_contact_us.php",
            method:"POST",
            data:{
                to: '<?php echo $contactUsEmailOutside ?>',
                memberId: member_id,
                firstName: firstname,
                lastName: lastname,
                email: email,
                contactNo: contactno, 
                message: message
            },
                    success:function(data, success){
                    if(data == 0){
                       swal("Your entered wrong member id !", {
                          icon: "error",
                        });
                    }else{
                        $("#message").val("");
                        $("#phone").val("");
                        $("#email").val("");
                        $("#lname").val("");
                        $("#fname").val("");
                        $("#member_id").val("");
                        
                       swal("Your message has been sent!", {
                          icon: "success",
                        });
                        $("#submit").html("Submit");
                        $("#submit").attr("disabled", false);

                        
                    }
                    }
                        
})
      
  }      
      
});
});
</script>
</html>