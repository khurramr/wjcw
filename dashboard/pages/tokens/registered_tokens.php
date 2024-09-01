<?php include("../../session_login.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>   
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>   
  

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
<!--  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css">-->
  <link rel="stylesheet" href="../../dist/css/size_adjustment_purchase_token.css">
<style>
    .p_fonts {text-align: justify}
    .mo{background-color:green; color:white}
    .mo:hover{background-color:seagreen; color:white}
    .mo:not(hover){background-color:green; color:white}
    th{font-size:165%}
    td{font-size:150%; text-transform: uppercase}
    a[disabled] {
    pointer-events: none;
    }
/*Not supported in firefox / edge browsers */
    .scroll {
  width: 100%;
  height: 1050px;
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

.unselectable {
    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select:none;
	user-select: none;
}    
    .display{font-size:75%}    
</style>  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include"../sidebar-menu-pages.php" ?>      
  </aside>
<?php include"../../header_green.php" ?>  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper  mt-4">

<div class="scroll">
    <?php include"registered_tokens_detail.php"; ?>
    </div>
</div>               
</div>
<?php include"../../copy_right.php"; ?>
<script>
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
        })
});
    
</script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>