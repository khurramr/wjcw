<?php include("../../../db/connect.php"); 

$select = "SELECT * FROM payment_methods where memberid = $member_id";
$result = mysqli_query($link, $select);
$i = 0;
?>      

 <style>
.bold {font-weight: bold}
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
  text-align: center; 
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
	td:nth-of-type(2):before { content: "Service Provider Type"; }
	td:nth-of-type(3):before { content: "Service Provider Name"; }
	td:nth-of-type(4):before { content: "Account #"; }
	td:nth-of-type(5):before { content: "Edit"; }
	td:nth-of-type(6):before { content: "Delete"; }
}
</style>                     
 <div class="expand">
  <div class="row">

<div class="col-11 resizeable_p">
<h3 class="h_fonts text-center h_color">Add / Update / Delete</h3>
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Gift / Donation Payment Method</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover" id="payment_methods_table">
                  <thead>
                    <tr>
                      <th>Sr#</th>
                      <th style="width:15%">Service Provider Type</th>
                      <th style="width:15%">Service Provider Name</th>
                      <th>Account #</th>
                      <th>Remarks</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                      <td><?php  echo $i = $i + 1; ?></td>
                      <td id="spt_<?php echo $row["id"]; ?>"><?php echo $row["service_provider_type"]; ?></td>
                      <td id="spn_<?php echo $row["id"]; ?>"><?php echo $row["service_provider_name"]; ?></td>
                      <td id="acc_<?php echo $row["id"]; ?>" class="breaklines"><?php echo $row["account_no"]; ?></td>
                      <td id="remark_<?php echo $row["id"]; ?>" style="text-align:left"><?php echo $row["remarks"]; ?></td>
                      <td><button class="btn btn-success btn-edit" data-toggle="modal" data-target="#modal_edit" id_btn="<?php echo $row["id"]; ?>" style="width:100%; height:auto">Edit</button></td>
                      <td><button class="btn btn-danger btn-delete" style="width:100%; height:auto" id_btn="<?php echo $row["id"]; ?>">Delete</button></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <?php include("../modal/modal_payment_method_edit.php") ?> 
       
      <div class="row">
          <div class="col-11">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Payment Method</h3>

                <div class="card-tools">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="text-align:left">Enter Service Provider</th>
                      <th style="text-align:left">Enter Service Provider Name</th>
                      <th style="text-align:left">Account #</th>
                      <th style="text-align:left">Remarks</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                       <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="add_sp_type" id="add_sp_type" class="form-control float-right" placeholder="i.e; Bank, Ewallet">
                       </div>
                       <div class="input-group input-group-sm" style="width: 150px;">
                        <span id="span_add_sp_type" style="display:none" class="text-danger span_alert">Enter Service Provider Type</span>
                       </div>
                    </td>
                      <td>
                       <div class="input-group input-group-sm" style="width: 250px;">
                        <input type="text" name="add_sp_name" id="add_sp_name" class="form-control float-right" placeholder="i.e; City Bank, Skrill">
                       </div>
                       <div class="input-group input-group-sm" style="width: 250px;">
                        <span id="span_add_sp_name" style="display:none" class="text-danger span_alert">Enter Service Provider Name</span>
                       </div>
                                                
                    </td>
                      <td>
                       <div class="input-group input-group-sm " style="width: 250px;">
                        <input type="text" name="add_account_no" id="add_account_no" class="form-control float-right" placeholder="i.e; 1311406564666465">
                       </div>
                       <div class="input-group input-group-sm " style="width: 250px;">
                        <span id="span_add_account_no" style="display:none" class="text-danger span_alert">Enter Account Number</span>
                       </div>
                      </td>
                      <td>
                       <div class="input-group input-group-sm " style="width: 250px">
                           <textarea type="text" name="add_remark" id="add_remark" class="form-control float-right" placeholder="Optional:Add Remarks" style="height:60px"></textarea>
                       </div>
                       <div class="input-group input-group-sm " style="width: 250px;">
                        <span id="span_add_remark" style="display:none" class="text-danger span_alert">Enter Remarks</span>
                       </div>
                      </td>
                      <td><button class="btn btn-success btn_add_payment_method" id="btn_add_payment_method" style="width:100%; height:auto;">ADD</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
                </div>
</div>        