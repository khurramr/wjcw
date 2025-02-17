<?php 

include("session_login.php"); 
include("../db/connect.php");

$select = "SELECT * FROM member_registration where member_id = '$member_id'";
$result = mysqli_query($link, $select);
$row = mysqli_fetch_assoc($result);
$email = $row['email'];

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
<style>
    .test{color:white}
    .test:hover{background-color: green; font-weight: bold;}
    .text-center {text-align: center}
    .h_color {color:  #44C553; font-weight: bold}
    #txt-link, #whatsapp-share, #txt-message, #email, #txt-subject  {display:; border-color: green; width:80%}
    #txt-message{ height:90px}
    #btn-to, #btn-subject, #btn-message, #send-message, #btn-link {display:; width:15%}

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
      
 <div class="container">
    <div class="row">

        
    <div class="col-md-12 mt-4" style="margin-left:0px;">
        <div class="card">
              <div class="card-header">
               <h2 style="color:green; text-transform:uppercase" class="text-center">Your sponser link has been generated you can share it via whatsapp or email.</h2>                              
              </div>
              <div class="card-body">
              <div class="form-inline mt-4">
              <button class="btn btn-primary btn-lg" id="btn-link"> LINK</button>
                  &nbsp;&nbsp;
                  <div class="input form-control" id="txt-link" disabled><a id="send_link" href='#'><h4>WJCW CF JOIN-US</h4></a></div>
              </div>
              <div class="form-inline mt-4">
              <button class="btn btn-success btn-lg" id="btn-link">WHATSAPP</button>
                  &nbsp;&nbsp;
                  <div class="input form-control" id="whatsapp-share"><a href="https://web.whatsapp.com/send?text=https://wjcwcf.com/index.php?member_id=<?= $member_id; ?>" data-action="share/whatsapp/share" target="_blank"><h4 class="h_color">SHARE VIA WHATSAPP WEB</h4></a></div>
              </div>
              <div class="form-inline mt-4">
              <button class="btn btn-danger btn-lg" id="btn-to">Email</button>               
               &nbsp;&nbsp;
                <input type="email" class="form-control" id="email" placeholder="emailaddress@email.com">
             </div>
              <div class="form-inline mt-4">
              <button class="btn btn-success btn-lg" id="btn-subject">Subject</button>               
               &nbsp;&nbsp;
                <input type="text" class="form-control" id="txt-subject" placeholder="email subject">
             </div>
              <div class="form-inline mt-4">
              <button class="btn btn-primary btn-lg" id="btn-message" style="background-color:purple">Message</button>               
               &nbsp;&nbsp;
                <textarea class="form-control" id="txt-message" placeholder="email message"></textarea>
             </div>
            <div class="row">
              <div class="col-md-11 text-right mt-4">
              <h4  style="display:none; color:green" id="confirm_email">Email has been send</h4>               
             </div>
              <div class="col-md-11 text-right mt-4">
              <button class="btn btn-success btn-lg" id="send-message" style="background-color:green; ">Send Email</button>               
             </div>
             </div>
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
    
    $("#send-message").click(function(){
        var link = $("#send_link").attr("href", )
        var email = $("#email").val();
        var from_email = "<?= $email ?>";
        var subject = $("#txt-subject").val();
        var message = $("#txt-message").val() + "  " + link;
        var fullname = "<?php echo $fullname; ?>";
        var member_id = "<?php echo $member_id; ?>";
        var sendBtn = $('#send-message');
        sendBtn.text("Loading...");
        sendBtn.attr("disabled", true);
        $.ajax({
            url:"../ajax/send_email_link_dashboard.php",
            method:"POST",
            data:{link:link, email:email, from_email:from_email, fullname:fullname, member_id:member_id, subject:subject, message:message},
                    success:function(data, success){
                    $("#confirm_email").show(500);
                    sendBtn.text("Send Email");
                    sendBtn.attr("disabled", false);
                   
                    $("#email").val("");
                    $("#txt-subject").val("");
                    $("#txt-message").val("");

                    }   
})

        
    })
    
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


});
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>