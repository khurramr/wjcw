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
<?php include"../../../google_translator.php"; ?>
<div class="wrapper" id="main-wrapper">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include"../sidebar-menu-pages.php" ?>      
    </aside>

<?php include"../../header_green.php" ?>
        <div class="content-wrapper  mt-4">
        <div class="container-fluid mt-4">
            <div class="card">
            <div class="card-body">
            <h2 class="h_color">GENERATE TOKENS AGAINST YOUR MEMBERSHIP ID <b style='color:black'>
            </b></h2> 
            
            <div class="card-body" style="font-weight:bold">
            <form method="post">
                <div class="row">
                    <div class="col-md-3 mt-2">
                           <h4 class="h_color">ENTER NUMBER OF TOKENS </h4>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name='no_of_tokens' class="form-control" placeholder="ENTER # OF TOKENS" id="box_no_of_tokens" min="0" max="999999999999999999" style="height:auto; font-size:150% ;font-weight:bold">   
                    </div>
                </div>
             <button type="submit" name="submit" class="btn btn-success btn-lg" style='background-color:green;'>GENERATE TOKENS</button>

            </form>            
            </div>     
            </div>
            </div>
        </div>
        
            <?php         
                    include("../../../db/connect.php");
                        if(isset($_POST['submit'])){
                                $token_nos = $_POST['no_of_tokens'];
                                $date = date('Y-d-m');
                                $i = 1;
                                    while($i <= $token_nos){
                                        $i++;
                                        $token = strtoupper(substr(md5(time(). $fullname . $i), 0, 14));
                                        $Insert = "INSERT INTO token_purchase_free(token, memberid, purchase_date, status, bank_key)
                                                VALUES('$token', '$member_id', '$date', '1', 'free')";
                                                mysqli_query($link, $Insert);
                                                
                                    }
            ?>        
<div class='container-fluid'>
   <div class="card">
        <div class="card-header" id="headingOne">
                     <h3 style="text-transform:uppercase; color:green">You can view generated tokens in the Valid Tokens section later</h3>                
         </div>
         <div class="card-body">                              
            <table id="generate_tokens_tbl" class="display" style="width:100%">
                                <thead>
                                    <th>No.</th>    
                                    <th>Token Generated Date</th>    
                                    <th>Status</th>    
                                    <th>MemberID</th>    
                                    <th>Generated Token</th>    
                                    <th>Fee</th>    

                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM token_purchase_free WHERE bank_key = 'free' and memberid = '$member_id'";
                                $result = mysqli_query($link, $sql);
                                    $i = 1; 
                                    while($row = mysqli_fetch_assoc($result)){
                                        $token = $row['token'];
                                        if($row['status'] =='1'){
                                            $status = 'Active';
                                        }else{
                                            $status = 'Inactive';
                                    }
                                    ?>        
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['purchase_date'] ?></td>
                                        <td><?php echo $status; ?></td>
                                        <td><?php echo $row['memberid'] ?></td>
                                        <td><?php echo "<span class='unselectable'>WJCW CF-</span>" .$token; ?></td>
                                        <td><?php echo $row['bank_key']; ?></td>
                                    </tr>    
                                <?php }
                                $sql = "INSERT INTO token_purchase SELECT * FROM token_purchase_free WHERE bank_key = 'free' and memberid = '$member_id'";
                                $result = mysqli_query($link, $sql);
                            
                                $sql = "DELETE  FROM token_purchase_free WHERE bank_key = 'free' and memberid = '$member_id'";
                                $result = mysqli_query($link, $sql);
                                    
                                    ?>
                                </tbody>    
            </table>
         </div>
   </div>           
</div>
<?php } ?>    
     
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


if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}


});
</script>
<?php 
    include"../../copy_right.php";
?>
</body>

</html>