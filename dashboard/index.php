<?php 
    include("session_login.php");
    include("index_mysqli.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "assets/images/cropped-logo.png" type = "image/x-icon"> 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    .mdl_stages{pointer-events: none; display: inline-block;}
    .test{color:white}
    .test:hover{background-color: green; font-weight: bold;}
    .text-center {text-align: center}
    .h_color {color:  #44C553; font-weight: bold}
    .a_mdl_color{color:green}
    a:hover{color:darkgreen; font-weight:bold;}
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
    .p_small_fonts_animate {font-size:1.5vw;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            transition: all .5s ease;
            }
    .p_large_font_animate {font-size:1.6vw; 
                        -webkit-transition: all .5s ease;
                        -moz-transition: all .5s ease;
                        transition: all .5s ease;
                    }

    .h_fonts {font-size:1.75vw; text-transform: uppercase; }
    .p_fonts {font-size:1.5vw;}
    
    
    .div_fa_bars{ margin-left: -350px}
}
    @media only screen and (max-width: 767px) {
            .div_fa_bars{ margin-left: -250px}
    }    
@media only screen and (max-width: 991px) {.fa-bars{display: block}}
@media only screen and (max-width: 700px) {
    .h_fonts {font-size:6vw}
    .p_fonts {font-size:5vw}       
    .div_fa_bars{ margin-left: 0px}
}    

    
/*Not supported in firefox / edge browsers */
.scroll {
  width: 100%;
  height: 490px;
  overflow: auto;
}
/* width */
.scroll::-webkit-scrollbar {
  width: 15px;
}

/* Track */
.scroll::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
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

<div class="modal fade" id="nextStageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Next Stage Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" 
                    class="form-label">Name</label>
                    <input type="text" class="form-control" id="name"
                    value="<?php echo $next_stage_info["first_name"].' '.$next_stage_info["last_name"] ?>"
                    disabled >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID</label>
                    <input type="number" class="form-control"
                    value="<?php echo $next_stage_info["member_id"]?>"
                    id="id" disabled>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Current Stage</label>
                    <input type="number" class="form-control"
                    value="<?php echo $next_stage_info["gift_donation_level"] ?>"
                    id="current-stage" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Next Stage</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" 
                    value="<?php echo $next_stage_info["gift_donation_level"] + 1 ?>"
                    id="next-stage"  disabled>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                    <input type="number" disabled class="form-control" id="amount" 
                    value="<?php echo $next_stage_amount ?>"
                    >
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" 
        id="pay-next-stage"
        class="btn btn-primary">Pay</button>
      </div>
    </div>
  </div>
</div>

<?php include"../google_translator.php"; ?>
 <div class="wrapper" id="main-wrapper">
  <!-- Navbar -->
     <?php //include"navbar.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
      <!-- Sidebar Menu -->
       <?php include"sidebar-menu.php" ?>      

<?php include"header_green.php" ?>
 
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

         <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
<!--
              <li class="breadcrumb-item"><a href="#">Sponsor Name: XYZ</a></li>
                <li class="breadcrumb-item"><a href="#">Sponsor ID:2546</a></li>
-->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      
 <div class="container scroll">
    <?php 
        if ($show_next_stage_btn) {
    ?>
 <button type="button" id="next-stage-btn" class="btn btn-primary" data-toggle="modal" data-target="#nextStageModal">
            Next Stage Payment
            </button>       
            <?php } ?>
             
          <ul>
          <li>
          <div class="row">
          <div class="col-md-9">
            
          <p class="p_fonts resizeable_p">You are at the moment 
        <?php 
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 1";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
 
                if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal20" class="a_mdl_color"> Stage 01 £20</a>, ';
                }
                else{
                    echo '<a href="" data-toggle="modal" data-target="#modal20" class="mdl_stages5"> Stage 01 £20</a>, ';    
                    }
     
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 2";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
                if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal40" class="a_mdl_color">Stage 02 £40</a>, ';
                }

     
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 3";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
                if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal100" class="a_mdl_color">Stage 03 £100</a>, ';
                }
              
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 4";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal250" class="a_mdl_color">Stage 04 £250</a>, ';
                }
              
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 5";                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal500" class="a_mdl_color">Stage 05 £500</a>, ';
                }
              
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 6";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal1000" class="a_mdl_color"> Stage 06 £1000</a>, ';
                }
     
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 7";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal2000" class="a_mdl_color"> Stage 07 £2000</a>, ';
                }
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 8";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal4000" class="a_mdl_color"> Stage 08 £4000</a>, ';
                }

                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 9";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal8000" class="a_mdl_color"> Stage 09 £8000</a>, ';
                }
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 10";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal16000" class="a_mdl_color">Stage 10 £16000</a>, ';
                }

                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 11";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal32000" class="a_mdl_color"> Stage 11 £32000</a>, ';
                }
     
                $sql = "Select sponser_reference, gift_donation_level from member_registration where member_id = $member_id and gift_donation_level = 12";                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count > 0) {
                    echo ' and <a href="" data-toggle="modal" data-target="#modal64000" class="a_mdl_color">Stage 12 £64000</a>';
                }

              ?>    
          </p>   
             </div>
              <div class="col-md-3">
                  <?php
                  $sql = "SELECT
                        TIMESTAMPDIFF( YEAR, expiry_date, now() ) as _years
                        ,TIMESTAMPDIFF( MONTH, now(), expiry_date) % 12 as _month
                        ,FLOOR( TIMESTAMPDIFF( DAY, now(), expiry_date) % 30.4375 ) as _day from token_purchase where memberid = '$member_id' and issued_date is not null ORDER BY issued_date DESC  LIMIT 1";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<strong class='h_color'>" . $row['_month'].  " Months " . $row['_day'] . " Days Left to Expire</strong>";
                        }
                  ?>
              </div>
          </div>
          </li>
          <li>
