<?php include("../session_login.php") ?>
<?php include("chat_mysqli.php") ?>
<?php 
    include("../../db/constants.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chat</title>
  <script src="../plugins/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../dist/css/gradient_buttons.css">
  <link rel = "icon" href="../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../dist/css/size_adjustment_G_D_S_R.css">
  <?php include"../../google_translator.php"; ?>
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
    
        
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
  
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../../assets/images/cropped-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WJCWF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/fafa.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $fullname; ?></a>
        </div>
      </div>

       <?php include"sidebar-menu.php" ?>
    </div>
  </aside>
<?php include"../header_green.php" ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CONTACT WITH OUR REPRESENTATIVE</h1>
          </div>

          </div>
      </div>
    </section>
<div class="container-fluid scroll">
    <!-- Main content -->
   <section class="content" id="contact-us-page">
      <div class="container-fluid">
        <?php include "../../my_account/contact-us-form.php" ?>
      </div>
    </section>
</div>

<!--
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
-->
  </div>
  <!-- /.content-wrapper -->


</div>
<?php include"../copy_right.php"; ?>  
<script>
const userData = <?= json_encode($me) ?>;
$("#fname").val(userData.first_name);
$("#lname").val(userData.last_name);
$("#member_id").val(userData.member_id);
$("#email").val(userData.email);
$("#phone").val(userData.contact_no_1);  
$("#member_id").attr("disabled", "disabled");

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
    $.ajax({
            url:"../../ajax/send_email_to_contact_us.php",
            method:"POST",
            data:{
              to: '<?php echo $contactUsEmail ?>',
              memberId: userData.member_id,
              firstName: firstname,
              lastName: lastname,
              email: email,
              contactNo: contactno, 
              message: message},
                    success:function(data, success){
                    if(data == 0){
                       swal("Your entered wrong member id !", {
                          icon: "error",
                        });
                    }else{
                        $("#message").val("");
                        
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
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
