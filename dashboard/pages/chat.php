<?php include("../session_login.php") ?>
<?php include("chat_mysqli.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Summary</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../dist/css/gradient_buttons.css">
  <link rel = "icon" href="../../../assets/images/cropped-logo.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="../dist/css/size_adjustment_G_D_S_R.css">
  <style>
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
  
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../../assets/images/cropped-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WJCWF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/fafa.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $fullname; ?></a>
        </div>
      </div>

       <?php include"sidebar-menu.php" ?>
    </div>
  </aside>
<?php include"../header_green.php" ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CONTACT WITH OUR REPRESENTATIVE</h1>
          </div>

          </div>
      </div>
    </section>
<div class="container-fluid scroll">
    <!-- Main content -->
   <section class="content" id="chat_room">
      <div class="container-fluid">
        <h4 class="mt-4 mb-2">Direct Chat / Message To Your SPONSER</h4>
        <div class="row">
                     <?php 
                            while($row = mysqli_fetch_assoc($sponser)){
                            $member_id = $row['member_id'];
                            $id = $row['id'];
                    ?>
     
          <div class="col-md-3">
            <!-- DIRECT CHAT SUCCESS -->
            <div class="card card-success  direct-chat direct-chat-success" id="card_<?php echo $id; ?>">
              <div class="card-header"  style='background-color:purple'>
                <h3 class="card-title"><?php echo $row['first_name'] . ' ' . $row['last_name']?></h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge bg-primary"></span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">

                        <?php 
                            $sql = "SELECT
                                    member_registration.member_id,
                                    CONCAT(member_registration.first_name,' ' , member_registration.last_name) as full_name,
                                    chat.message,
                                    chat.status,
                                    chat.sender_userid,
                                    chat.`timestamp`
                                    FROM
                                    chat
                                    INNER JOIN member_registration ON chat.sender_userid = member_registration.member_id
                                    where chat.sender_userid = '$login_id' and chat.reciever_userid = '$member_id' 
                                    OR chat.sender_userid = '$member_id' and chat.reciever_userid = '$login_id'
                                    ORDER BY chat.chat_id";
                            $result = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_assoc($result)){        
                        if($row['sender_userid'] == $login_id){
                        echo "<div class='container mt-2'><strong>". $row['full_name']  . "<span class='direct-chat-timestamp float-right'>". $row['timestamp'] ."</span></strong></div>";                    
                        echo "<img class='direct-chat-img' src='../dist/img/user1-128x128.jpg' alt='Message User Image'>
                        <div class='direct-chat-text' style='background-color:#00b359; color:white;  border-radius:10px'>". $row['message']  . "</div>";
                        } else{ ?>
                        <?php
                        echo "<div class='container mt-2' style='text-align:right'><strong>". $row['full_name']  . "<span class='direct-chat-timestamp float-left'>". $row['timestamp'] ."</span></strong></div>";
                        echo "<div class='row'>";    
                        echo "<div class='col-md-10'>";    
                        echo "<div class='direct-chat-text' style='background-color:#0275d8; color:white; border-radius:10px; margin-left:.5rem; height:35px'>". $row['message']  . "</div>";
                        echo "</div>";

                        echo "<div class='col-md-1'>";                                
                        echo "<img class='direct-chat-img' src='../dist/img/user6-128x128.jpg' alt='Message User Image'>";                                                       
                        echo "</div>";
                        echo "</div>";                        
                        }

                        } ?>
                    </div>                    
                    </div>                    
                </div>                    
                </div>                    
              <div class="card-footer">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control" id="msg_<?php echo $id ?>">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-success btn_send" id="<?php echo $id ?>" memberid='<?php echo $member_id ?>'>Send</button>
                    </span>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
<?php } ?>

        </div>        
        <h4 class="mt-4 mb-2"> Message To Our Representative</h4>
        <div class="row">
                     <?php 
                            while($row = mysqli_fetch_assoc($members)){
                            $member_id = $row['member_id'];
                            $id = $row['id'];
                    ?>
     
          <div class="col-md-3">
            <!-- DIRECT CHAT SUCCESS -->
            <div class="card card-success  direct-chat direct-chat-success" id="card_<?php echo $id; ?>">
              <div class="card-header">
                <h3 class="card-title"><?php echo $row['first_name'] . ' ' . $row['last_name']?></h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge bg-primary"></span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">

                        <?php 
                            $sql = "SELECT
                                    member_registration.member_id,
                                    CONCAT(member_registration.first_name,' ' , member_registration.last_name) as full_name,
                                    chat.message,
                                    chat.status,
                                    chat.sender_userid,
                                    chat.`timestamp`
                                    FROM
                                    chat
                                    INNER JOIN member_registration ON chat.sender_userid = member_registration.member_id
                                    where chat.sender_userid = '$login_id' and chat.reciever_userid = '$member_id' 
                                    OR chat.sender_userid = '$member_id' and chat.reciever_userid = '$login_id'
                                    ORDER BY chat.chat_id";
                            $result = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_assoc($result)){        
                        if($row['sender_userid'] == $login_id){
                        echo "<div class='container mt-2'><strong>". $row['full_name']  . "<span class='direct-chat-timestamp float-right'>". $row['timestamp'] ."</span></strong></div>";                    
                        echo "<img class='direct-chat-img' src='../dist/img/user1-128x128.jpg' alt='Message User Image'>
                        <div class='direct-chat-text' style='background-color:#00b359; color:white;  border-radius:10px'>". $row['message']  . "</div>";
                        } else{ ?>
                        <?php
                        echo "<div class='container mt-2' style='text-align:right'><strong>". $row['full_name']  . "<span class='direct-chat-timestamp float-left'>". $row['timestamp'] ."</span></strong></div>";
                        echo "<div class='row'>";    
                        echo "<div class='col-md-10'>";    
                        echo "<div class='direct-chat-text' style='background-color:#0275d8; color:white; border-radius:10px; margin-left:.5rem; height:35px'>". $row['message']  . "</div>";
                        echo "</div>";

                        echo "<div class='col-md-1'>";                                
                        echo "<img class='direct-chat-img' src='../dist/img/user6-128x128.jpg' alt='Message User Image'>";                                                       
                        echo "</div>";
                        echo "</div>";                        
                        }

                        } ?>
                    </div>                    
                    </div>                    
                </div>                    
                </div>                    
              <div class="card-footer">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control" id="msg_<?php echo $id ?>">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-success btn_send" id="<?php echo $id ?>" memberid='<?php echo $member_id ?>'>Send</button>
                    </span>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
<?php } ?>

        </div>
      </div>
    </section>
</div>

<!--
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
-->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">

    </footer>

</div>
<br><br><br><br><br><br><br><br>
<?php include"../copy_right.php"; ?>  
<script>
$(".btn_send").click(function(){
    var id = $(this).attr('id');
    var msg = $("#msg_" + id).val();
    var reciever = $(this).attr('memberid');
    var sender = "<?php echo $login_id; ?>";
    $.ajax({
        url:"../../ajax/chat_message_insert.php",
        method:"post",
        data:{id:id, msg:msg, reciever:reciever, sender:sender},
        success:function(data, success){
            $("#chat_room").html(data);
        }

    })
})


    setInterval(function(){
    var login = "<?php echo $login_id; ?>";        
        $.ajax({
        url:"../../ajax/chat_realtime.php",
        method:"post",
        data:{login:login},
        success:function(data, success){
            $("#chat_room").html(data);
        }

    })
    
    }, 20000)
    
</script>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
