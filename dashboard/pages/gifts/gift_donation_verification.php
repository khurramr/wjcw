<?php 

    include("../../session_login.php"); 
    include("gift_donation_verification_mysqli.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css">
  <style>

    .text-center {text-align: center}
    .h_color {color:green}
    .btn-primary:hover{background-color: #5cb85c}
    .stages:hover {background-color: seagreen/*#5cb85c*/; color:white;}
    
    @media only screen and (max-width: 2400px) {
    .h_large_font_animate {font-size:2vw; text-transform: uppercase;
                       -webkit-transition: all .5s ease;
                       -moz-transition: all .5s ease;
                       transition: all .5s ease;
                     }
    .h_small_font_animate {font-size:1.5vw; text-transform: uppercase; 
         -webkit-transition: all .5s ease;
         -moz-transition: all .5s ease;
         transition: all .5s ease;
         }
    .p_small_fonts_animate {font-size:1.12vw;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            transition: all .5s ease;
            }
    .p_large_font_animate {font-size:1.5vw; 
                        -webkit-transition: all .5s ease;
                        -moz-transition: all .5s ease;
                        transition: all .5s ease;
                    }

    .h_fonts {font-size:1.75vw; text-transform: uppercase; }
    .p_fonts {font-size:1.12vw;}
}
@media only screen and (max-width: 991px) {.fa-bars{display: block}}
@media only screen and (max-width: 700px) {
    .h_fonts {font-size:6vw}
    .p_fonts {font-size:5vw}       
    .div_fa_bars{ margin-left: 0px}

}

.p_fonts {text-align:justify}

/*scroll-menu::-webkit-scrollbar Not supported in firefox / edge browsers */
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
  height: 500px;
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
     
</style>

</head>
<body class="sidebar-mini open">
<?php include"../../../google_translator.php"; ?>
<div class="wrapper" id="main-wrapper">
  <!-- Navbar -->
    <?php //include("../../navbar.php") ?>
  <!-- /.navbar -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4" id="main-nav">
      <!-- Sidebar Menu -->
       <?php include"../sidebar-menu-pages.php" ?>      
      <!-- /.sidebar-menu -->
  </aside>
<?php include"../../header_green.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-4">
       <h1 class="h_fonts h_color resizeable_h" style="margin-left:25px">Received Gifts /Donations Verification</h1>
    <p style="margin-left:25px" class="p_fonts mt-3 resizeable_p"><strong><?= $fullname; ?></strong>, you can see who sent you gifts/ donations.</p>
    <p style="margin-left:25px; margin-right:25px" class="p_fonts mt-3 resizeable_p">NOTE: Please verify the gifts/donations immediately as you receive them. Click on the membership number of the person who sent you the gift / donation below. If you want to see the gifts/donations which you have not yet verified, please click here.</p>
<div class="container scroll">
 <?php include"gifts_received_stages.php" ?>
</div>  

</div>

</div>
<?php include"../../copy_right.php"; ?>
<script src="../../dist/js/adminlte.min.js"></script>
<script>

/*
$('a').click(function() {
    //store the id of the collapsible element
localStorage.setItem('gift_donation_verification', $(this).attr('href'));
});
var collapseItem = localStorage.getItem('gift_donation_verification'); 
if (collapseItem) {
   $(collapseItem).collapse('show')
}
*/

    
$("#main-nav").show();
document.onreadystatechange = function() {
    if (document.readyState != "complete") {
        document.querySelector("#main-nav").style.visibility = "visible";
    }
};

$(document).ready(function(){
    var sidebar = "visible";
    $(".fa-bars").click(function(){
    if ( $(window).width() > 700) { 
            $(".resizeable_h").removeClass("h_fonts");
            $(".resizeable_p").removeClass("p_fonts");
            $(".resizeable_h").removeClass("h_small_font_animate");
            $(".resizeable_p").removeClass("p_small_fonts_animate");

        if (sidebar == "visible"){
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

$(".btn_verify").click(function(){
var id = $(this).attr("id");
var verify = $(this).attr("btn_verified");
if(verify == 0){
Swal.fire({
  title: 'ARE YOU SURE?',
  text: "You won't be able to revert this!",
  icon: 'info',
  showCancelButton: true,
  confirmButtonColor: 'green',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Continue'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url:"../../../ajax/verify_received_money.php",
        method:"POST",
        data:{id:id},
        success:function(data, success){
            if(data == 1){
            Swal.fire(
              'VERIFIED!',
              'Amount received has been verified',
              'success'
            )
         setTimeout(function(){
            location.reload(true);
         }, 2000);
                
        }
        }
    })

  }
})    
}    
})
})


</script>
</body>
</html>