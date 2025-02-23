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
                <li class="breadcrumb-item font-weight-bold mr-0 pr-0"><a class="black-text active-1" href="">RENEW MEMBERSHIP / GENERAL INFORMATION</a> </li>
              </ol>
            </nav>
          </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
   
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-md">
                <form class="form-horizontal" id='form_join_us'>
                    <fieldset>
                        <legend class="text-left header text-success"><h4>General information - Renew Membership</h4></legend>
                    
                        
                     <div class="row">   
                        <div class="col-md-4 mt-2">
                        <div class="form-group">
                            <label for="" class="required">Member Id:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon" ></i></span>
                                 </div>
                                 <input id="memberId" name="memberId" type="number" placeholder="Member Id" class="form-control">
                            </div>
                                <span id="memberId_span" class="text-danger span_alert">Enter Member Id</span>
                        </div>
                        </div>
                        <div class="col-md-4  mt-2"> 
                        <div class="form-group">
                            <label for="" class="required">Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon" ></i></span>
                                 </div>
                                <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                            </div>
                                <span id="name_span" class="text-danger span_alert">Enter Name</span>                                
                        </div>
                        </div>
                        </div>
                     <div class="row">   
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock bigicon" ></i></span>
                                 </div>
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                                <span id="email_span" class="text-danger span_alert">Enter Email Address</span>
                        </div>
                        </div>
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Token #:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock bigicon" ></i></span>
                                 </div>
                                <input id="tokenNo" name="password" type="text" placeholder="Token" class="form-control">
                            </div>
                                <span id="tokenNo_span" class="text-danger span_alert">Enter Valid Token No</span>
                        </div>
                        </div>
                        </div>
                              
                        
                
                          <br>
                          <div class="row">
                          <div class="col-md-3">
                                <button id="submit_renew" type="submit" class="btn btn-success btn-lg ml-2" style="background-color:green">Submit</button>
                            </div>
                          </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<div class="pt-5 mt-5">
<?php include'../header_footer/footer.php' ?>

</div>
</body>
<script>
    
  
    
    
$("#submit_renew").click(function(){
    event.preventDefault();
var member_id = $("#memberId").val();
var name = $("#name").val();
var tokenNo = $("#tokenNo").val();    
var email = $("#email").val();    
var response = "";
if (member_id == ""){
    $("#memberId_span").show()
}else{
    $("#memberId_span").hide()
}
if (name == ""){
    $("#name_span").show()
}else{
    $("#name_span").hide()
}
if (tokenNo == ""){
    $("#tokenNo_span").show()
}else{
    $("#tokenNo_span").hide()
}
if (email == ""){
    $("#email_span").show()
}else{
    $("#email_span").hide()
}
    
if(tokenNo == "" || memberId == "" || name == "" ){
    return false;
}     

$.ajax({
            url:"../ajax/member_renew.php",
            method:"POST",
            data: {
                member_id: member_id,
                token_no: tokenNo,
                email: email
            },
            success: function(data) {
                console.log(data)
                if (data.trim() == 'Success') {
                    swal("Member Renewed!", {
                          icon: "success",
                          showConfirmButton: false
                        });
                    setTimeout(() => {
                    window.location.href = "login.php";
                    }, 2000);
                } else {
                    swal(data, {
                          icon: "error",
                          showConfirmButton: false
                        });
                }
            }
})
});

</script>
</html>