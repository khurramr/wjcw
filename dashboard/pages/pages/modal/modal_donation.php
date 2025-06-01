<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>
-->
<!-- Modal modal20-->
<div class="modal fade" id="modal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        
        <?php 
          $sql = "Select * from member_registration where member_id = '$member_id' and gift_donation_level = 1";
          $result = mysqli_query($link, $sql);
          $row = mysqli_fetch_assoc($result);
          $member_id;
          $sponser_reference = $row['sponser_reference'];

          
          if(isset($_POST['picasso'])){
          $sql = "Select * from gift_donation_transactions where sent_by = '$member_id' and received_by = '$sponser_reference' and level = 1";
          $result = mysqli_query($link, $sql);
          $num_rows = mysqli_num_rows($result);
            if($num_rows == 0){
                 $sql = "Insert Into gift_donation_transactions (sent_by, received_by, amount, level, method_of_payment, account_no, remarks)
                        VALUES('$member_id', '$sponser_reference', '10', '1', '', '', '')";  
                  $result = mysqli_query($link, $sql);
            }     
          }
          ?>        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Service Provider</th>
                <th>Account #</th>
              </tr>
            </thead>
            <tbody>
           <?php 
            $sql = "SELECT
                    member_registration.sponser_reference,
                    member_registration.member_id,
                    member_registration.first_name,
                    member_registration.last_name,
                    member_registration.email,
                    member_registration.contact_no_1,
                    member_registration.contact_no_2,
                    payment_methods.service_provider_name,
                    payment_methods.account_no,
                    member_registration.`status`
                    FROM
                    member_registration
                    INNER JOIN payment_methods ON member_registration.member_id = payment_methods.memberid
                    WHERE sponser_reference = $member_id LIMIT 2";
                    $result = mysqli_query($link, $sql);
                    while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr>
                               <td><?= $row['first_name']; ?></td>
                               <td><?= $row['last_name']; ?></td>
                               <td><?= $row['service_provider_name']; ?></td>
                               <td><?= $row['account_no']; ?></td>
                            </tr>
              <?php }?>
                    
              <?php
                $sql = "SELECT * FROM member_registration WHERE sponser_reference = $member_id and status = '1'  ORDER BY id DESC limit 1";
                    $result = mysqli_query($link, $sql);
                     while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr>
                               <td><?= $row['first_name']; ?> </td>
                               <td><?= $row['last_name']; ?> </td>
                               <td><?= $row['email']; ?> </td>
                               <td><?= $row['contact_no_1']; ?> </td>
                            </tr>
                        
                <?php } ?>
            </tbody>
        </table>
            
          <h6>Please verify that you wish to send Stage 01 gift/donation of £20</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
           <form method="post" action="">
               <input type="submit" name="picasso" class="btn btn-success" value="YES, I VERIFY"/>
           </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal40-->
<div class="modal fade" id="modal40" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 02 gift/donation of £40</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal100-->
<div class="modal fade" id="modal100" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 03 gift/donation of £100</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal2500-->
<div class="modal fade" id="modal250" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 04 gift/donation of £250</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal500-->
<div class="modal fade" id="modal500" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 05 gift/donation of £500</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal1000-->
<div class="modal fade" id="modal1000" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 06 gift/donation of £1000</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal2000-->
<div class="modal fade" id="modal2000" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 07 gift/donation of £2000</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal4000-->
<div class="modal fade" id="modal4000" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 08 gift/donation of £4000</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal8000-->
<div class="modal fade" id="modal8000" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 09 gift/donation of £8000</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal16000-->
<div class="modal fade" id="modal16000" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 10 gift/donation of £16000</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal32000-->
<div class="modal fade" id="modal32000" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 11 gift/donation of £32000</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal modal64000-->
<div class="modal fade" id="modal64000" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Verify You Donation</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4><?= $fullname ?></h4>
          <h6>Please verify that you wish to send Stage 13 gift/donation of £64000</h6>
          <h6>Please remember if you verify you will need to send straightaway</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">YES, I VERIFY</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">NO, PLEASE CANCEL</button>
        
      </div>
    </div>
  </div>
</div>