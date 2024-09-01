<?php
$sql = "SELECT
member_registration.id,
member_registration.registration_process,
member_registration.member_id,
member_registration.sponser_reference,
member_registration.token,
member_registration.`password`,
member_registration.first_name,
member_registration.last_name,
member_registration.email,
member_registration.contact_no_1,
member_registration.contact_no_2,
member_registration.address_1,
member_registration.address_2,
member_registration.country,
member_registration.city,
member_registration.zip_code,
member_registration.proceeded_next,
member_registration.email_verified_confirm,
member_registration.licensing_fee,
member_registration.gift_donation_amount,
member_registration.`status`,
member_registration.privilege,
member_registration.avatar,
member_registration.dated,
member_registration.paid_number,
member_registration_view.member_id AS s_member_id,
member_registration_view.first_name AS s_first_name,
member_registration_view.last_name AS s_last_name,
member_stages.`level`
FROM
member_registration
LEFT OUTER JOIN member_registration_view ON member_registration.sponser_reference = member_registration_view.member_id
LEFT OUTER JOIN member_stages ON member_registration.member_id = member_stages.sent_by ORDER BY member_registration.member_id";
$result = mysqli_query($link, $sql);
$i = 1;
?>
   

  <div class="cont_width" style="text-align:left">
    <div class="row">
        <div class="col-md-12">
                <h1 class="h_fonts h_color resizeable_h" style="text-align:center">WJCWCF MEMBERS </h1>
                    <table id="total_members" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>    
                            <th>Member Id</th>    
                            <th>Member Name</th>    
                            <th>Sponsered Id</th>    
                            <th>Sponsered By</th>    
                            <th>Email</th>    
                            <th>Contact #</th>    
                            <th>City</th>    
                            <th>Stage</th>    
                            <th>Registration Date</th>    
                            <th></th>    
                        </thead>
                        <tbody>
                           <?php while($row = mysqli_fetch_assoc($result)){ $status = $row['status']; ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['member_id'] ?></td>
                                <td><?php echo $row['first_name'] . ' ' . $row['last_name'] ?></td>
                                <td><?php echo $row['s_member_id'] ?></td>
                                <td><?php echo $row['s_first_name'] . ' ' . $row['s_last_name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['contact_no_1'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><?php echo $row['level'] ?></td>
                                <td><?php echo date("d/m/Y H:i:s", strtotime($row['dated'])); ?></td>
                                <td>
                                <?php if($status == 0){ ?>
                                <button status="<?php echo $row['status'] ?>" id="<?php echo $row['id'] ?>" class="btn btn-danger btn-suspend">Suspended</button>
                                <?php } else{ ?>
                                <button status="<?php echo $row['status'] ?>" id="<?php echo $row['id'] ?>" class="btn btn-success btn-suspend">Active</button>
                                <?php } ?>
                                </td>
                                
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>         
        </div>
    </div>
</div>