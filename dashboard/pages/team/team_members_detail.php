  <div class="cont_width" style="text-align:left">
    <div class="row">
        <div class="col-md-12">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#stage01" aria-controls="home" role="tab" data-toggle="tab">TOTAL MEMBERS</a></li>
                    <li role="presentation"><a href="#stage02" aria-controls="profile" role="tab" data-toggle="tab">ACTIVE MEMBERS</a></li>
                    <li role="presentation"><a href="#stage03" aria-controls="messages" role="tab" data-toggle="tab">SUSPENDED</a></li>
                    <li role="presentation"><a href="#stage04" aria-controls="messages" role="tab" data-toggle="tab">CANCELLED</a></li>
                    <li role="presentation"><a href="#stage05" aria-controls="messages" role="tab" data-toggle="tab">LAPSED</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active toggleClass" id="stage01">
                         <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "TOTAL MEMBERS " . $total_members; ?></h1>
                           <table id="total_members" class="table  display table-hover text-center">
                        <thead>
                            <th style="width:15%; ">Serial #</th>    
                            <th>Member ID</th>    
                            <th>Name</th>    
                            <th>Mobile</th>    
                            <th>Email</th>    
                            <th>Current Status</th>    
                            <th></th>    
                        </thead>
                        <tbody>
                            <?php $i = 1; while($row = mysqli_fetch_assoc($result_total_detail)){ 
                            if($row['status'] == '1'){
                                $status = 'Active';
                            }else if($row['status'] == '2'){
                                $status = 'Suspended';
                            }else if($row['status'] == '3'){
                                $status = 'Cancelled';
                            }else if($row['status'] == '4'){
                                $status = 'Lapsed';
                            }else{
                                $status = 'Inactive';
                            }
                            ?>        
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?= $row['member_id']; ?></td>
                                    <td><?= $row['first_name'] .' ' . $row['last_name']; ?></td>
                                    <td><?= $row['contact_no_1']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?=  $status ?></td>
<!--
                                    <td><button class="btn btn-success btn-md cls_suspense"  id="<?php //echo  $row['id']; ?>" style="width:90%">
                                    <?php 
/*
                                            if($row['status'] == '1'){
                                                echo "Suspense";
                                            }
                                            else{
                                                echo "Activate";
                                            }
*/
                                        ?>
                                    </button></td>
-->
                                </tr>    
                            <?php } ?>
                        </tbody>    
  
                    </table>         
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage02">
                            <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "ACTIVE MEMBERS " . $total_active; ?></h1>

                        <table id="total_members" class="table  display table-hover text-center">
                        <thead>
                            <th style="width:15%; ">Serial #</th>    
                            <th>Member ID</th>    
                            <th>Name</th>    
                            <th>Mobile</th>    
                            <th>Email</th>    
                            <th>Status</th>    
                        </thead>
                        <tbody>
                            <?php $i = 1; while($row = mysqli_fetch_assoc($result_active_detail)){ 
                            if($row['status'] == '1'){
                                $status = 'Active';
                            }else if($row['status'] == '2'){
                                $status = 'Suspended';
                            }else if($row['status'] == '3'){
                                $status = 'Cancelled';
                            }else if($row['status'] == '4'){
                                $status = 'Lapsed';
                            }else{
                                $status = 'Inactive';
                            }


                            
                            ?>        
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?= $row['member_id']; ?></td>
                                    <td><?= $row['first_name'] .' ' . $row['last_name']; ?></td>
                                    <td><?= $row['contact_no_1']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?=  $status ?></td>
                                </tr>    
                            <?php } ?>
                        </tbody>    
  
                    </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage03">
                        <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "SUSPENDED " . $total_suspended; ?></h1>
                         <table id="total_members" class="table  display table-hover text-center">
                        <thead>
                            <th style="width:15%; ">Serial #</th>    
                            <th>Member ID</th>    
                            <th>Name</th>    
                            <th>Mobile</th>    
                            <th>Email</th>    
                            <th>Status</th>    
                        </thead>
                        <tbody>
                            <?php $i = 1; while($row = mysqli_fetch_assoc($result_suspended_detail)){ 
                            if($row['status'] == '1'){
                                $status = 'Active';
                            }else if($row['status'] == '2'){
                                $status = 'Suspended';
                            }else if($row['status'] == '3'){
                                $status = 'Cancelled';
                            }else if($row['status'] == '4'){
                                $status = 'Lapsed';
                            }else{
                                $status = 'Inactive';
                            }


                            
                            ?>        
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?= $row['member_id']; ?></td>
                                    <td><?= $row['first_name'] .' ' . $row['last_name']; ?></td>
                                    <td><?= $row['contact_no_1']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?=  $status ?></td>
                                </tr>    
                            <?php } ?>
                        </tbody>    
  
                    </table> 
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage04">
                         <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "CANCELLED " . $total_cancelled; ?></h1>                     
                    <table id="total_members" class="table  display table-hover text-center">
                        <thead>
                            <th style="width:15%; ">Serial #</th>    
                            <th>Member ID</th>    
                            <th>Name</th>    
                            <th>Mobile</th>    
                            <th>Email</th>    
                            <th>Status</th>    
                        </thead>
                        <tbody>
                            <?php $i = 1; while($row = mysqli_fetch_assoc($result_cancelled_detail)){ 
                            if($row['status'] == '1'){
                                $status = 'Active';
                            }else if($row['status'] == '2'){
                                $status = 'Suspended';
                            }else if($row['status'] == '3'){
                                $status = 'Cancelled';
                            }else if($row['status'] == '4'){
                                $status = 'Lapsed';
                            }else{
                                $status = 'Inactive';
                            }
                            ?>        
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?= $row['member_id']; ?></td>
                                    <td><?= $row['first_name'] .' ' . $row['last_name']; ?></td>
                                    <td><?= $row['contact_no_1']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?=  $status ?></td>
                                </tr>    
                            <?php } ?>
                        </tbody>    
  
                    </table>
                        
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage05">
                        <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "LAPSED " . $total_lapsed; ?></h1>
                          <table id="total_members" class="table  display table-hover text-center">
                        <thead>
                            <th style="width:15%; ">Serial #</th>    
                            <th>Member ID</th>    
                            <th>Name</th>    
                            <th>Mobile</th>    
                            <th>Email</th>    
                            <th>Status</th>    
                        </thead>
                        <tbody>
                            <?php $i = 1; while($row = mysqli_fetch_assoc($result_lapsed_detail)){ 
                            if($row['status'] == '1'){
                                $status = 'Active';
                            }else if($row['status'] == '2'){
                                $status = 'Suspended';
                            }else if($row['status'] == '3'){
                                $status = '';
                            }else if($row['status'] == '4'){
                                $status = 'Lapsed';
                            }else{
                                $status = 'Inactive';
                            }


                            
                            ?>        
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?= $row['member_id']; ?></td>
                                    <td><?= $row['first_name'] .' ' . $row['last_name']; ?></td>
                                    <td><?= $row['contact_no_1']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?=  $status ?></td>
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


<script>
$(document).ready(function() {
    $('.display').DataTable({
        "ordering": false,
          "pageLength": 25

    });
    
    $('.cls_suspense').click(function(){
    var id = $(this).attr("id");
    var status = $.trim($(this).text());
    $.ajax({
        url:"../../../ajax/suspend_active.php",
        method:"POST",
        data:{id:id, status:status},
        success:function(data, success){
            location.reload();
        }
        
    })    
        
    });
    });

</script>