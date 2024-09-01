<?php 
session_start();
include '../db/connect.php';   
$registration_process = $_SESSION['registration_process'];
$select = "SELECT * FROM member_registration where registration_process = '$registration_process'";
$result = mysqli_query($link, $select);
$row = mysqli_fetch_assoc($result);            
?>
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
    <?php// include '../db/connect.php' ?>   
    <?php include '../header_footer/headers.php'?>
    
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
    <?php include 'join-us-next-step-form.php' ?>
    </div>
</div>
<div class="pt-5 mt-5">
<?php include'../header_footer/footer.php' ?>

</div>
</body>
<script>

$("#btn_confirm_proceed").click(function(){
event.preventDefault();
var password = $("#password").val();    
var firstname = $("#fname").val();
var lastname = $("#lname").val();
var email = $("#email").val();
var contactno = $("#contact_no_1").val();    
var address_1 = $("#address_1").val();    
var country = $("#country").val();    
var city = $("#city").val();    
var zip_code = $("#zip_code").val();    
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;    
    
if (email == ""){
    $("#email_span").show()
}else{
    $("#email_span").hide()
}
if (password == ""){
    $("#password_span").show()
}else{
    $("#password_span").hide()
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
    
    
if (contact_no_1 == ""){
    $("#contact_no_1_span").show()
}else{
    $("#contact_no_1_span").hide()
}
    
if (address_1 == ""){
    $("#address_1_span").show()
    return false;
}else{
    $("#address_1_span").hide()
}
    
if (country == ""){
    $("#country_span").show()
    return false;
}else{
    $("#country_span").hide()
}
    
if (city == ""){
    $("#city_span").show()
    return false;
}else{
    $("#city_span").hide()
}
    

    
if(password == "" || firstname == "" || lastname == "" || email == "" || contactno == ""){
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
    

    
swal({
  title: "SAVE",
  text: "Do you want to save this information ?",
  icon: "info",
  buttons: true,
})
.then((willSave) => {
  if (willSave) {    
$.ajax({
            url:"../ajax/update_member.php",
            method:"POST",
            data:{firstname:firstname, lastname:lastname, email:email, contactno:contactno, password:password},
                    success:function(data, success){
                    $("#update_confirm").show(500);
                    window.location.href = "registration.php";                                    
                    }   
})
  }
});
    
    
});
$("#btn_cancel").click(function(){
    event.preventDefault();
    var registration_process = "<?php echo $registration_process ?>";    
    swal({
  title: "Are you sure?",
  text: "Once cancelled, you will not be able to recover the data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url:"../ajax/cancel_registration.php",
        method:"POST",
        data:{registration_process:registration_process},
        success:function(data, success){
          window.location.href = "join-us.php";            
        }
    })
}        
});
})
</script>
</html>