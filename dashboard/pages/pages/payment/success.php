<?php 
    include("../../session_login.php");
    include("../../../db/connect.php");

    $select = "select * from token_purchased_online where memberid = '$member_id'";
    $result = mysqli_query($link, $select);              
    $row = mysqli_fetch_assoc($result);
            $token_nos = $row['no_of_tokens'];
                $i = 1;
                    while($i <= $token_nos){
                        $i++;
                        $token = strtoupper(substr(md5(time(). $fullname . $i), 0, 14));
                        $Insert = "INSERT INTO token_purchase_temp(token, memberid, status, bank_key)
                                VALUES('$token', '$member_id', '1', 'purchased')";
                                mysqli_query($link, $Insert);

                    }

    $select = "INSERT INTO token_purchase Select * From token_purchase_temp";
    mysqli_query($link, $select);
    $delete = "DELETE FROM token_purchase_temp where memberid = '$member_id'";
    mysqli_query($link, $delete);

?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<p>A verfication email with <b><?= $token_nos ?> </b>generated tokens has been sent to the   <?= $row['email'] ?></p>


<script>
$(document).ready(function(){

var memberid = '<?= $member_id; ?>';
var fullname = '<?= $fullname; ?>';
var email = '<?= $row['email']; ?>';
var token_nos = '<?= $token_nos ?>';
    $.ajax({
            url:"../../../ajax/send_token_generated_email.php",
            method:"POST",
            data:{memberid:memberid, fullname:fullname, email:email, token_nos:token_nos},
                    success:function(data, success){
                        alert(data);
                    }    
    })
})
    
</script>

</body>
</html>




<?php
    
//header("Refresh: 9; https://www.wjcwcf.com/dashboard/pages/tokens/registered_tokens.php");
    header("Refresh: 35; http://localhost/site/dashboard/pages/tokens/registered_tokens.php");
 ?>
