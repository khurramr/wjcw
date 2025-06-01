<?php include("../../session_login.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
  
  .visitor-page .main-footer,
    .visitor-page .content-wrapper {
        margin: 0px !important;
    }
#main-nav {
position: fixed;
/*width: 100%;*/
height: 100vh;
z-index: 9999;
}
    
.p_fonts {text-align:justify}

.scroll-menu {
  width: 100%;
  height: 700px;
  overflow: auto;
}
/* width */
.scroll-menu::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.scroll-menu::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.scroll-menu::-webkit-scrollbar-thumb {
/*  background: #5cb85c; */
  background: grey; 
  border-radius: 10px;
}

/* Handle on hover */
.scroll-menu::-webkit-scrollbar-thumb:hover {
/*  background: #0275d8; */
  background: #5bc0de; 
}

/*Not supported in firefox / edge browsers */
.scroll {
  width: 100%;
  height:500px;
  overflow: auto;
}
/* width */
.scroll::-webkit-scrollbar {
  width: 15px;
}

/* Track */
.scroll::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px green; 
  border-radius: 10px;
}
 
/* Handle */
.scroll::-webkit-scrollbar-thumb {
  background: #5cb85c; 
  border-radius: 10px;
}

/* Handle on hover */
.scroll::-webkit-scrollbar-thumb:hover {
/*  background: #0275d8; */
  background: #5bc0de; 
}
    
.p_fonts {text-align: justify}
.mo{background-color:green; color:white}
.mo:hover{background-color:seagreen; color:white}
.mo:not(hover){background-color:green; color:white}
</style>
</head>
<body class="hold-transition sidebar-mini <?php isset($_GET["is_visitor"]) ? 'visitor-page' : '' ?>">
<?php include"../../../google_translator.php"; ?>
 <div class="wrapper">
  <?php if (!isset($_GET["is_visitor"])) {?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include"../sidebar-menu-pages.php" ?>      
  </aside>
  
   
  <?php include"../../header_green.php" ?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper  mt-4">


<div class="card">
      <div class="card-header">
       <h3 style="color:green;" class="h_fonts resizeable_h">Purchase WJCW CF Tokens</h3>                              
      </div>
<div class="card-body">
  <p class="p_fonts resizeable_p" ><?= $fullname; ?>, this is where you can purchase registration tokens for yourself and for your team for registration. You can also purchase and assign tokens to your teammates so they can use them to assist their own teammates.

      Each purchase of a license fee is £12 per year. You can purchase as many tokens as you like. Once you choose how many to purchase, the amount will be calculated and you will be taken to a page where you can make your payment to complete the purchase.</p>
    <p class="p_fonts resizeable_p" >
    <span class="bg-danger">Note:</span> Once your purchase is complete, you can see your registration tokens by <a href="registered_tokens.php" class="btn btn-info btn-lg mo"> CLICKING HERE</a>.
    </p>
</div>

</div>
<?php }?>


<div class="container">           
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="card">
    <div class="card-header " id="headingOne" style="color:white; background-color:green">
            <div class="row">
               <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h class="h_fonts resizeable_h"><b>PURCHASE TOKENS</b></h>
                </div>                  
            </div>
    </div>
