<?php 
        include("../../session_login.php");
        include("../../../db/connect.php");
?>
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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css">
  <link rel="stylesheet" href="../../dist/css/size_adjustment_purchase_token.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
#main-nav {
position: fixed;
/*width: 100%;*/
height: 100vh;

z-index: 9999;
}
    
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
  height: 750px;
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
    
</style>  
</head>
<body class="hold-transition sidebar-mini">
<?php include"../../../google_translator.php"; ?>
<div class="wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include"../sidebar-menu-pages.php" ?>      
  </aside>
<?php include"../../header_green.php" ?>
    
    <div class="content-wrapper  mt-4">
           <div class="scroll">
                <?php include("invalid_tokens_detail.php") ?>
           </div>
    </div>
</div>           
<?php include"../../copy_right.php"; ?>        
    
<script>
$("#main-nav").show();    
document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        // document.querySelector("#main-nav").style.visibility = "visible";
    } /*else {
        document.querySelector("#main-nav").style.visibility = "visible";
    }*/
};    
    
$(document).ready(function(){
    
    var sidebar = "visible";
    $(".invalid-token-delete-btn").click(function() {
      var clickedElement = $(this);
      var deleteTokenId = clickedElement[0].getAttribute("data-id");   
      $.ajax({
          url:"../../../ajax/delete_token.php",
          method:"POST",
          data:{tokenId: deleteTokenId},
          success:function(data, success){
            swal("Token deleted successfully!", {
                          icon: "success",
                          showConfirmButton: false
                        });
            setTimeout(() => {
              location.reload();
            }, 2000);
          }
      })
    });
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
    

});
    
</script>
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>