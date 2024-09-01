<?php
    include("../../session_login.php"); 
    include("gift_donation_sent_mysqli.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css"><style>
<style>
#main-nav1 {
position: fixed;
/*width: 100%;*/
height: 100vh;

z-index: 9999;
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
  height: 300px;
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
<body class="hold-transition sidebar-mini">
<?php include"../../../google_translator.php"; ?>
<div class="wrapper" id="main-wrapper">
  <!-- Navbar -->
<?php //include "../../navbar.php" ?>    
  <!-- /.navbar -->


<aside class="main-sidebar sidebar-dark-primary" id="main-nav">
      <!-- Sidebar Menu -->
       <?php include"../sidebar-menu-pages.php" ?>      
    <!-- /.sidebar -->
  </aside>
<?php include"../../header_green.php" ?>  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper  mt-2">
    <h1 class="h_fonts h_color resizeable_h" style="margin-left:25px">GIFTS/DONATIONS SENT</h1>
    <h1 class="h_fonts h_color resizeable_h" style="margin-left:25px"><?= $fullname; ?></h1>
    <div class="container-fluid">
            <div class="card">
                  <div class="card-header">
                    <h4 class="h_fonts h_color resizeable_h" >Total Gifts/Donations sent: £<?php echo $Total; ?></h4>               
                  </div>
                  <div class="card-body">
                    <p class="p_fonts resizeable_p">
                        You can see gifts/donations sent here. All stages are from stage 01 to stage 12.

                        <?php echo $fullname ?>, on this page you can see your Gifts/Donations you sent. You will also find recipients who have accepted your Gifts/Donations money.

                        All the information about Gifts/Donations that you have sent.
                    </p>
                  </div>
            </div>
    </div>


    <div class="scroll">
          <?php include("sent_gifts_donations_members.php")?>
    </div>
    <br><br><br><br>
</div>

</div>
<?php include"../../copy_right.php"; ?>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>


