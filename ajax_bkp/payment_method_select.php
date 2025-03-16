<?php
$i = 0;
$select = "SELECT * FROM payment_methods where memberid = $member_id";
$result = mysqli_query($link, $select);
?>
               
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
<script>
$(".btn-edit").click(function(){
var id = $(this).attr("id_btn");
var member_id = <?php echo $member_id ?>;
var spt = $("#spt_" + id).text(); 
var spt = $("#spt_" + id).text(); 
var spn = $("#spn_" + id).text(); 
var acc = $("#acc_" + id).text(); 
var remark = $("#remark_" + id).text(); 
$("#spt_update").val(spt);
$("#spn_update").val(spn);
$("#acc_update").val(acc);
$("#remark_update").val(remark);
$("#row_id").val(id);
 $('#modal_edit').modal('show');
})

$("#save_edit").click(function(){
var sp_type = $("#spt_update").val();
var sp_name = $("#spn_update").val();
var account_no = $("#acc_update").val();
var remark = $("#remark_update").val();
var id =  $("#row_id").val();
var member_id = <?php echo $member_id ?>;    
$.ajax({
    url:"../../../ajax/payment_method_update.php",
    method:"post",
    data:{id:id, member_id:member_id, sp_type:sp_type, sp_name:sp_name, account_no:account_no, remark:remark},
    success:function(data, success){
        $("#payment_methods_table").html(data);          
        $("#saved").show().delay(1250).fadeOut(function(){
        });          
          
    }
})
})
    
$(".btn-delete").click(function(){
var id = ($(this).attr("id_btn"));
var member_id = <?php echo $member_id ?>;    
$.ajax({
            url:"../../../ajax/payment_method_delete.php",
            method:"post",
            data:{id:id, member_id:member_id},
                    success:function(data, success){
                   $("#payment_methods_table").html(data);  
                    
                    }   
})    
});

</script>