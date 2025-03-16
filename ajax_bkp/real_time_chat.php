<?php 
include("../db/connect.php");
$login_id = $_POST['logon_id'];
 
$sql = "Select * from member_registration where sponser_reference = '$login_id'";
$members = mysqli_query($link, $sql);

$sql = "Select * from member_registration where member_id = '$login_id'";
$result = mysqli_query($link, $sql);
$me = mysqli_fetch_assoc($result);
$sponser_reference = $me['sponser_reference'];


$sql = "Select * from member_registration where member_id = '$sponser_reference'";
$sponser = mysqli_query($link, $sql);

?>
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
        <h4 class="mt-4 mb-2">Direct Chat / Message To Your Sponsered Members</h4>
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
</script>
