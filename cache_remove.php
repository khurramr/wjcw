<?php 
include("db/connect.php");
$select = "SELECT * FROM cache";
$result = mysqli_query($link, $select);
$row = mysqli_fetch_assoc($result);
if ($row['status'] == 1 ) {
?>
<script>
window.location.reload(true);
window.location.href = window.location.href    
</script>
<?php
$update = "UPDATE cache SET status = 0";
mysqli_query($link, $update);
}

?>