<!--          style="pointer-events: none; display: inline-block;" -->
          <p class="p_fonts resizeable_p">You are entitle to step by step upto :
        <?php 
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 2";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal40" class="mdl_stages">Stage 02 £40</a>, ';    
                }
        
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 3";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal100" class="mdl_stages">Stage 03 £100</a>, ';    
                }
              
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 4";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal250" class="mdl_stages">Stage 04 £250</a>, ';    
                    }
              
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 5";                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal500" class="mdl_stages">Stage 05 £500</a>, ';    
                    }
              
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 6";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal1000" class="mdl_stages"> Stage 06 £1000</a>, ';    
                    }
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 7";                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal2000" class="mdl_stages"> Stage 07 £2000</a>, ';    
                    }
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 8";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal4000" class="mdl_stages"> Stage 08 £4000</a>, ';    
                    }
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 9";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal8000" class="mdl_stages"> Stage 09 £8000</a>, ';    
                    }
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 10";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal16000" class="mdl_stages"> Stage 10 £16000</a>, ';    
                    }
                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 11";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo '<a href="" data-toggle="modal" data-target="#modal32000" class="mdl_stages"> Stage 11 £32000</a>, ';
                    }

                $sql = "Select sponser_reference, gift_donation_level from member_registration where sponser_reference = $member_id and gift_donation_level = 12";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
               if($count == 0) {
                    echo ' and <a href="" data-toggle="modal" data-target="#modal64000" class="mdl_stages">Stage 12 £64000</a>';
                    }

              ?>    
          </p>
         <?php// include("pages/modal/modal_donation.php") ?>
         </li>
         <li>
          <p class="p_fonts resizeable_p">This is your first step in this journey...Simply follow the system and the system will follow you. Everything on this journey is for the welfare of the community around the globe where everyone benefits, InshaAllah.</p>
          </li>
          </ul>
                        
                            
                                    
                <?php

                $sql = "SELECT gift_donation_level FROM `member_registration` WHERE member_id = $member_id;";
                $result = mysqli_query($link, $sql);
                $count = 5;// = mysqli_num_rows($result);
                if($count >= 6) {
                $msg = "You are eligible to move to level 2";
//                level1.enable = false;
//                level2.enable = false;
//                level3.enable = true;
                }
  
            ?>
          
    <div class="row">

        
    <div class="col-sm mt-4" style="margin-left:0px;">
        <div class="card">
              <div class="card-header">
               <h3 style="color:green;" class="h_fonts">GIFT/DONATIONS</h3>                              
              </div>
              <div class="card-body">
              <h3 class="h_fonts">£<?= $total_received; ?> Amount/Received</h3>
              </div>
        </div>
    </div>
    <div class="col-sm mt-4" style="margin-left:0px;">           
        <div class="card">
              <div class="card-header">
               <h3  class="h_fonts" style="color:green;">GIFT/DONATIONS</h3>                              
              </div>
              <div class="card-body">
              <h3 class="h_fonts">£<?= $total_sent; ?> Amount/Sent</h3>
              </div>
        </div>
    </div>
    <div class="col-sm mt-4" style="margin-left:0px;">  
            <div class="card">
              <div class="card-header">
               <h3 style="color:green;" class="h_fonts"> TOTAL TEAMATES</h3>                              
              </div>
              <div class="card-body">
              <h3 class="h_fonts">Total <?= $total_members; ?> / Active <?= $active_members; ?></h3>
              </div>
            </div>
      </div>
      
      </div>
    </div>  
  </div>

</div>
<?php include"copy_right.php"; ?>  
<script>
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

    $("#pay-next-stage").click(function() {
        $.ajax({
          url:"./pay_next_stage.php",
          method:"GET",
          success:function(data, success){
            swal("Request initaited successfully, kindly wait until admin approval.", {
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


});
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>