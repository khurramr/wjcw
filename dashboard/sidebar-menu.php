<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style type="text/css">
.fa_custom_gift {
color: greenyellow; 
}

/*Not supported in firefox / edge browsers */
    .scroll-menu {
  width: 100%;
  height: 490px;
  overflow: auto;
  overflow-x: hidden;
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
    #member_pic{cursor:pointer}    
    @media only screen and (max-width: 922px) {
    .cam {
        display: none;
    }
}
 #btnCam, #btnAvatar {
  width:95%
}
    
#btnSave, #btnAvatar, #btnCam {
  background-color:green
}
    
    @media only screen and (max-width:765px){
    #btnSave, #btnAvatar {
      width:30%
    }
            
    }    

#btnSave, #btnAvatar, #btnCam {
  background-color:green
}

#btnDelete {
  background-color:red
}
 #btnClose {
  background-color:red
}
</style>
<?php 
if(isset($_FILES['newAvatar'])){
    $file_name = $_FILES['newAvatar']['name'];
    $file_tmp = $_FILES['newAvatar']['tmp_name'];
    $upload_location = "../assets/member_pics/";
    move_uploaded_file($file_tmp, $upload_location.$file_name);

$update = "UPDATE member_registration SET avatar = '$file_name' WHERE member_id = '$member_id'";
mysqli_query($link, $update);

$select = "select *  from member_registration where member_id = '$member_id' and avatar = ''";
$result = mysqli_query($link, $select);
$count = mysqli_num_rows($result);
    if($count > 0){
    $update = "UPDATE member_registration SET avatar = 'fafa.png' WHERE member_id = '$member_id'";
    mysqli_query($link, $update);
        
}
}
$select = "select *  from member_registration where member_id = '$member_id'";
$result = mysqli_query($link, $select);
$row = mysqli_fetch_assoc($result);
$avatar = $row['avatar'];    
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
    <img src="../assets/images/cropped-logo.png" alt="WJCW Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WJCW CF &reg;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <form action="" method="post" enctype="multipart/form-data">
                 <input id="newAvatar" name="newAvatar" type="file"hidden/>
                 <img src="../assets/member_pics/<?= $avatar; ?>" class="img-circle elevation-2" alt="User Image" id="member_pic">
                 <input type="submit" id="btnSubmit"/ hidden>
            </form>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $fullname; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
<!--
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
-->

      <div class="scroll-menu">   
         
          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <!--      <img src="../assets/images/cropped-logo.png" alt="WJCW CF Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width:20%">              -->
               <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
<!--
              <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Main Dashboard</p>
                </a>
              </li>
