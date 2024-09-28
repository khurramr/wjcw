<?php include("../../session_login.php") ?>
<?php
include("my_wjcw_mysqli.php");
?>
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
 
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<h1 class="h_fonts h_color resizeable_h" style="text-align:center">Verify WJCW Payments</h1>

    
<?php
include("my_wjcw_mysqli.php");
?>

<style>
.stage_active {
    background-color: green !important;
    color: white !important;
}
.stage_active::before, .stage_active::after {
    display: none;
}
.disabled {
    opacity: 0.5;
    pointer-events: none;
    cursor: not-allowed;
}

table { 
  width: 100%; 
  border-collapse: collapse; 
}

/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block;
        font-size: 3.6vw;
/*        font-weight: bold*/
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "Sender ID"; }
	td:nth-of-type(2):before { content: "Sender Name"; }
	td:nth-of-type(3):before { content: "Gift Donation Amount"; }
	td:nth-of-type(4):before { content: "Method of Payment"; }
	td:nth-of-type(5):before { content: "Date"; }
	td:nth-of-type(6):before { content: "Remarks"; }
	td:nth-of-type(6):before { content: "Status"; }
}    
</style>
<div class="cont_width" style="text-align:left">
    <div class="row">
        <div class="col-md-12">
            <div >
               
                <!-- Tab panes -->
                <div >
                    <div  id="stage01">
                          <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Date</th>    
                            <th>Comments</th>
                            <th>Action</th>    
                        </thead>
                        <tbody>
                            <?php
                                        while ($row = mysqli_fetch_assoc($wjcw_payments)){ ?>
                                        <tr>
                                        <td><?php  echo $row['sent_by']; ?></td>
                                        <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                        <td><?php  echo $row['amount']; ?></td>
                                        <td><?php  echo $row['date'] ?></td>
                                        <td><?php  echo $row['Comment'] ?></td>
                                          <td>
                                            <button class="btn btn-success verify-btn" data-id='<?php echo $row['id']?>'>
                                              Verify

                                            </button>

                                          </td>
                                      </tr>
                                        <?php } ?>    
                               
                        </tbody>    
                    </table>         
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
  </div>

</div>
<?php include"../../copy_right.php"; ?>
<script>
$(document).ready(function(){
    var sidebar = "visible";
    $(".verify-btn").click(function(e) {
      var clickedElement = $(this);
      var id = clickedElement[0].getAttribute("data-id");   

      $.ajax({
          url:"./verify_payment_action.php",
          method:"POST",
          data:{id},
          success:function(data, success){
            swal("Verified!", {
                          icon: "success"
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>