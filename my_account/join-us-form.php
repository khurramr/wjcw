
<?php 
if (isset($_SESSION["tokenNumber"])) {
    $tokenNumber = $_SESSION["tokenNumber"];
    $_SESSION["tokenNumber"] = "";
} else {
    $tokenNumber = "";
};
?>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-md">
                <form class="form-horizontal" id='form_join_us'>
                    <fieldset>
                        <legend class="text-left header text-success"><h4>GENERAL INFORMATION</h4></legend>
                     <div class="row">   
                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="required">Enter Sponser Id:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key bigicon"></i></span>
                                 </div>
                                <input id="member_id" name="member_id" type="text" placeholder="sponser Id" class="form-control" maxlength="12" 
                                value="<?php if(isset($_SESSION['member_id'])){echo $_SESSION['member_id'];} ?>">
                            </div>
                                <span id="member_id_span" class="text-danger span_alert">Sponser Id is not valid!</span>
                        </div>
                        </div>
                        <div class="col-md-4" id="col-token" style="display:none">
                            <div class="form-group">
                                <label for="" class="required">Token:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-key bigicon" ></i></span>
                                    </div>
                                    <input id="token_no" name="token_no" type="text" value="<?php echo $tokenNumber?>" placeholder="Enter Token Number" class="form-control" maxlength="255">
                                </div>
                                    <span id="token_no_span" class="text-danger span_alert">Enter Token Number</span>
                                    <span id="token_no_span2" class="text-danger span_alert">Token Number Not Valid!</span>
                            </div>
                        </div>
                        <div class="col-md-4 purchase-token-btn"  >
                            <a href="../dashboard/pages/tokens/purchase_token.php?is_visitor=true">
                            <button type="button" class="btn btn-success btn-lg ml-2" >Purchase Token</button>
                            </a>
                        </div>
                        </div>
                        
                     <div class="row">   
                        <div class="col-md-4 mt-2">
                        <div class="form-group">
                            <label for="" class="required">First Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon" ></i></span>
                                 </div>
                                 <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                                <span id="fname_span" class="text-danger span_alert">Enter First Name</span>
                        </div>
                        </div>
                        <div class="col-md-4  mt-2"> 
                        <div class="form-group">
                            <label for="" class="required">Last Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon" ></i></span>
                                 </div>
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                                <span id="lname_span" class="text-danger span_alert">Enter Last Name</span>                                
                        </div>
                        </div>
                        </div>
                     <div class="row">   
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock bigicon" ></i></span>
                                 </div>
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                            </div>
                                <span id="password_span" class="text-danger span_alert">Enter Password</span>
                        </div>
                        </div>
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Confirm Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock bigicon" ></i></span>
                                 </div>
                                <input id="cpassword" name="cpassword" type="password" placeholder="Confirm Password" class="form-control">

                            </div>
                                <span id="cpassword_span" class="text-danger span_alert">Enter Confirm Password</span>
                        </div>
                        </div>
                        </div>
                        
                        
                     <div class="row">   
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o bigicon" ></i></span>
                                 </div>
                                 <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                                <span id="email_span" class="text-danger span_alert" class="required">Enter Email</span>                                
                                <span id="duplicate_email_span" class="text-danger span_alert" >Email Already Registered !</span>                                
                        </div>
                        </div>
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Confirm Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o bigicon" ></i></span>
                                 </div>
                                <input id="cemail" name="confirm_email" type="text" placeholder="Confirm Email Address" class="form-control">
                            </div>
                                <span id="cemail_span" class="text-danger span_alert required">Enter Confirm Email</span>                                
                        </div>
                        </div>
                        </div>
                        <div class="row">   
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Contact Number:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone-square bigicon" ></i></span>
                                 </div>
                                 <input id="phone" name="phone" type="text" placeholder="Phone / Cell" class="form-control">
                            </div>
                                <span id="phone_span" class="text-danger span_alert">Enter Contact Number</span>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-8 mt-4">
                                <strong style="color:green">Activity Information</strong>                           
                         </div>
                        <div class="col-md-8">
                                <strong class="required" style="color:purple">Licensing Fee:</strong>                           
                         </div>
                         
                        <div class="form-check">
                        <div class="col-md-8">
                            <input type="checkbox" class="form-check-input" id="check_licensing_fee" value="12">
                            <label class="form-check-label" for="exampleCheck1">£12 every year</label>
                        </div>
                        </div>                        
                        <div class="col-md-8">
                        <span id="check_licensing_fee_span" class="text-danger span_alert required">Please select licensing fee</span>
                        </div>                        
                        <div class="col-md-8">
                                <strong style="color:purple" class="required">Gift /Donation Levels:</strong>                           
                         </div>
                           
                        <div class="form-check">
                           <div class="col-md-12">
                            
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="20"> £20
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="40"> £40
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="100"> £100
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="250"> £250
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="500"> £500
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="1000"> £1000
                            </label>
                             <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="200"> £2000
                            </label>
                            
                         </div>
                         </div>
                         
                        <div class="form-check">
                        <div class="col-md-12">
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="4000"> £4000
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="8000"> £8000
                            </label>

                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="16000"> £16000
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="32000"> £32000
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="check_donation" value="64000"> £64000
                            </label>
                            </div>
                        </div>  
                        <div class="col-md-9">
                        <span id="check_donation" class="text-danger span_alert">Please select donation</span>
                         </div>
                        <div class="col-md-9">
                        <strong style="color:purple">Please note: Every member starts of first level. It is yor choice to gift/donate on one or multiple levels, but it is important to go throught each level step-by-step.
                        </strong>
                         </div> 
                          <br>
                          <div class="row">
                          <div class="col-md-3">
                                <button id="submit" type="submit" class="btn btn-success btn-lg ml-2" style="background-color:green">Move to Next Step</button>
                            </div>
                          </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>