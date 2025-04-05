<?php
  include("../db/connect.php");    
  $member_id = $_POST['member_id'];
   $sql = "SELECT
            member_registration.member_id,
            member_registration.first_name,
            member_registration.last_name,
            member_registration.contact_no_1,
            member_registration.email,
            member_registration.address_1,
            payment_methods.service_provider_type,
            payment_methods.service_provider_name,
            payment_methods.account_no
            FROM
            member_registration
            LEFT OUTER JOIN payment_methods ON member_registration.member_id = payment_methods.memberid
            WHERE
            member_registration.member_id = $member_id
            and member_id <> sponser_reference
            ";
            $result = mysqli_query($link, $sql);
            $result2 = mysqli_query($link, $sql);
   
?>
        <div id="modal_table">                   
                <table id="members" class="table  display table-hover text-center">
                  <thead>
                      <th class="td_h">Recipient ID</th>
                      <th class="td_h">Recipient Name</th>
                      <th class="td_h">Contact #</th>
                      <th class="td_h">Method of Payment</th>
                      <th class="td_h">Email</th>
                  </thead>
                  <tbody>
                   <?php $row = mysqli_fetch_assoc($result); ?>
                    <tr class="tr_class">
                      <td><?php echo $row["member_id"]; ?></td>
                      <td><?php echo $row["first_name"] ." ". $row["last_name"] ?></td>
                      <td><?php echo $row["contact_no_1"]; ?></td>
                      <td><?php echo $row["service_provider_type"]; ?></td>
                      <td><?php echo $row["email"]; ?></td>
                    </tr>

                  </tbody>
                </table>
                <br>
                   <table id="members2" class="table  display table-hover text-center">
                  <thead>
                      <th class="td_h">Service Provider Name</th>
                      <th class="td_h">Account #</th>
                  </thead>
                  <tbody>
                   <?php while($row = mysqli_fetch_assoc($result2)){ ?>
                    <tr class="tr_class">
                      <td><?php echo $row["service_provider_name"]; ?></td>
                      <td><?php echo $row["account_no"]; ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
        <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
       </div>
                

