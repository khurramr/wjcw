<style>
    .a_collapses:hover{background-color: green; border-radius: 10px;  color:white; transition-duration: .80s}    
    .a_collapses{font-size:95%; width:27%}

    .bold {font-weight: bold;}
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
	td:nth-of-type(1):before { content: "Sender Id"; }
	td:nth-of-type(2):before { content: "Sender Name"; }
	td:nth-of-type(3):before { content: "Amount"; }
	td:nth-of-type(4):before { content: "Method of Payment"; }
	td:nth-of-type(6):before { content: "Gift Donation Date"; }
}
</style>                    
        <div class="container-fluid">
          <div class="card">
              <div class="card-header">
                <h class="card-title h_fonts h_color">GIFTS/DONATIONS RECEIVED STAGES</h>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id="accordion">
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseOne" id="a_collapseOne">
                          <div class="row">
                        <div class="col-md-9">&nbsp;STAGE 01 £20</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level1 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level1)){

                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseTwo" id="a_collapseTwo">
                          <div class="row">
                        <div class="col-md-9">&nbsp;STAGE 02 £40</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level2 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level2)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>                                    
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseThree" id="a_collapseThree">
                          <div class="row">
                        <div class="col-md-9">STAGE 03 £100</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level3 > 0){
                                echo "<span class='badge badge-success btn-lg' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level3)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseFour" id="a_collapseFour">
                          <div class="row">
                        <div class="col-md-9">STAGE 04 £250</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level4 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level4)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseFive" id="a_collapseFive">
                          <div class="row">
                        <div class="col-md-9">STAGE 05 £500</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level5 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level5)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseSix" id="a_collapseSix">
                          <div class="row">
                        <div class="col-md-9">STAGE 06 £1000</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level6 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level6)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>                  
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseSeven" id="a_collapseSeven">
                          <div class="row">
                        <div class="col-md-9">STAGE 07 £2000</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level7 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level7)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>                                        
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseEight" id="a_collapseEight">
                          <div class="row">
                        <div class="col-md-9">STAGE 08 £4000</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level8 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseEight" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level8)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>                                            
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseNine" id="a_collapseNine">
                          <div class="row">
                        <div class="col-md-9">STAGE 09 £8000</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level9 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseNine" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level9)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>                                              
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseTen" id="a_collapseTen">
                          <div class="row">
                        <div class="col-md-9">STAGE 10 £16000</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level10 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseTen" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level10)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>                                                     
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title w-100 h_fonts">
                        <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseEleven" id="a_collapseEleven">
                          <div class="row">
                        <div class="col-md-9">STAGE 11 £32000</div>
                        <div class="col-md-3">
                            
                            <?php 
                            
                            if ($status_level11 > 0){
                                echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                            }else{
                                echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                            }
                            
                            ?>
                        </div>
                         </div>
                          </a>
                      </h1>
                    </div>
                    <div id="collapseEleven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                         <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th>Sender ID</th>    
                            <th>Sender Name</th>    
                            <th>Amount</th>    
                            <th>Method of Payment</th>    
                            <th>Gift Donation Date</th>    
                                
                        </thead>
                        <tbody>
                         <?php 
                            while($row = mysqli_fetch_assoc($result_level11)){
                         ?>
                                <tr>
                                    <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                    <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                    <td><?php echo "£".$row["amount"] ?></td>
                                    <td><?php echo $row["method_of_payment"] ?></td>
                                    <td><?php echo $row["dated"] ?></td>
                                    
                                </tr>    
                         <?php } ?>
                        </tbody>    
    
                    </table>
                    </div>
                    </div>
                  </div>     
                  <div class="card">
                            <div class="card-header">
                              <h1 class="card-title w-100 h_fonts">
                                <a class="d-block  a_collapses" data-toggle="collapse" href="#collapseTwelve" id="a_collapseTwelve">
                                  <div class="row">
                                <div class="col-md-9">STAGE 12 £64000</div>
                                <div class="col-md-3">

                                    <?php 

                                    if ($status_level12 > 0){
                                        echo "<span class='badge badge-success' style='font-size:95%'>Active</span>";        
                                    }else{
                                        echo "<span class='badge badge-danger' style='font-size:95%'>Inactive</span>";
                                    }

                                    ?>
                                </div>
                                 </div>
                                  </a>
                              </h1>
                            </div>
                            <div id="collapseTwelve" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                 <table id="received_history" class="table  display table-hover text-center">
                                <thead>
                                    <th>Sender ID</th>    
                                    <th>Sender Name</th>    
                                    <th>Amount</th>    
                                    <th>Method of Payment</th>    
                                    <th>Gift Donation Date</th>    
                                        
                                </thead>
                                <tbody>
                                 <?php 
                                    while($row = mysqli_fetch_assoc($result_level12)){
                                 ?>
                                        <tr>
                                            <td><?php echo $row["member_id"] ?><a href=""></a></td>
                                            <td><?php echo $row["first_name"]." " . $row["last_name"] ?> </td>
                                            <td><?php echo "£".$row["amount"] ?></td>
                                            <td><?php echo $row["method_of_payment"] ?></td>
                                            <td><?php echo $row["dated"] ?></td>
                                            
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