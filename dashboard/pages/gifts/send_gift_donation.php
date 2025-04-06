<?php include("../../session_login.php");
include("../../../db/connect.php");

                        $sql = "Select * from member_registration where member_id = $member_id";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $sponser_reference = $row['sponser_reference'];
                            echo $sponser_reference;
                            echo $sponser_reference != $member_id;
                        if ($sponser_reference && $sponser_reference != $member_id) {
                          $sql = "SELECT * FROM gift_donation_transactions WHERE sent_by = $member_id and received_by = $sponser_reference";
                          $result = mysqli_query($link, $sql);
                          $row = mysqli_fetch_assoc($result);
                          $verified = $row['verified'];    
                          $sql = "SELECT
                                  member_registration.member_id,
                                  member_registration.first_name,
                                  member_registration.last_name,
                                  payment_methods.service_provider_type,
                                  member_registration.gift_donation_amount,
                                  member_registration.dated
                                  FROM
                                  member_registration
                                  LEFT OUTER JOIN payment_methods ON member_registration.member_id = payment_methods.memberid
                                  WHERE
                                  member_registration.member_id = $sponser_reference";
  
                        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css">
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
<body class="sidebar-mini open">
<?php include"../../../google_translator.php"; ?>
<div class="wrapper" id="main-wrapper">
<aside class="main-sidebar sidebar-dark-primary elevation-4" id="main-nav">
      <!-- Sidebar Menu -->
       <?php include"../sidebar-menu-pages.php" ?>      
      <!-- /.sidebar-menu -->
  </aside>

<?php include"../../header_green.php" ?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper  mt-4">
<h1 class="h_fonts h_color resizeable_h" style="margin-left:25px">HOW TO SEND GIFT/DONATION MONEY</h1>

        <h1 class="h_fonts h_color resizeable_h" style="margin-left:25px"><?= $fullname; ?></h1>

<!--            <h3 class="h_fonts h_color" style="margin-left:25px">HOW TO SEND WJCW GIFT MONEY / DONATION.</h3>-->

            <p style="margin-left:25px; margin-top:20px" class="p_fonts resizeable_p">
            Sending gift money and donations is a compulsory action that needs to be performed immediately and not after a period of time, as explained below: 
            </p>
            <ol class="p_fonts resizeable_p">
                <li style="margin:20px">	Click on <button id="gift_id" class="btn btn-success btn-lg">Gift money ID</button> and you will see a box open below </li>
                <li style="margin:20px">	You will see the details of the person who will receive the gift money/donation via bank transfer, PayPal or digital money.</li>
                <li style="margin:20px">	Select one option of sending gift/donation (either via bank, PayPal or digital).</li>
                <li style="margin:20px">	Note and record the reference number ID once the Gift money/Donation has been sent for your personal records.</li>
                <li style="margin:20px">	If payment details for the person receiving the gift money/donation does not appear, please contact them and request those details.</li>
                <li style="margin:20px">	If you don’t see one of these methods of payment in the box below and it is empty, please contact the recipient by phone or email. Ask for information about where you can send gifts or donations.</li>
            </ol>
            <h4 style="margin-left:50px">Contact details are already provided in the system.</h4>
            <br>
<div class="scroll">
  <?php
    include("reference_wise_members.php");
    ?>
</div>
      
</div>
</div>
<?php include"../../copy_right.php"; ?>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script>
$("#gift_id").click(function(){
    $("#recipient_detail").slideDown(700)
})
    
$(".modal").on("hidden.bs.modal", function(){
    $(".modal_table").html("");
});


    
</script>
</body>
</html>