<style>
    #btn_add_token{background-color:green}
    #btn_add_token:hover{background-color:seagreen}
 table { 
  width: 80%; 
/*  border-collapse: collapse; */
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
    font-size:20px;
  padding: 4px; 
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
	td:nth-of-type(1):before { content: "Sr#"; }
	td:nth-of-type(2):before { content: "Token"; }
	td:nth-of-type(3):before { content: "Annual Fee"; }
	td:nth-of-type(4):before { content: "Purchase Date"; }
	td:nth-of-type(5):before { content: "Expiry Date"; }
    
    }
.list-item{font-size: 1.5vw}
    @media only screen and (max-width: 500px) {
    .list-item{font-size: 4vw}
    }
    
</style>                    
<div class="container-fluid">
    <div class="row">
          <div class="col-md-12 p_fonts">
            <div class="card card-success card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
                  <li class="nav-item list-item">
                    <a class="nav-link active" id="custom-tabs-five-overlay-tab" data-toggle="pill" href="#custom-tabs-five-overlay" role="tab" aria-controls="custom-tabs-five-overlay" aria-selected="true">PURCHASED TOKENS</a>
                  </li>
                  <li class="nav-item list-item">
                    <a class="nav-link" id="custom-tabs-five-overlay-dark-tab" data-toggle="pill" href="#custom-tabs-five-overlay-dark" role="tab" aria-controls="custom-tabs-five-overlay-dark" aria-selected="false">VALID TOKENS</a>
                  </li>
                  <li class="nav-item list-item" >
                    <a class="nav-link" id="custom-tabs-five-normal-tab" data-toggle="pill" href="#custom-tabs-five-normal" role="tab" aria-controls="custom-tabs-five-normal" aria-selected="false" style="background-color:red; color:white">INVALID TOKENS</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-five-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-five-overlay" role="tabpanel" aria-labelledby="custom-tabs-five-overlay-tab">
                    <div class="overlay-wrapper">

                      <div class="card">
                    
                            <div class="card-body">                    
                   <table id="received_history" class="table  display table-hover text-center" style="font-size:75%">
                        <thead>
                            <th>No.</th>    
                            <th>Token Generated Date</th>    
                            <th>Token Issued Date</th>    
                            <th>Token Expiry Date</th>    
                            <th>Status</th>    
                            <th>Purchase Id</th>    
                            <th>Purchased By</th>    
                            <th>Generated Token</th>    
                            <th>Fee</th>    
    
                        </thead>
                        <tbody>
                        
                        <?php
                            $sql = "SELECT
                                    token_purchase.id,
                                    token_purchase.token,
                                    token_purchase.memberid,
                                    token_purchase.purchasedby,
                                    token_purchase.purchase_date,
                                    token_purchase.expiry_date,
                                    token_purchase.issued_date,
                                    token_purchase.annual_fee,
                                    token_purchase.`status`,
                                    token_purchase.dated,
                                    token_purchase.added,
                                    token_purchase.bank_key,
                                    CONCAT(member_registration.first_name, ' ' , member_registration.last_name) AS fullname
                                    FROM
                                    token_purchase
                                    LEFT OUTER JOIN member_registration ON token_purchase.purchasedby = member_registration.member_id
                                    WHERE
                                    token_purchase.memberid = '$member_id'";
                            $result = mysqli_query($link, $sql);
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                $status = $row['status'];
                                if($row['status'] == 1){
                                    $status = 'Active';
                                }else{
                                    $status = 'Invalid';
                                }
                        ?>        
                            <tr <?php if($status == 'Invalid') { ?> style='color:red' <?php } ?>>
                                <td><?= $i++; ?></td>
                                <td><?= $row["dated"]; ?></td>
                                <td><?= $row["issued_date"]; ?></td>
                                <td><?= $row["expiry_date"]; ?></td>
                                <td><?= $status ?></td>
                                <td><?= $row["purchasedby"]; ?></td>
                                <td><?= $row["fullname"]; ?></td>
                                <td><?= "<span class='unselectable'>WJCW CF-</span>" . $row["token"]; ?></td>
                                <td>£<?= $row["annual_fee"]; ?></td>
                            </tr>    
                        <?php  } ?>

                        </tbody>    
                    </table>
    </div>


    </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-five-overlay-dark" role="tabpanel" aria-labelledby="custom-tabs-five-overlay-dark-tab">
                    <div class="overlay-wrapper">
 <div class="card">
    <div class="card-header" id="headingOne">

        <h1 class="h_fonts h_color resizeable_h" ><?= $fullname; ?> VALID TOKEN(s) DETAIL</h1>
    </div>

  <div class="card-body">                    
                   <table id="received_history" class="table  display table-hover text-center" style="font-size:90%">
                        <thead>
                            <th>No.</th>    
                            <th>Token Generated Date</th>    
                            <th>Status</th>    
                            <th>Generated Token</th>    
                            <th>Fee</th>    
    
                        </thead>
                        <tbody>
                        
                        <?php
                            $sql = "SELECT
                                    token_purchase.id,
                                    token_purchase.token,
                                    token_purchase.memberid,
                                    token_purchase.purchasedby,
                                    token_purchase.purchase_date,
                                    token_purchase.expiry_date,
                                    token_purchase.issued_date,
                                    token_purchase.annual_fee,
                                    token_purchase.`status`,
                                    token_purchase.dated,
                                    token_purchase.added,
                                    token_purchase.bank_key,
                                    member_registration.first_name + ' ' + member_registration.last_name as fullname
                                    FROM
                                    token_purchase
                                    LEFT OUTER JOIN member_registration ON token_purchase.purchasedby = member_registration.member_id
                                    WHERE
                                    token_purchase.memberid = '$member_id' AND token_purchase.status = '1'";
                            $result = mysqli_query($link, $sql);
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                $status = $row['status'];
                                if($row['status'] == 1){
                                    $status = 'Active';
                                }else{
                                    $status = 'Invalid';
                                }
                        ?>        
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row["purchase_date"]; ?></td>
                                <td><?= $status ?></td>
                                <td><?= "<span class='unselectable'>WJCW CF-</span>" . $row["token"]; ?></td>
                                <td>£12</td>
                            </tr>    
                        <?php  } ?>

                        </tbody>    
                    </table>
    </div>

    </div>                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-five-normal" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab">
                         <div class="card">
    <div class="card-header" id="headingOne">

        <h1 class="h_fonts h_color resizeable_h" ><?= $fullname; ?> INVALID TOKEN(s) DETAIL</h1>
    </div>

   <div class="card-body">                    
                   <table id="received_history" class="table  display table-hover text-center" style="font-size:90%">
                        <thead>
                            <th>No.</th>    
                            <th>Token Generated Date</th>    
                            <th>Token Issued Dated</th>    
                            <th>Status</th>    
                            <th>Purchased By</th>    
                            <th>Member Name</th>    
                            <th>Generated Token</th>    
                            <th>Fee</th>    
                            <th>Delete</th>    
    
                        </thead>
                        <tbody>
                        
                        <?php
                            $sql = "SELECT
                                    token_purchase.id,
                                    token_purchase.token,
                                    token_purchase.memberid,
                                    token_purchase.purchasedby,
                                    token_purchase.purchase_date,
                                    token_purchase.expiry_date,
                                    token_purchase.issued_date,
                                    token_purchase.annual_fee,
                                    token_purchase.`status`,
                                    token_purchase.dated,
                                    token_purchase.added,
                                    token_purchase.bank_key,
                                    member_registration.first_name + ' ' + member_registration.last_name as fullname
                                    FROM
                                    token_purchase
                                    LEFT OUTER JOIN member_registration ON token_purchase.purchasedby = member_registration.member_id
                                    WHERE
                                    token_purchase.memberid = '$member_id' AND token_purchase.status = '0'";
                            $result = mysqli_query($link, $sql);
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                $status = $row['status'];
                                if($row['status'] == 1){
                                    $status = 'Active';
                                }else{
                                    $status = 'Invalid';
                                }
                        ?>        
                            <tr style='color:red'>
                                <td><?= $i++; ?></td>
                                <td><?= $row["purchase_date"]; ?></td>
                                <td><?= $row["issued_date"]; ?></td>
                                <td><?= $status ?></td>
                                <td><?= $row["purchasedby"]; ?></td>
                                <td> <?= $row["fullname"]; ?></td>
                                <td><?= "<span class='unselectable'>WJCW CF-</span>" . $row["token"]; ?></td>
                                <td>£12</td>
                                <td><button class="btn btn-danger btn_delete" id="<?php echo $row['id']; ?>">DELETE</button></td>
                            </tr>    
                        <?php  } ?>

                        </tbody>    
                    </table>
    </div>

    </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
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
});
</script>