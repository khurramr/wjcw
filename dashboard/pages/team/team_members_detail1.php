<style>
 .collapsed{color:green}    
 table { 
  width: 100%; 
  border-collapse: collapse; 
}
/*    .td_h {background-color: white; color:black}    */

    
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block;
        font-size: 3.6vw;
/*        font-weight: bold*/
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "Serial #"; }
	td:nth-of-type(2):before { content: "Member ID"; }
	td:nth-of-type(3):before { content: "Name"; }
	td:nth-of-type(4):before { content: "Mobile"; }
	td:nth-of-type(5):before { content: "Email"; }
}
</style>                    
<div class="container-fluid">
    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id="accordion">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne"  style="color:green; font-weight:bold; font-size:24px">
                           <?php
                                 echo "<div class='row'>";
                                 echo "<div class='col-md-3'>";
                                 echo "TOTAL MEMBERS " . $total_members;
                                 echo "</div>";                            
                                 echo "<div class='col-md-6'>";
                                 echo "<div align='center' style='letter-spacing:6px; word-spacing:5px'>". ' ' . $fullname . ": " . $member_id . "</div>";    
                                 echo "</div>";
                                 echo "</div>";
                            ?>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
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
                                </tr>    
                            <?php } ?>
                        </tbody>    
  
                    </table>
                    </div>
                    </div>
                  </div>
                  <div class="card card-success">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo" style="font-size:22px">
                           <?php
                                 echo "<div class='row'>";
                                 echo "<div class='col-md-3'>";
                                 echo "ACTIVE MEMBERS " . $total_active;
                                 echo "</div>";                            
                                 echo "<div class='col-md-6'>";
                                 echo "<div align='center' style='letter-spacing:6px; word-spacing:5px'>". ' ' . $fullname . ": " . $member_id . "</div>";    
                                 echo "</div>";
                                 echo "</div>";
                            ?>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                      <div class="card-body">
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
                    </div>
                  </div>
                  <div class="card card-danger">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree" style="font-size:22px">
                           <?php
                                 echo "<div class='row'>";
                                 echo "<div class='col-md-3'>";
                                 echo "SUSPENDED " . $total_suspended;
                                 echo "</div>";                            
                                 echo "<div class='col-md-6'>";
                                 echo "<div align='center' style='letter-spacing:6px; word-spacing:5px'>". ' ' . $fullname . ": " . $member_id . "</div>";    
                                 echo "</div>";
                                 echo "</div>";
                            ?>
                            
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                      <div class="card-body">
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
                    </div>
                  </div>
                  <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseFour" style="font-size:22px">
                           <?php
                                 echo "<div class='row'>";
                                 echo "<div class='col-md-3'>";
                                 echo "CANCELLED " . $total_cancelled;
                                 echo "</div>";                            
                                 echo "<div class='col-md-6'>";
                                 echo "<div align='center' style='letter-spacing:6px; word-spacing:5px'>". ' ' . $fullname . ": " . $member_id . "</div>";    
                                 echo "</div>";
                                 echo "</div>";
                            ?>
                            
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                      <div class="card-body">
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
                    </div>
                  </div>
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseFive" style="font-size:22px">
                           <?php
                                 echo "<div class='row'>";
                                 echo "<div class='col-md-3'>";
                                 echo "LAPSED " . $total_lapsed;
                                 echo "</div>";                            
                                 echo "<div class='col-md-6'>";
                                 echo "<div align='center' style='letter-spacing:6px; word-spacing:5px'>". ' ' . $fullname . ": " . $member_id . "</div>";    
                                 echo "</div>";
                                 echo "</div>";
                            ?>
                            
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                      <div class="card-body">
            
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>                    
</div>
                                           

<script>
$(document).ready(function() {
    $('.display').DataTable({
        "ordering": false,
          "pageLength": 25

    });

$(".collapsed").click(function(){
            $(this).css("outline", "0");
            $(this).css("border", "none");
            $(this).css('textDecoration','none')    
})
$(".collapsed").hover(function(){
        $(this).removeClass("btn-link");
        $(this).addClass("btn-success");
}, function(){
        $(this).removeClass("btn-success");
        $(this).addClass("btn-link");

});
    
$(".collapsed").blur(function(){
        $(this).removeClass("btn-success");
        $(this).addClass("btn-link");
});
    
} );

    
</script>