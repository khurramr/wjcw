<?php
include("../db/connect.php");
$member_id = $_POST['member_id'];

$sql = "SELECT * FROM member_registration where member_id = '$member_id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>


   <div class="container" >
    <div class="row" id="contact_us_form">
        <div class="col-md-8">
            <div class="well well-sm">
                <form class="form-horizontal">
                    <fieldset>
                        <legend class="text-left header">Contact us</legend>

                        <div class="form-group col-md-8">
                            <label for="" class="required">Member Id:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key bigicon" style="color:#00b33c"></i></span>
                                </div>    
                                <input id="member_id" name="member_id" type="number" placeholder="Member Id" class="form-control" value='<?php echo $row['member_id']; ?>'>
                            </div>
                                <span id="member_id_span" class="text-danger span_alert">Enter Member Id</span>                                
                            </div>
                        <div class="form-group col-md-8 text-center" style='display:none' id='wait'>                           
                            <div class="spinner-border" role="status">
                              <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        
                                                
                                                                                                
                        
                        <div class="form-group col-md-8">
                            <label for="" class="required">First Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user bigicon" style="color:#00b33c"></i></span>
                                </div>    
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control" value='<?php echo $row['first_name']; ?>'>
                            </div>
                                <span id="fname_span" class="text-danger span_alert">Enter First Name</span>                                
                            </div>
                        
                        
                        <div class="form-group col-md-8">
                            <label for="" class="required">Last Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user bigicon" style="color:#00b33c"></i></span>
                                </div>    
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control" value='<?php echo $row['last_name']; ?>'>
                                </div>
                                <span id="lname_span" class="text-danger span_alert">Enter Last Name</span>                            
                            
                        </div>

                        <div class="form-group col-md-8">
                            <label for="" class="required">Email:</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope-o bigicon" style="color:#00b33c"></i></span>
                            </div>
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" value='<?php echo $row['email']; ?>'>
                            </div>    
                                <span id="email_span" class="text-danger span_alert">Enter Email</span>                            
                        </div>
                        

                        <div class="form-group col-md-8">
                            <label for="" class="required">Phone Number:</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone-square bigicon" style="color:#00b33c"></i></span>
                            </div>    
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control" value='<?php echo $row['contact_no_1']; ?>'>
                            </div>                                
                                <span id="phone_span" class="text-danger span_alert">Enter Contact Number</span>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="" class="required">Message:</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-pencil-square-o bigicon" style="color:#00b33c"></i></span>
                                </div>    
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you soon." rows="6" required></textarea>
                                </div>
                                <span id="message_span" class="text-danger span_alert">Enter Message</span>
                            </div>
                    </fieldset>
                    <div class="form-group col-md-9 float-right">
                        <button type="button" class="btn btn-success btn-lg" id="submit">Submit</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>
</div>

<script>
$('#member_id').on('input', function() {
var member_id = $("#member_id").val();
var count_length =  member_id.length;
if(count_length >= 5){
$("#wait").show();
$.ajax({
    url:"../ajax/contactus-member_verify.php",
    method:"post",
    data:{member_id:member_id},
    success:function(data,success){
        $("#contact_us_form").html(data);
        $("#message").focus();
        $("#wait").hide();        
    }           
})

}else{
return false;
}    
    
})    
    
$("#submit").click(function(){
event.preventDefault();
var firstname = $("#fname").val();
var lastname = $("#lname").val();
var member_id = $("#member_id").val();
var email = $("#email").val();
var contactno = $("#phone").val();    
var message = $("#message").val();    
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;    
if(!emailReg.test(email)){
    $("#email_err").hide();
    $("#email_span").hide();
     $("#email").after('<span class="text-danger" id="email_err">Enter a valid email address.</span>');
    return false;
}else{
    $("#email_err").hide();
}

if (firstname == ""){
    $("#fname_span").show()
}else{
    $("#fname_span").hide()
}

if (lastname == ""){
    $("#lname_span").show()
}else{
    $("#lname_span").hide()
}    
    
if (email == ""){
    $("#email_span").show()
}else{
    $("#email_span").hide()
}
if (member_id == ""){
    $("#member_id_span").show()
}else{
    $("#member_id_span").hide()
}
    
if (contactno == ""){
    $("#phone_span").show()
}else{
    $("#phone_span").hide()
}

if ($("#message").val().trim() == ""){
    $("#message_span").show()
}else{
    $("#message_span").hide()
}
    
if($("#message").val().trim() == ""){
    return false;
}
    
if(member_id == "" || firstname == "" || lastname == "" || email == "" || contactno == "" || $("#message").val().trim() == ""){
    return false;
}   
    
swal({
  title: "SEND",
  text: "Do you want to send the message ?",
  icon: "info",
  buttons: true,
})
.then((willSave) => {
  if (willSave) {    
    $.ajax({
            url:"../ajax/contactus-message-add.php",
            method:"POST",
            data:{member_id:member_id, message:message},
                    success:function(data, success){
                    if(data == 0){
                       swal("Your entered wrong member id !", {
                          icon: "error",
                        });
                    }else{
                    $("#response").html(data);
                        $("#message").val("");
                        
                       swal("Your message has been sent!", {
                          icon: "success",
                        });
                        
                    }
                    }
})
      
  }      
      
});
});
    
</script>