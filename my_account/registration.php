<?php 
session_start();
include '../db/connect.php';   
$registration_process = $_SESSION['registration_process'];
$select = "SELECT * FROM member_registration where registration_process = '$registration_process'";
$result = mysqli_query($link, $select);
$row = mysqli_fetch_assoc($result);
$gift_donation_amount = $row['gift_donation_amount'];
$sponser_member_id = $row['sponser_reference'];
$new_member_id = $row['member_id'];
$token = $row['token'];


$select = "SELECT * FROM token_purchase where token = '$token'";
$result = mysqli_query($link, $select);
$dated = mysqli_fetch_assoc($result);
$date1 = $dated['issued_date']; 
$date2 = $dated['expiry_date']; 


$select = "SELECT * FROM member_registration where member_id = $sponser_member_id";
$result = mysqli_query($link, $select);
$sponer = mysqli_fetch_assoc($result);
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
/*    margin-right: 15px;*/
    }    
        
  .required:after {
    content:"*";
    color: red;
  }
        .list-group-item:hover{
            background-color: lightgray;
/*            color: white*/
        }        
/* you can use the following css to make it red when it is not checked, and black when it is checked */
/*
        
.custom-control-label:before{
  background-color:red;
}
*/
.custom-checkbox .custom-control-input:checked~.custom-control-label::before{
  background-color:green;
}  
/*Change the tick sign color*/
/*        
.custom-checkbox .custom-control-input:checked~.custom-control-label::after{
  background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='seagreen' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
} 
*/

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
    
    
<div class="container" style="font-size:110%">
<h1>CONFIRMATION</h1>
<p style="font-size:110%; font-family:arial">Please confirm the information below</p>

<p></p>

<ul class="list-group">
  <li class="list-group-item" style="background-color:green; color:white">
     <div class="form-check-inline required">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="check_confirmation" class="custom-control-input" id="check_head">
                <label class="custom-control-label" for="check_head"></label>
                </div>
                
    </div>
    I confirm that the information entered below is correct and accurate.
  
 </li>
  <li class="list-group-item">
    <div class="form-check-inline required">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="check_confirmation" class="custom-control-input " id="check1">
                <label class="custom-control-label" for="check1"></label>
                </div>
    </div>
    I have been enrolled by <?= $sponer['first_name'].' '.$sponer['last_name'] ?>.
  </li>
  
  <li class="list-group-item">
    <div class="form-check-inline required">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="check_confirmation" class="custom-control-input" id="check2">
                <label class="custom-control-label" for="check2"></label>
                </div>
    </div>
    I wish to gift/donate £<?= $row['gift_donation_amount'] ?> (starting at level 1) up to level 12, as my own decision with no expectation of financial returns.
  </li>
  
  <li class="list-group-item">
    <div class="form-check-inline required">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="check_confirmation" class="custom-control-input" id="check3">
                <label class="custom-control-label" for="check3"></label>
                </div>
    </div>
    I agree that if I do not honour any gifts/donations for subsequent levels, I may risk having any or all privileges associated with WJCW CF and WJCW revoked.
  </li>
  
  <li class="list-group-item">
    <div class="form-check-inline required">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="check_confirmation" class="custom-control-input " id="check4">
                <label class="custom-control-label" for="check4"></label>
                </div>
    </div>
    I can confirm <b><?=  $row['email']; ?> </b>that the following email address is valid and belongs to me:
  </li>
  
  <li class="list-group-item">
    <div class="form-check-inline required">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="check_confirmation" class="custom-control-input " id="check5">
                <label class="custom-control-label" for="check5"></label>
                </div>
    </div>
    I understand that until I pay the annual license fee of £12 for WJCW CF, I will not have access to the member area.
  </li>
  
   <li class="list-group-item">
    <div class="form-check-inline required">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="check_confirmation" class="custom-control-input " id="check6">
                <label class="custom-control-label" for="check6"></label>
                </div>
    </div>
    I understand and acknowledge that I must follow the rules set by WJCW and faithfully follow the system which is beneficial for myself and for the community around the globe in order to qualify to become a shareholder of WJCW.
  </li>
</ul>
</div>
<div class="container-fluid">
    <?php include 'registration-form.php' ?>
</div>
<div class="pt-5 mt-5">
<?php include'../header_footer/footer.php' ?>

</div>
</body>
<script>
$("#btn_update_edit").click(function(){
    event.preventDefault();
    $('.form-control').prop("disabled", false);
})
    
$("#btn_confirm_proceed").click(function(){
event.preventDefault();
var registration_process = "<?php echo $registration_process ?>";    
var new_member_id = "<?php echo $new_member_id ?>";    
var token = "<?php echo $token ?>";    
var gift_donation_amount = "<?php echo $gift_donation_amount ?>";    
var sponer_email = "<?php echo $sponer['email'] ?>";
var sponser_id = "<?php echo $sponser_member_id; ?>";    
var password = $("#password").val();    
var firstname = $("#fname").val();
var lastname = $("#lname").val();
var email = $("#email").val();
var contactno = $("#contact_no_1").val();    
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
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
if (password == ""){
    $("#password_span").show()
}else{
    $("#password_span").hide()
}

if (contact_no_1 == ""){
    $("#contact_no_1_span").show()
}else{
    $("#contact_no_1_span").hide()
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
    
if ($(".form-check-inline input:checkbox[name=check_confirmation]:checked").length < 7)
    {
    swal({
      title: "WJCW CF!",
      text: "Select All Confirmation Check Boxes To Proceed!",
      icon: "error",
      button: "Okay",
    });
        return false;    
    }
    
    $.ajax({
            url:"../ajax/token_status_update.php",
            method:"POST",
            data:{token:token},
                    success:function(data, success){
                    }   
    })
    
    $.ajax({
            url:"../ajax/send_email_to_sponser.php",
            method:"POST",
            data:{sponer_email:sponer_email, email:email, firstname:firstname, lastname:lastname},
                    success:function(data, success){
                    $("#btn_cancel").prop("disabled", true);                        
                    $("#confirm_email").show(500);
                                                
                    }   
    })
    
    $.ajax({
            url:"../ajax/send_verify_email_new_member.php",
            method:"POST",
            data:{new_member_id:new_member_id, sponer_email:sponer_email, email:email, firstname:firstname, lastname:lastname},
                    success:function(data, success){
                    }   
    })
    
    $.ajax({
            url:"../ajax/send_welcome_email_new_member.php",
            method:"POST",
            data:{sponer_email:sponer_email, email:email, firstname:firstname, lastname:lastname, gift_donation_amount:gift_donation_amount},
                    success:function(data, success){
                    }   
    })
    
    $.ajax({
            url:"../ajax/initial_gift_donation.php",
            method:"POST",
            data:{sponser_id:sponser_id},
                    success:function(data, success){

                    }   
    })
    

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