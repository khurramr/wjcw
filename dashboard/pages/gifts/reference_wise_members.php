<style>
    .bold {font-weight: bold}
    table { 
  width: 100%; 
  border-collapse: collapse; 
}
    .td_h {background: #5bc0de}    
    .td_h1 {background: #5cb85c}    

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
	td:nth-of-type(1):before { content: "Recipient ID"; }
	td:nth-of-type(2):before { content: "Recipient Name"; }
	td:nth-of-type(3):before { content: "Account Tracking"; }
	td:nth-of-type(4):before { content: "Method of Payment"; }
	td:nth-of-type(5):before { content: "Amount"; }
	td:nth-of-type(6):before { content: "Date"; }
	td:nth-of-type(7):before { content: "Remarks"; }
}
</style>                    
                    
                    
<div class="container" id="recipient_detail" style="display:none">

  <div class="card">
<!--    <div class="card-header">Header</div>-->
    <div class="card-body">
        <button class="btn btn-success" style="background-color:purple; border-radius: 50px;">Click on Recepient ID to check the details</button>                    
                   <table id="members" class="table  display table-hover text-center">
                        <thead>
                            <th >Recipient ID</th>    
                            <th>Recipient Name</th>    
                            <th>Method of Payment</th>    
                            <th>Amount</th>    
                            <th>Date</th>    
                        </thead>
                        
                        <tbody>
                     <?php
                        $sql = "Select * from member_registration where member_id = $member_id";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $sponser_reference = $row['sponser_reference'];
                            
                        $sql = "SELECT * FROM gift_donation_transactions WHERE sent_by = $member_id and received_by = $sponser_reference";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $verified = $row['verified'];    
                        $sql = "SELECT
                                member_registration.member_id,
                                member_registration.first_name,
                                member_registration.last_name,
                                payment_methods.service_provider_type,
                                member_registration.gift_donation_amount,
                                member_registration.dated
                                FROM
                                member_registration
                                LEFT OUTER JOIN payment_methods ON member_registration.member_id = payment_methods.memberid
                                WHERE
                                member_registration.member_id = $sponser_reference LIMIT 1";
                           $result = mysqli_query($link, $sql);
                           while($row = mysqli_fetch_assoc($result)){
                       ?>
                           
                            <tr>
                                <td class="member_id" id="<?php echo $row["member_id"]; ?>">
                                <?php if($verified == 0){ ?>
                                <a href='' data-toggle='modal' data-target='#recipient_modal' style='color:red; font-weight:bold'>
                                <?php echo $row["member_id"]; ?>
                                </a>
                                <?php } else{ ?>
                                <a href='' data-toggle='modal' data-target='#recipient_modal' style='color:green; font-weight:bold'>
                                    <?php echo $row["member_id"]; ?>
                                </a>
                                <?php } ?>
                                </td>
                                <td><?php echo $row["first_name"]. " " . $row["last_name"] ?></td>
                                <td><?php echo $row["service_provider_type"]; ?></td>
                                <td><?php echo "£" . $row["gift_donation_amount"]; ?></td>
                                <td><?php echo $row["dated"]; ?></td>
                            </tr>    

                     <?php
                        }
                        $sql = "Select * from member_registration where member_id = $member_id";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $sponser_reference = $row['sponser_reference'];    
                           $sql = "SELECT
                                    member_registration.member_id,
                                    member_registration.first_name,
                                    member_registration.last_name,
                                    gift_donation_transactions.amount as gift_donation_amount,
                                    gift_donation_transactions.dated,
                                    gift_donation_transactions.verified,
                                    gift_donation_transactions.sent_by,
                                    gift_donation_transactions.received_by,
                                    payment_methods.service_provider_type
                                    FROM
                                    member_registration
                                    INNER JOIN gift_donation_transactions ON member_registration.member_id = gift_donation_transactions.received_by
                                    LEFT OUTER JOIN payment_methods ON gift_donation_transactions.received_by = payment_methods.memberid
                                    WHERE gift_donation_transactions.sent_by = $member_id AND gift_donation_transactions.received_by <> $sponser_reference LIMIT 1";
                           $result = mysqli_query($link, $sql);
                           while($row = mysqli_fetch_assoc($result)){
                       ?>
                           
                            <tr>
                                <td class="member_id" id="<?php echo $row["member_id"]; ?>">
                                <?php if($verified == 0){ ?>
                                <a href='' data-toggle='modal' data-target='#recipient_modal' style='color:red; font-weight:bold'>
                                <?php echo $row["member_id"]; ?>
                                </a>
                                <?php } else{ ?>
                                <a href='' data-toggle='modal' data-target='#recipient_modal' style='color:green; font-weight:bold'>
                                    <?php echo $row["member_id"]; ?>
                                </a>
                                <?php } ?>
                                </td>
                                <td><?php echo $row["first_name"]. " " . $row["last_name"] ?></td>
                                <td><?php echo $row["service_provider_type"]; ?></td>
                                <td><?php echo "£" . $row["gift_donation_amount"] / 2; ?></td>
                                <td><?php echo $row["dated"]; ?></td>
                            </tr>    
                        <?php } ?>
                        
                        
                        </tbody>    
                    </table>
    </div> 
<!--    <div class="card-footer">Footer</div>-->
  </div>
</div>



<!-- Modal -->

<div class="modal fade bd-example-modal-lg" id="recipient_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="recipientModalLongTitle" style="color:green">RECIPIENT DETAIL</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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
                    <tr class="tr_class">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                  <br>
                   <table id="members2" class="table  display table-hover text-center">
                  <thead>
                      <th class="td_h1">Bank Name</th>
                      <th class="td_h1">Account #</th>
                      <th class="td_h1">Remarks</th>
                  </thead>
                  <tbody>
                    <tr class="tr_class">
                      <td>HSBCUK</td>
                      <td>GB42HBK30053022910114</td>
                      <td> International Account Number</td>
                    </tr>
                  </tbody>
                </table>
        <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
       </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    $(".member_id").click(function(){
        var member_id = $(this).attr("id");
        $.ajax({
            url:"../../../ajax/send_gift_donation_member_detail.php",
            method:"post",
            data:{member_id:member_id},
            success:function(data,success){
                $("#modal_table").html(data);
            }                
        })

    })
    
    
    $('#members').DataTable({
        "ordering": false
    });
});
</script>