-->

           <li class="nav-item">
            <a href="#" class="nav-link head-link" style="color:white;">
            <img src="dist/img/gifts.jpg" alt="gifts" class="brand-image img-circle elevation-3" style=" width:20%;" >
              <p>
                Gifts / Donations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/gifts/send_gift_donation.php" class="nav-link">
                    <img src="dist/img/gift_ico.jpg" alt="gift" class="brand-image img-circle elevation-3" style=" width:11%; border-radius:50%" >    <p>Send Gift / Donation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/gifts/gift_donation_verification.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <!--<img src="../../dashboard/dist/img/gift_ico.jpg" alt="circle_7" class="brand-image img-circle elevation-3" style="width:11%; border-radius:50%" >                 -->
                  <p>Gift / Donation Verification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/gifts/gift_donation_sent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sent Gift / Donation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/currency_converter/currency_converter.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Currency Converter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/gifts/gift_donation_received.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gift / Donation Received</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="pages/payment/payment_methods.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Methods Of Payment</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Gift Money</p>
                </a>
              </li>
              
            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link head-link" style="color:white">
             <i class="nav-icon fas fa-th"></i>
                <p>
                Tokens WJCW CF
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                    <a href="pages/tokens/purchase_token.php" class="nav-link">
                  <i class="nav-icon fa fa-key fas fa-group"></i>
                  <p>
                    Purchase Token(s)
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
            <?php
                    include("../db/connect.php");
                    $sql = "Select * from member_registration where member_id = '$member_id'";
                    $result = mysqli_query($link, $sql);
                    
                    $row = mysqli_fetch_assoc($result);
                    $privilege = $row['privilege'];
                    if($privilege == 1){    
            ?>              
              
             <li class="nav-item">
                    <a href="pages/tokens/generate_token.php" class="nav-link">
                  <i class="nav-icon fa fa-key fas fa-group"></i>
                  <p>
                    Generate Token(s)
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
             <li class="nav-item">
                    <a href="pages/tables/total_members.php" class="nav-link">
                  <i class="nav-icon fa fa-key fas fa-group"></i>
                  <p>
                    Total Members
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
              
            <?php } ?>
             <li class="nav-item">
                    <a href="pages/tokens/valid_tokens.php" class="nav-link">
                  <i class="nav-icon fa fa-key"></i>
                  <p>
                    Valid Tokens
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
             <li class="nav-item">
                    <a href="pages/tokens/invalid_tokens.php" class="nav-link">
                  <i class="nav-icon fa fa-key"></i>
                  <p>
                    Invalid Tokens
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
             <li class="nav-item">
                    <a href="pages/tokens/purchase_token_history.php" class="nav-link">
                  <i class="nav-icon fa fa-key fas fa-group"></i>
                  <p>
                    Purchase Token(s) History
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/tables/my_wjcw_tbl.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My WJCW CF Table
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gifts/user_activity.php" class="nav-link">
              <i class="nav-icon fas fa-group"></i>
              <p>
                My Activity
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="genererate_link_send_email.php" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Generate Link
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
              
              <li class="nav-item">
                <a href="pages/team/team_members.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My WJCW CF Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/profile/profile.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Own Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../my_account/join-us.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register New Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/payment/pay_annaul_fee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pay WJCW</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marketing Tools</p>
                </a>
              </li>
<!--
               <li class="nav-item">
                <a href="pages/chat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chat Room</p>
                </a>
              </li>
-->
            </ul>
          </li>
          
    
        <li class="nav-header">OTHERS</li>
        <li class="nav-item">
            <a href="pages/calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="pages/chat.php" class="nav-link">
              <i class="nav-icon far fa-help-alt"></i>
              <p>
                help
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="session_logout.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  
  <div class="modal fade" id="mdl_upload_pic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Upload / Snap Your Picture</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!--          <h4><?//= $fullname ?></h4><hr>-->
          <div class="row">
             <div class="col-md-8">
                  <h5>Click to browse through your device </h5>
             </div>
             <div class="col-md-4">
              <button type="button" class="btn btn-success" id="btnAvatar">BROWSE</button>
             </div>
             </div>
             <br>
             <div class="row cam">
                 <div class="col-md-8 cam"  id="rowCAM">
                      <h5>Click to Snap the Image</h5>
                 </div>
                 <div class="col-md-4 cam">
                  <button type="button" class="btn btn-success" id="btnCam">CAM</button>
                 </div>
              </div>
              <br>
             <div class="row">
                 <div class="col-md-8">
                      <h5>Click to Save the Image</h5>
                 </div>
                 <div class="col-md-4">
                  <button type="button" class="btn btn-success"  id="btnSave">SAVE</button>
                 <button type="button" class="btn btn-danger" id="btnDelete"> DELETE</button>
                 </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnClose">CLOSE</button>
        
      </div>
                 
              </div>
      </div>
    </div>
  </div>
</div>
<a href="" data-toggle="modal" data-target="#mdl_upload_pic" id="a_upload_pic" hidden>Upload Avatar</a>

  
 <script>
         $("#member_pic").click(function(){
             $("#a_upload_pic").trigger("click");
         })
         $("#btnAvatar").click(function(){
             $("#newAvatar").trigger("click");
         })

         $("#btnSave").click(function(){
             if( document.getElementById("newAvatar").files.length != 0 ){
                $("#btnSubmit").trigger("click");
             }
         })
        
         $("#btnDelete").click(function(){
              if( document.getElementById("newAvatar").files.length === 0 ){
                  $("#btnSubmit").trigger("click");
              }
         })
</script>