<?php include("../../session_login.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>   
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../dist/css/size_adjustment_wjcw_table.css">
 <link rel="stylesheet" href="../../dist/css/twelve_stages.css">
<style>
/*Not supported in firefox / edge browsers */
.scroll-menu {
  width: 100%;
  height: 850px;
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
</style>
</head>
<body class="hold-transition sidebar-mini">
<?php include"../../../google_translator.php"; ?>
<div class="wrapper">
  <!-- Navbar -->
<?php //include "../../navbar.php" ?>    
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include"../sidebar-menu-pages.php" ?>      
  </aside>
<?php include"../../header_green.php" ?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper  mt-4">
  <div class="container-fluid">
<!--<h1 class="h_fonts h_color resizeable_h" style="text-align:center">MY WJCW CF TABLE</h1>-->
      <div class="container-fluid">
<h2 class="p_fonts h_color resizeable_p" style="text-align:justify">

<?= $fullname; ?>, on this page you can see the detail of total people who have joined the WJCWCF. You can also suspend the suspicious people here.
</h2>
</div>

    
<?php  include("total_members_detail.php") ?>
  </div>
  </div>

</div>
<?php include"../../copy_right.php"; ?>
<script>
$(document).ready(function(){
    var sidebar = "visible";
    $(".fa-bars").click(function(){
    if ( $(window).width() > 700) { 
            $(".resizeable_h").removeClass("h_fonts");
            $(".resizeable_h").removeClass("h_small_font_animate");

        if (sidebar == "visible"){
            $(".resizeable_h").addClass("h_large_font_animate");
            $(".resizeable_p").addClass("p_large_font_animate");
            sidebar = "hidden";
        }else if (sidebar == "hidden"){
            $(".resizeable_h").removeClass("h_large_font_animate");
            $(".resizeable_p").removeClass("p_large_font_animate");
            $(".resizeable_h").addClass("h_small_font_animate");
            sidebar = "visible";
        }
    }        
    })
});
$(".btn-suspend").click(function(){
    var id = $(this).attr("id");
    var status = $(this).attr("status");
        $.ajax({
            url:"../../../ajax/suspend_active.php",
            method:"post",
            data:{id:id, status:status},
            success:function(data,success){
                if(data == 1){
                    location.reload();    
                }
            }                
        })
})    
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>