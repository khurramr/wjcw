<?php include("../../session_login.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
  <?php include"../../../google_translator.php"; ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
.scroll-menu {
  width: 100%;
  height: 600px;
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

.display-6{color:green}
.btn-success{background-color:green} 
.nav-color{background-color}
.btn-size{font-size:  1.3vw}
@media only screen and (max-width: 750px) {
    .btn-size{font-size:  2vw}
}    
</style>    
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../index.php" class="brand-link">
    <img src="../../../assets/images/cropped-logo.png" alt="WJCW Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WJCW</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/fafa.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $fullname; ?></a>
        </div>
      </div>

       <?php include"../sidebar-menu-pages.php" ?>      
    </div>
  </aside>
<?php include"../../header_green.php" ?>
        <div class="content-wrapper  mt-4">
        <input type="hidden" id="memberid" value="<?= isset($_SESSION['member_id']) ? $_SESSION['member_id'] : 0?>"> 
        <input type="hidden" id="f_token" value="0"> 
        <input type="hidden" id="module_name" value="pay_wjcw"> 
            <?php include "pay_annual_fee_card_section.php" ?>
        </div>
</div>
<?php include("../../../my_account/payment/alert-message.php") ; ?>
<?php include"../../copy_right.php"; ?>
<script>

$(".stages").click(function(){
    $(".main_heading").text($(this).text());
    
});    
</script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>