<?php
include("../db/connect.php");
$i = 0;
$select = "SELECT * FROM token_purchase";
$result = mysqli_query($link, $select);
?>

                    <table class="table table-hover text-nowrap" id="token_purchase_table">
                          <thead>
                            <tr>
                              <th>Sr#</th>
                              <th>Token</th>
                              <th style="text-align:center">Annual fee</th>
                              <th style="width:10%">Purchase</th>
                              <th style="width:10%">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr class="tr_class">
                              <td><?php  echo $i = $i + 1; ?></td>
                              <td id="token_<?php echo $row["id"]; ?>">WJCW CF-<?php echo $row["token"]; ?></td>
                              <td style="text-align:center" id="annualfee_<?php echo $row["id"]; ?>" class="annual_fee">£<?php echo $row["annual_fee"]; ?></td>
                              <td><button class="btn btn-success btn-purchase" data-toggle="modal" id_btn="<?php echo $row["id"]; ?>" style="width:100%; height:auto;" <?php if($row["added"] == '1'){ ?> disabled <?php } ?>>Add</button></td>

                              <td><button class="btn btn-danger btn-delete" style="width:90%; height:auto" id_btn="<?php echo $row["id"]; ?>">Delete</button></td>
                            </tr>
                            <?php } ?>
                          </tbody>
                          <tfoot>
                   <?php
                    $i = 0;
                    $select = "SELECT SUM(annual_fee) as Total FROM token_purchase where added = '1'";
                    $result = mysqli_query($link, $select);
                    $row = mysqli_fetch_assoc($result);
                    $Total = $row["Total"];
                    ?>
                            <tr>
                              <th>Sr#</th>
                              <th>Total</th>
                              <th style="text-align:center"><?php echo '£'.$Total; ?></th>
                              <th ><a href="../payment/pay_payment.php" style="width:100%" class="btn btn-success"
                                   <?php if($Total>=1){?> enabled <?php } else{ ?> disabled <?php } ?>  
                                   >Proceed</a></th>
                              <th>Delete</th>
                            </tr>
    
                          </tfoot>
                          
                    </table>

             <script>
              
    
$(".btn-delete").click(function(){
var id = ($(this).attr("id_btn"));
$.ajax({
            url:"../../../ajax/token_delete.php",
            method:"post",
            data:{id:id},
                    success:function(data, success){
                   $("#token_purchase_table").html(data);  
                    
                    }   
})    
});
    
$(".btn-purchase").click(function(){
var id = ($(this).attr("id_btn"));
$.ajax({
            url:"../../../ajax/token_added.php",
            method:"post",
            data:{id:id},
                    success:function(data, success){
                   $("#token_purchase_table").html(data);  
                    }   
})    
});

</script>