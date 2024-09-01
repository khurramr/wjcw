<style>
table { 
  width: 100%; 
  border-collapse: collapse; 
}

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
	td:nth-of-type(1):before { content: "Sender ID"; }
	td:nth-of-type(2):before { content: "Sender Name"; }
	td:nth-of-type(3):before { content: "Gift Donation Amount"; }
	td:nth-of-type(4):before { content: "Method of Payment"; }
	td:nth-of-type(5):before { content: "Date"; }
	td:nth-of-type(6):before { content: "Remarks"; }
	td:nth-of-type(6):before { content: "Status"; }
}    
</style>                    
                    
                    
<div class="container">
 <h1>Stage 01 £20</h1>
  <div class="card">
<!--    <div class="card-header">Header</div>-->
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result_level_1)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
<!--    <div class="card-footer">Footer</div>-->
  </div>
  
  <h1>Stage 02 £40</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_2)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 03  £100</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_3)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 04  £250</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_4)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 05  £500</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_5)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 06  £1000</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_6)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 07  £2000</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_7)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 08  £4000</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_8)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 09 £8000</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_9)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 10 £16000</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_10)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 11 £32000</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_11)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
  <h1>Stage 12 £64000</h1>
  <div class="card">
    <div class="card-body">                    
                   <table class="table  table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Gift Donation Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Date</th>    
                                
                            <th>Status</th>    
                        </thead>
                        <tbody>
                               <?php while ($row = mysqli_fetch_assoc($result_level_12)){ ?>
                            <tr>
                            <td><?php  echo $row['member_id']; ?></td>
                            <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                            <td><?php  echo '£'.$row['amount']; ?></td>
                            <td><?php  echo $row['method_of_payment'] ?></td>
                            <td><?php  echo $row['dated'] ?></td>
                            <td>
                                <?php if($row['verified'] == 1){ ?>
                                <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                <?php } else{?>
                                    <button id="<?= $row['gdt_id']; ?>" btn_verified="<?= $row['verified']; ?>" class="btn btn-danger btn_verify">VERIFY</button>
                                <?PHP } ?>
                            </td>
                            </tr>
                            <?php } ?>    
                        </tbody>    
                    </table>
    </div> 
  </div>
  
</div>

