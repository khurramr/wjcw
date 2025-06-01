<?php 
    include("../../session_login.php"); 
    include("team_mysqli.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>   
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>   
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../dist/css/twelve_stages.css">

  
<style>
    
/*Not supported in firefox / edge browsers */
.scroll-menu {
  width: 100%;
  height: 750px;
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include"../sidebar-menu-pages.php" ?>      
  </aside>
<?php include"../../header_green.php" ?>  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper  mt-4">
<h1 class="h_fonts h_color resizeable_h" style="margin-left:25px"><?= $fullname; ?></h1>
<h1 class="h_fonts h_color resizeable_h" style="margin-left:25px">My Team Members</h1>

<!--<div class="container-fluid">-->

    <h4 class="h_fonts h_color resizeable_h" style="margin-left:25px">These are your direct personal members</h4>                                  
    
                <?php include "team_members_detail.php" ?> 

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
    
</script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js">
</script>
</body>
</html>