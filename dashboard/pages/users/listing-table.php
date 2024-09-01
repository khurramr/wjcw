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
	td:nth-of-type(1):before { content: "No."; }
	td:nth-of-type(2):before { content: "Generate Date"; }
	td:nth-of-type(3):before { content: "Issue Date"; }
	td:nth-of-type(4):before { content: "Status"; }
	td:nth-of-type(5):before { content: "ID"; }
	td:nth-of-type(6):before { content: "Name"; }
	td:nth-of-type(7):before { content: "Token"; }
	td:nth-of-type(8):before { content: "Fee"; }
}
</style>
                       
   <div class="card">
    <div class="card-header" id="headingOne">

        <h1 class="h_fonts h_color resizeable_h" ><?= $fullname; ?> VALID TOKEN(s) DETAIL</h1>
    </div>

    <div class="card-body">                    
                   <table id="received_history" class="table  display table-hover text-center" style="font-size:90%">
                        <thead>
                            <th>Email</th>    
                            <th>First Name</th>    
                            <th>Last Name</th>
                            <!-- <th>IsAdmin</th>        -->
                        </thead>
                        <tbody>
                        
                        <?php
                            $sql = "SELECT
                                    member_registration.email,
                                    member_registration.first_name,
                                    member_registration.last_name
                                    From
                                    member_registration 
                                    LEFT JOIN user_type ON member_registration.user_type_key = user_type.id
                                    ORDER BY user_type.name";
                            $result = mysqli_query($link, $sql);
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                // $status = $row['status'];
                                // if($row['status'] == 1){
                                //     $status = 'Active';
                                // }else{
                                //     $status = 'Invalid';
                                // }
                        ?>        
                            <tr>
                                <td><?= $row["email"]; ?></td>
                                <td><?= $row["first_name"]; ?></td>
                                <td><?= $row["last_name"]; ?></td>
                                <!-- <td><input type="checkbox"/></td> -->
                            </tr>    
                        <?php  } ?>

                        </tbody>    
                    </table>
    </div>

    </div>
    
<script>
    $('.display').DataTable({
        "ordering": false,
          "pageLength": 25

    });

</script>