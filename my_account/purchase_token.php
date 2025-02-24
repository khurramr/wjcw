<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../dashboard/plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../dashboard/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../dashboard/dist/css/gradient_buttons.css">
  <link rel="stylesheet" href="../dashboard/dist/css/size_adjustment_G_D_S_R.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
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
<body class="hold-transition sidebar-mini">
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
                        
</div>              
</div>
</div>           
</div>
</div>           
</div>

</div>
<?php include"../dashboard/copy_right.php"; ?>
<script>
$("#btn_proceed").click(function(){
    var tokens = $("#total_tokens").text();
    if(tokens >= 1){
// $('#btn_proceed').attr("href","../dashboard/pages/payment/pay_payment.php?tokens="+tokens);

    $.ajax({
              url:"../ajax/token_purchase_dummy.php",
              method:"POST",
              data:{
                memberid: $member_id,
                no_of_tokens: tokens,
              },
              success:function(data, success){
                swal("Request initiated successfully, please wait until admin approval.", {
                              icon: "success",
                              showConfirmButton: false
                            });
                setTimeout(() => {
                  location.reload();
                }, 2000);
              }
          })

}else{
        event.preventDefault();
    swal("Enter Valid Number!", "VALID NUMBER REQURIED!", "error");
}
})

document.onreadystatechange = function() {
    if (document.readyState != "complete") {
        document.querySelector("#main-nav").style.visibility = "visible";
    } 
};

$(document).ready(function(){
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
        var total_license_fee = $("#total_license_fee").text(final_result);
    })

    $('#box_no_of_tokens').on('input', function() {    
        var no_of_tokens = $("#box_no_of_tokens").val();
        var total_tokens = $("#total_tokens").text(no_of_tokens);
        var result = no_of_tokens * 12;
        var final_result = "£" + result;
        var total_license_fee = $("#total_license_fee").text(final_result);
    })

});

</script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>