<div class="card-body" style="font-weight:bold">
            <div class="row">              
                <div class="col-md-1"></div>
                <div class="col-md-6">
                       <h class="h_fonts  resizeable_h">LICENSE FEE £12 PER YEAR </h>
                </div>
            </div>
            <div class="row mt-5">              
                <div class="col-md-1"></div>
                <div class="col-md-6">
                       <h class="h_fonts  resizeable_h">SELECT HOW MANY TOKENS </h>
                </div>
                <div class="col-md-4">
                    <input type="hidden" id="f_amount" value="0"> 
                    <input type="hidden" id="memberid" value="<?= isset($member_id) ? $member_id : 0?>"> 
                    <input type="hidden" id="f_token" value="0"> 
                    <?php if(isset($_GET["is_visitor"])){?>
                      <input type="hidden" id="module_name" value="purchase_token_outside"> 
                      <input type="hidden" id="is_visitor" name="is_visitor" value="true"> 
                      
                    <? }else{ ?>
                    <input type="hidden" id="module_name" value="purchase_token"> 
                    <? } ?>
                    <input type="hidden" id="hiddenName" name="name">
                    <input type="hidden" id="hiddenEmail" name="email">
                    <input type="number" class="notranslate form-control" placeholder="TYPE # OF TOKENS" id="box_no_of_tokens" min="0" max="999999999999999999" style="height:auto; font-size:150% ;font-weight:bold" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');">   
                            <div class="text-center">
                            <span class="p_fonts">OR</span>
                            </div>
                    <div style="position:relative;width:100%;height:40%;border:0;padding:0;margin:0;">
                          <select class="notranslate form-control" style="position:absolute;top:0px;left:0px;width:100%; height:150%;font-size:160%;font-weight:bold;margin:0;padding:0;" id="no_of_tokens">
                                     <option value="0"selected>CHOOSE TOKENS</option>
                                      <?php $i = 1; while($i < 5001){ ?>
                                      <option value="<?php echo $i; ?>"><?php echo $i++; ?></option>
                                      <?php } ?>
                          </select>
                          <input class="notranslate form-control" type="number" name="displayValue" min="0" max="999999999999999999" id="displayValue" 
                                 placeholder="add/select a value"
                                 style="position:absolute;top:0px;left:0px;width:90%;height:23px; height:150%;font-size:160%;font-weight">
                    </div>
        
                </div>
            </div>
            <br><br>
            <div class="row mt-5">              
                <div class="col-md-1"></div>
                <div class="col-md-6">
                        <h class="h_fonts resizeable_h">TOTAL NUMBER OF TOKENS </h>
                </div>
                
                <div class="col-md-2">   
                        <span class="notranslate badge h_fonts resizeable_h" id="total_tokens" style="background-color:green; color:white">#</span>
                </div>
                
            </div>            
            <div class="row mt-5">              
                <div class="col-md-1"></div>
                <div class="col-md-6">
                        <h class="h_fonts resizeable_h">TOTAL PURCHASE ORDER</h>

                                </div>
                
                <div class="col-md-2">   
                        <span class="notranslate badge h_fonts resizeable_h" id="total_license_fee" style="background-color:green; color:white">£</span>
                </div>
            </div>
            <div class="row mt-5">              
                <div class="col-md-1"></div>
                <div class="col-md-6">
                        <a href="" id="btn_proceed" class="btn btn-lg btn-success" style=" font-size:150%; font-weight:bold; background-color:green">P R O C E E D</a>                      
                </div>
            </div>
            <!-- Button to Open the Modal -->
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
          </button> -->

          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <!-- <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->

                <!-- Modal body -->
                <div class="modal-body">
                  <?php include("../../../my_account/payment/main-payment.php") ; ?>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>
                        
</div>              
</div>
</div>           
</div>
</div>           
</div>

</div>
<div class="modal fade" id="userDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Submit Your Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="myForm">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" form="myForm" class="btn btn-success" id="submitForm">Submit</button>
        </div>
      </div>
    </div>
  </div>
<?php include"../../copy_right.php"; ?>
<?php include("../../../my_account/payment/alert-message.php") ; ?>

<script>
$("#btn_proceed").click(function(event){
  event.preventDefault();
    var tokens = $("#total_tokens").text();
    if(tokens >= 1){
      $('#myModal').modal('show');
        var total_license_fee = $("#f_amount").val();
      $('#amount_show_gpay').text('£' + total_license_fee);

}
else{
        event.preventDefault();
    swal("Enter Valid Number!", "VALID NUMBER REQURIED!", "error");
}
})


