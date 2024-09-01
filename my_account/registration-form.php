   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-md">
                <form class="form-horizontal" id='form_join_us'>
                    <fieldset>
                        <legend class="text-left header text-success text-center"><h2>CONFIRM GENERAL INFORMATION</h2></legend>
                     <div class="row">   
                        <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="required">First Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                 <input id="fname" name="name" type="text" placeholder="First Name" class="form-control" value='<?php echo $row['first_name']; ?>' disabled>
                            </div>
                                <span id="fname_span" class="text-danger span_alert">Enter First Name</span>
                        </div>
                        </div>
                        <div class="col-md-6  mt-2"> 
                        <div class="form-group">
                            <label for="" class="required">Last Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control" value='<?php echo $row['last_name']; ?>' disabled>
                            </div>
                                <span id="lname_span" class="text-danger span_alert">Enter Last Name</span>                                
                        </div>
                        </div>
                        </div>
                     <div class="row">   
                        <div class="col-md-6  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock bigicon"></i></span>
                                 </div>
                                <input id="password" name="password" type="text" placeholder="Password" class="form-control" value='<?php echo $row['password']; ?>' disabled>
                            </div>
                                <span id="password_span" class="text-danger span_alert">Enter Password</span>
                        </div>
                        </div>

                        <div class="col-md-6  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o bigicon"></i></span>
                                 </div>
                                 <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" value='<?php echo $row['email']; ?>' disabled>
                            </div>
                                <span id="email_span" class="text-danger span_alert" class="required">Enter Email</span>                                
                        </div>
                        </div>
                       
                        </div>
                        
                        
                        <div class="row">   
                        <div class="col-md-6  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Contact Number:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone-square bigicon"></i></span>
                                 </div>
                                 <input id="contact_no_1" name="phone" type="text" placeholder="Phone / Cell" class="form-control" value='<?php echo $row['contact_no_1']; ?>' disabled>
                            </div>
                                <span id="contact_no_1_span" class="text-danger span_alert">Enter Contact Number</span>
                        </div>
                        </div>
                        </div>
                          <div class="row">
                          <div class="col-md-6">
                                <!--<button id="btn_update_edit" type="submit" class="btn btn-primary btn-lg" style="background-color: purple">Update/Edit</button>-->
                                <button id="btn_confirm_proceed" type="submit" class="btn btn-success  btn-lg" style="background-color:green">Confirm and Proceed</button>
                                <button id="btn_cancel" type="submit" class="btn btn-danger btn-lg" style="background-color: red">Cancel</button>
                            </div>
                          </div>
                          <div class="row mt-2">
                          <div class="col-md-10">
                                <h4 style="color:green; display:none" id="confirm_email">A confirmation email has been sent to your email address</h4>
                            </div>
                          </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>