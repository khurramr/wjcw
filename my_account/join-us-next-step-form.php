   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-md">
                <form class="form-horizontal" id='form_join_us'>
                    <fieldset>
                        <legend class="text-left header text-success text-center"><h1>GENERAL INFORMATION</h1></legend>
                     <div class="row">   
                        <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="required">First Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                 <input id="fname" name="name" type="text" placeholder="First Name" class="form-control" value='<?php echo $row['first_name']; ?>'>
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
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control" value='<?php echo $row['last_name']; ?>'>
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
                                <input id="password" name="password" type="text" placeholder="Password" class="form-control" value='<?php echo $row['password']; ?>'>
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
                                 <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" value='<?php echo $row['email']; ?>'>
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
                                 <input id="contact_no_1" name="phone" type="text" placeholder="Phone / Cell" class="form-control" value='<?php echo $row['contact_no_1']; ?>'>
                            </div>
                                <span id="contact_no_1_span" class="text-danger span_alert">Enter Contact Number</span>
                        </div>
                        </div>
                        </div>
                     <div class="row">   
                        <div class="col-md-12 mt-1">
                        <div class="form-group">
                            <label for="" class="required">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                 <input id="address_1" name="address_1" type="text" placeholder="Address" class="form-control">
                            </div>
                                <span id="address_1_span" class="text-danger span_alert">Address Required</span>
                        </div>
                        </div>
                        </div>
                        
                     <div class="row">   
                        <div class="col-md-5 mt-1">
                        <div class="form-group">
                            <label for="" class="required">Country</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                 <input id="country" name="country" type="text" placeholder="Country" class="form-control">
                            </div>
                                <span id="country_span" class="text-danger span_alert">Select Coutry</span>
                        </div>
                        </div>
                        <div class="col-md-4  mt-1"> 
                        <div class="form-group">
                            <label for="" class="required">City</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                <input id="city" name="city" type="text" placeholder="city" class="form-control">
                            </div>
                                <span id="city_span" class="text-danger span_alert">City</span>                                
                        </div>
                        </div>
                        <div class="col-md-3  mt-1"> 
                        <div class="form-group">
                            <label for="" class="required">Zip</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                <input id="zip_code" name="zip_code" type="text" placeholder="Zip" class="form-control">
                            </div>
                                <span id="zip_span" class="text-danger span_alert">Zip</span>                                
                        </div>
                        </div>
                        </div>
                         
                          <div class="row">
                          <div class="col-md-5">
                                <button id="btn_confirm_proceed" type="submit" class="btn btn-success btn-lg" style="background-color: green">Update and Proceed</button>
                                <button id="btn_cancel" type="submit" class="btn btn-danger btn-lg" style="background-color: red">Cancel</button>
                            </div>
                          </div>
                          <div class="row mt-2">
                          <div class="col-md-10">
                                <h4 style="color:green; display:none" id="update_confirm">Your profile has been updated!</h4>

                            </div>
                          </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>