function generateToken(){
  var tokens = $("#total_tokens").text();
  var memberId = '<?php echo isset($member_id) ? $member_id : 0?>';
  var isVisitor = '<?php echo isset($_GET["is_visitor"]) ? 'is_visitor=true' : ''?>';
  $.ajax({
              url:"../../../ajax/token_purchase_dummy.php?" + isVisitor,
              method:"POST",
              data:{
                memberid: memberId,
                no_of_tokens: tokens,
              },
              success:function(data, success){
                swal("Request initiated successfully, please wait until admin approval.", {
                              icon: "success",
                              showConfirmButton: false
                            })
                            .then(response => {
                                if (memberId == 0) {
                                  window.location.href = "../../../my_account/join-us.php";
                                } else {
                                  location.reload();
                                }

                            });
              }
          })
}
document.onreadystatechange = function() {
    if (document.readyState != "complete") {
        // document.querySelector("#main-nav").style.visibility = "visible";
    } 
};

$(document).ready(function(){
    <?php if(isset($_GET["is_visitor"])){?>
      $('#userDetail').modal('show');
      $('#btn_proceed').hide();
    <? }
    ?>
    var sidebar = "visible";
    $(".fa-bars").click(function(){
    if ( $(window).width() > 700) { 


        if (sidebar == "visible"){
            $(".resizeable_h").removeClass("h_fonts");
            $(".resizeable_p").removeClass("p_fonts");
            $(".resizeable_p").removeClass("p_small_fonts_animate");
            $(".resizeable_h").removeClass("h_small_font_animate");
            $(".resizeable_h").addClass("h_large_font_animate");
            $(".resizeable_p").addClass("p_large_font_animate");
            sidebar = "hidden";
        }else if (sidebar == "hidden"){
            $(".resizeable_h").removeClass("h_large_font_animate");
            $(".resizeable_p").removeClass("p_large_font_animate");
            $(".resizeable_h").addClass("h_small_font_animate");
            $(".resizeable_p").addClass("p_small_fonts_animate");
            sidebar = "visible";
        }
    }        
    })
    $("#no_of_tokens").change(function(){    
        var no_of_tokens = $("#no_of_tokens").val();
        var total_tokens = $("#total_tokens").text(no_of_tokens);
        var result = no_of_tokens * 12;
        var final_result = "£" + result;
        console.log('result'+ result); 
        $("#f_amount").val(result); 
        $("#f_token").val(no_of_tokens); 
        var total_license_fee = $("#total_license_fee").text(final_result);
        $("#displayValue").val(no_of_tokens); 
    })
    $('#displayValue').keypress(function(e) {
    return false
    });
    $("#displayValue").on('input', function() {    
        var no_of_tokens = $("#displayValue").val();
        var total_tokens = $("#total_tokens").text(no_of_tokens);
        var result = no_of_tokens * 12;
        var final_result = "£" + result;
        console.log('result'+ result); 
        $("#f_token").val(no_of_tokens); 
        $("#f_amount").val(result); 
        var total_license_fee = $("#total_license_fee").text(final_result);
    })

    $('#box_no_of_tokens').on('input', function() {    
        var no_of_tokens = $("#box_no_of_tokens").val();
        var total_tokens = $("#total_tokens").text(no_of_tokens);
        var result = no_of_tokens * 12;
        $("#f_amount").val(result); 
        $("#f_token").val(no_of_tokens); 
        var final_result = "£" + result;
        var total_license_fee = $("#total_license_fee").text(final_result);
    })

});
$(document).ready(function() {
      $('#submitForm').click(function(event) {
        event.preventDefault(); // Prevent form submission temporarily

        var name = $('#name').val();
        var email = $('#email').val();

        // Validate the form fields
        if (name == "" || email == "") {
          alert("Please fill in both fields.");
          return;
        }

        // Set the hidden fields with the form values
        $('#hiddenName').val(name);
        $('#hiddenEmail').val(email);
        $('.gpay_name').text(name);
        $('.gpay_email').text(email);
        $('#userDetail').modal('hide');
        alert('Now you can puchase tokens');
        $('#btn_proceed').show();
        // Submit the form after filling hidden fields
      });
  });

</script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>