<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
<style type="text/css">
.fa_custom_gift {
color: greenyellow;
}

.scroll-menu {
  overflow-x: hidden;
}

    #member_pic{cursor:pointer}    
    @media only screen and (max-width: 922px) {
        .cam {
            display: none;
        }
    }
</style>
   
<?php
include("../../../db/connect.php");
$select = "select *  from member_registration where member_id = '$member_id'";
$result = mysqli_query($link, $select);
$row = mysqli_fetch_assoc($result);
$avatar = $row['avatar'];    

?>
   
   
   
    <!-- Brand Logo -->
    <a href="../../../index.php" class="brand-link">
<img src="../../../assets/images/cropped-logo.png" alt="WJCW Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WJCW CF &reg;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
                   <form action="" method="post" enctype="multipart/form-data">
                 <input id="newAvatar" name="newAvatar" type="file"hidden/>
                 <img src="../../../assets/member_pics/<?= $avatar ?>" class="img-circle elevation-2" alt="User Image" id="member_pic">
                 <input type="submit" id="btnSubmit"/ hidden>
            </form>

             
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $fullname; ?></a>
        </div>
      </div>

  
   <div class="pre-fold scroll-menu">
    <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="" class="nav-link active" style="color:white">
              <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.php" class="nav-link active">
                  <i class="fas fa-arrow-left"></i>
                  <p>Back to Main Page</p>
                </a>
              </li>
           <li class="nav-item">
            <a href="" class="nav-link head-link" style="color:white">
            <img src="../../dist/img/gifts.jpg" alt="gifts" class="brand-image img-circle elevation-3" style=" width:20%;" >
              <p>
                Gifts / Donations
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
<!--                <a href="send_gift_donation.php" class="nav-link">-->
                <a href="../gifts/send_gift_donation.php" class="nav-link" id="send_gift_donation">
        <!--<i class="far fa-circle nav-icon"></i>            -->
<!--<i class="nav-icon fa fa-gift fa_custom_gift"></i>-->
<img src="../../dist/img/gift_ico.jpg" alt="gift" class="brand-image img-circle elevation-3" style=" width:11%; border-radius:50%" >                  
                  <p>Send Gift / Donation</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="../gifts/gift_donation_verification.php" class="nav-link" id="gift_donation_verification">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gift / Donation Verification</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="../gifts/gift_donation_sent.php" class="nav-link"  id="gift_donation_sent">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sent Gift / Donation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../currency_converter/currency_converter.php" class="nav-link"  id="currency_converter">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Currency Converter</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../gifts/gift_donation_received.php" class="nav-link"  id="gift_donation_received">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gift / Donation Received</p>
                </a>
              </li>
               
              <li class="nav-item">
                <a href="../payment/payment_methods.php" class="nav-link" id="payment_methods">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Methods Of Payment</p>
                </a>
              </li>
              
            </ul>
          </li>

            <li class="nav-item">
            <a href="" class="nav-link head-link" style="color:white">
             <i class="nav-icon fas fa-th"></i>
                <p>
                Tokens WJCW CF
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                    <a href="../tokens/purchase_token.php" class="nav-link" id="purchase_token">
                  <i class="nav-icon fa fa-key fas fa-group"></i>
                  <p>
                    Purchase Token(s)
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
             
            <?php
                    $sql = "Select * from member_registration where member_id = '$member_id'";
                    $result = mysqli_query($link, $sql);
                    
                    $row = mysqli_fetch_assoc($result);
                    $privilege = $row['privilege'];
                    if($privilege == 1){    
            ?>              
             <!-- <li class="nav-item">
                    <a href="../tokens/generate_token.php" class="nav-link">
                  <i class="nav-icon fa fa-key fas fa-group"></i>
                  <p>
                    Generate Token(s)
                  </p>
                </a>
              </li> -->
              <li class="nav-item">
                    <a href="../tables/verify_payments.php" class="nav-link">
                  <i class="nav-icon fa fa-key fas fa-group"></i>
                  <p>
                    Verify Payments
                  </p>
                </a>
              </li>
             <li class="nav-item">
                    <a href="../tables/total_members.php" class="nav-link">
                  <i class="nav-icon fa fa-key fas fa-group"></i>
                  <p>
                    Total Members
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>

            <?php } ?>
                 
             <li class="nav-item">
                    <a href="../tokens/valid_tokens.php" class="nav-link" id="valid_tokens">
                  <i class="nav-icon fa fa-key"></i>
                  <p>
                    Valid Tokens
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
             <li class="nav-item">
                    <a href="../tokens/invalid_tokens.php" class="nav-link" id="invalid_tokens">
                  <i class="nav-icon fa fa-key"></i>
                  <p>
                    Invalid Tokens
                    <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
             <li class="nav-item">
                    <a href="../tokens/purchase_token_history.php" class="nav-link" id="purchase_token_history">
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
            <a href="../tables/my_wjcw_tbl.php" class="nav-link" id="my_wjcw_tbl">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My WJCW CF Table
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gifts/user_activity.php" class="nav-link" id="user_activity">
              <i class="nav-icon fas fa-group"></i>
              <p>
                My Activity
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <!--
          <li class="nav-item">
            <a href="../../genererate_link_send_email.php" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Generate Link
              </p>
            </a>
          </li>
          -->
              
              <li class="nav-item">
                <a href="../team/team_members.php" class="nav-link" id="team_members">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My WJCW CF Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../profile/profile.php" class="nav-link" id="profile">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Own Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../my_account/join-us.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register New Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../payment/pay_annaul_fee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pay WJCW</p>
                </a>
              </li>
<!--
               <li class="nav-item">
                <a href="../chat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chat</p>
                </a>
              </li>
-->
               <li class="nav-item">
                <a href="../marketing_tool.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marketing Tools</p>
                </a>
              </li>
            </ul>
          </li>
          
        <li class="nav-header">OTHERS</li>
        <li class="nav-item">
            <a href="../calendar.php" class="nav-link" id="calendar">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="../chat.php" class="nav-link" id="help">
              <i class="nav-icon far fa-help-alt"></i>
              <p>
                help
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../session_logout.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      </div>
</div>