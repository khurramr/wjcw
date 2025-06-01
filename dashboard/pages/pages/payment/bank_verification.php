<?php include("../../session_login.php") ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">


<style>

.scroll-menu {
  width: 100%;
  height: 600px;
  overflow: auto;
}
::-webkit-scrollbar {
  width: 4px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #99ccff;
}    
    .expand{
    width: 100%;
    height: auto;
    -webkit-transition: width .2s;
    position:absolute;
    top:0; right:-5%; 
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
<div class="wrapper" id="main-wrapper">

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
        <div class="container-fluid mt-4">
            <div class="card">
            <div class="card-body">
            <h2 class="h_color">PAYMENT VERIFICATION OF <?php if(isset($_GET['tokens'])){ echo $_GET['tokens'];} ?> TOKENS AGAINST KEY <b style='color:purple'>
            <?php if(isset($_GET['bankkey'])){ echo $_GET['bankkey'];} ?></b></h2> 
            <h3 class="p-3 mb-2 bg-success text-white">YOUR PAYMENT REGARDING <?php if(isset($_GET['tokens'])){ echo $_GET['tokens'];} ?> TOKENS HAS RECIEVED</h3>
            <p class="card-text bg-success p_fonts">&nbsp;<b><?php if(isset($_GET['tokens'])){ echo $_GET['tokens'];} ?></b> TOKENS HAS BEEN GENERATED AND REGISTERED WITH YOUR MEMBER ID</p>

            </div>
            </div>
        </div>
        
                            <?php
                            include("../../../db/connect.php");
                            if(isset($_GET['bankkey'])){ 
                                $bank_key =  $_GET['bankkey'];
                            }
            
                            $sql = "SELECT id FROM token_purchase WHERE bank_key = '$bank_key'";
                            $result = mysqli_query($link, $sql);
                            $num_rows = mysqli_num_rows($result);
                            if($num_rows == 0){
                                $date = date('Y-d-m');
                                if(isset($_GET['tokens'])){ $token_nos = $_GET['tokens'];                            
                                    if($token_nos > 0){
                                        $i = 1; while($i <= $token_nos){
                                        $i++;
                                        $token = strtoupper(substr(md5(time(). $fullname . $i), 0, 14));
                                        $Insert = "INSERT INTO token_purchase(token, memberid, purchase_date, status, bank_key)
                                                VALUES('$token', '$member_id', '$date', '1', '$bank_key')";
                                                mysqli_query($link, $Insert);

                                    }
                                    }
                                }
                            }
                            ?>        
    
        
<div class='container-fluid'>
   <div class="card">
    <div class="card-header" id="headingOne">
       </div>
    <div class="card-body">                              
    <table id="generate_tokens_tbl" class="display" style="width:100%">
                        <thead>
                            <th>No.</th>    
                            <th>Token Generated Date</th>    
                            <th>Status</th>    
                            <th>MemberID</th>    
                            <th>Generated Token</th>    
                            <th>Fee Paid</th>    
    
                        </thead>
                        <tbody>
                        <?php
                            $i = 1;
                            if(isset($_GET['tokens'])){ $tokens = $_GET['tokens'];}                            
                            $sql = "SELECT * FROM token_purchase WHERE bank_key = '$bank_key'";
                            $result = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                            ?>        
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['purchase_date']; ?></td>
                                <td>Active</td>
                                <td><?php echo $row['memberid']; ?></td>
                                <td><?php echo "<span class='unselectable'>WJCW CF-</span>" . $row['token']; ?></td>
                                <td>£<?php echo $row['annual_fee']; ?></td>
                            </tr>    
                        <?php } ?>
                        </tbody>    
        </table>
    
</div>
       </div>           
        </div>
     
</div>

<script>

//$("#btn_generate_token").click(function(){
//alert("test")
//})
    
$(".btn-edit").click(function(){
var id = $(this).attr("id_btn");
var spt = $("#spt_" + id).text(); 
var spt = $("#spt_" + id).text(); 
var spn = $("#spn_" + id).text(); 
var acc = $("#acc_" + id).text(); 
$("#spt_update").val(spt);
$("#spn_update").val(spn);
$("#acc_update").val(acc);
$("#row_id").val(id);
 $('#modal_edit').modal('show');
})
    
$(".btn-delete").click(function(){
var id = ($(this).attr("id_btn"));
$.ajax({
            url:"../../../ajax/payment_method_delete.php",
            method:"post",
            data:{id:id},
                    success:function(data, success){
                   $("#payment_methods").html(data);  
                      
                    }   
})    
});
    
$("#btn_add_payment_method").click(function(){
var add_sp_type = $("#add_sp_type").val();
var add_sp_name = $("#add_sp_name").val();
var add_account_no = $("#add_account_no").val();
var memberid = "586";//$("#memberid").val();
    
if(add_sp_type == ""){
$("#span_add_sp_type").show();    
    return false;
}else{
    $("#span_add_sp_type").hide();    
}   
    
if(add_sp_name == ""){
$("#span_add_sp_name").show();    
    return false;
}else{
    $("#span_add_sp_name").hide();    
}   
    
if(add_account_no == ""){
$("#span_add_account_no").show();    
    return false;
}else{
    $("#span_add_account_no").hide();    
}
    
$.ajax({
            url:"../../../ajax/payment_method_add.php",
            method:"post",
            data:{add_sp_type:add_sp_type, add_sp_name:add_sp_name, add_account_no:add_account_no, memberid:memberid},
                    success:function(data, success){
                  $("#payment_methods").html(data);  
                   $("#add_sp_type").val("");
                   $("#add_sp_name").val("");
                   $("#add_account_no").val("");
                        
                    }   
})
})    
</script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script>
$(document).ready(function(){
    var sidebar = "hidden";
    $(".div_fa_bars").click(function(){
    if ( $(window).width() > 700) { 
            $(".resizeable_h").removeClass("h_fonts");
            $(".resizeable_p").removeClass("p_fonts");
            $(".resizeable_h").removeClass("h_small_font_animate");
            $(".resizeable_p").removeClass("p_small_fonts_animate");
        if (sidebar == "hidden"){
            $(".resizeable_h").addClass("h_large_font_animate");
            $(".resizeable_p").addClass("p_large_font_animate");
            $(".expand").css("width", "115%");
            sidebar = "visible";
        }else if (sidebar == "visible"){
            $(".resizeable_h").removeClass("h_large_font_animate");
            $(".resizeable_p").removeClass("p_large_font_animate");
            $(".expand").css("width", "100%");
            $(".resizeable_h").addClass("h_small_font_animate");
            $(".resizeable_p").addClass("p_small_fonts_animate");
            sidebar = "hidden";
        }
    }        
    })

$(document).ready(function() {
    $('#generate_tokens_tbl').DataTable();
} );

});
    
</script>
<?php 
    include"../../copy_right.php";
?>
</body>

</html>