<script>
$(document).ready(function(){
  <?php if($_GET['status'] == 'success'){?>
    swal("Payment Successfull", {
                              icon: "success",
                              showConfirmButton: false
                            })
    <?php }
   elseif($_GET['status'] == 'success_outside'){?>
      swal("Payment Successfull. Kindly check your email for further Details", {
                                icon: "success",
                                showConfirmButton: false
                              })
      <?php }
    elseif($_GET['status'] == 'cancel'){ ?>
      swal("Transaction Canceled !", "", "error");
    <?php } ?>
});
</script>