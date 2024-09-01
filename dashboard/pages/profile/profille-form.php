   <div class="">
    <div class="row">
        <div class="col-md-11">
            <?php
                  $sql = "SELECT
                        TIMESTAMPDIFF( YEAR, expiry_date, now() ) as _year
                        ,TIMESTAMPDIFF( MONTH, now(), expiry_date) % 12 as _month
                        ,FLOOR( TIMESTAMPDIFF( DAY, now(), expiry_date) % 30.4375 ) as _day from token_purchase where memberid = '$member_id' and issued_date is not null";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<strong class='h_color' style='float:right'>" . $row['_month'].  " Months " . $row['_day'] . " Days Left to Expire</strong>";
                        }
                  ?>
        </div>
        <div class="col-md-11">
            <div class="well well-md">
                          

                <form class="form-horizontal" id='form_join_us'>
                    <input type="hidden" name="update" />
                    <fieldset>
                        <legend class="text-left header text-success text-center"><h1><?= $fullname; ?> PROFILE</h1></legend>
                     <div class="row">   
                        <div class="col-md-4">
                        <div class="form-group">
                            <span class="label required" style="font-weight:bold">Member Id:</span>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key bigicon"></i></span>
                                 </div>
                                <input id="donorkey" name="donorkey" type="text" placeholder="User Key" class="form-control" maxlength="5" value="<?= $member_id; ?>" disabled>
                            </div>
                                <span style="display:none" id="donorkey_span" class="text-danger span_alert">Enter Key</span>
                        </div>
                        </div>
                        </div>
                        
                     <div class="row">   
                        <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="" class="required">First Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                 <input id="fname" name="firstName" type="text" placeholder="First Name" class="form-control" value="<?= $fname; ?>">
                            </div>
                                <span style="display:none" id="fname_span" class="text-danger span_alert">Enter First Name</span>
                        </div>
                        </div>
                        <div class="col-md-6  mt-2"> 
                        <div class="form-group">
                            <label for="" class="required">Last Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                <input id="lname" name="lastName" type="text" placeholder="Last Name" class="form-control" value="<?= $lname; ?>">
                            </div>
                                <span style="display:none" id="lname_span" class="text-danger span_alert">Enter Last Name</span>                                
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
                                <input id="password" name="password" type="text" placeholder="Password" class="form-control" value="<?= $password; ?>">
                            </div>
                                <span style="display:none" id="password_span" class="text-danger span_alert">Enter Password</span>
                        </div>
                        </div>
                        <div class="col-md-6  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o bigicon"></i></span>
                                 </div>
                                 <input id="email" name="email" type="text" value="<?= $email; ?>" placeholder="Email Address" class="form-control">
                            </div>
                                <span style="display:none" id="email_span" class="text-danger span_alert" class="required">Enter Email</span>                                
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
                                 <input id="contact_no_1" name="phone" type="text" placeholder="Phone / Cell" class="form-control" value="<?= $contact_no; ?>">
                            </div>
                                <span style="display:none" id="contact_no_1_span" class="text-danger span_alert">Enter Contact Number</span>
                        </div>
                        </div>
<!--
                        <div class="col-md-6  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Contact Number:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone-square bigicon"></i></span>
                                 </div>
                                 <input id="contact_no_2" name="phone" type="text" placeholder="Phone / Cell" class="form-control">
                            </div>
                                <span style="display:none" id="contact_no_2_span" class="text-danger span_alert">Enter Contact Number</span>
                        </div>
                        </div>
-->
                        </div>
                     <div class="row">   
                        <div class="col-md-12 mt-1">
                        <div class="form-group">
                            <label for="" class="required">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                 <input id="address_1" name="address_1" type="text" placeholder="Address" class="form-control" value="<?= $contact_no; ?>">
                            </div>
                                <span style="display:none" id="address_1_span" class="text-danger span_alert">Enter Address</span>
                        </div>
                        </div>
<!--
                        <div class="col-md-12  mt-1"> 
                        <div class="form-group">
                            <label for="" class="required">Address 2</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                <input id="address_2" name="address_2" type="text" placeholder="Address" class="form-control">
                            </div>
                                <span style="display:none" id="address_2_span" class="text-danger span_alert">Enter Address</span>                                
                        </div>
                        </div>
-->
                        </div>
                        
                     <div class="row">   
                        <div class="col-md-5 mt-1">
                        <div class="form-group">
                            <label for="" class="required">Country</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                 <input id="country" name="country" type="text" placeholder="Country Name" class="form-control" value="<?= $country; ?>">
                            </div>
                                <span style="display:none" id="country_span" class="text-danger span_alert">Select Coutry</span>
                        </div>
                        </div>
                        <div class="col-md-4  mt-1"> 
                        <div class="form-group">
                            <label for="" class="required">City</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                <input id="city" name="city" type="text" placeholder="city" class="form-control" value="<?= $city; ?>">
                            </div>
                                <span style="display:none" id="city_span" class="text-danger span_alert">City</span>                                
                        </div>
                        </div>
                        <div class="col-md-3  mt-1"> 
                        <div class="form-group">
                            <label for="" class="required">Zip</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bigicon"></i></span>
                                 </div>
                                <input id="city" name="zip" type="text" placeholder="Zip" class="form-control" value="<?= $zip_code; ?>">
                            </div>
                                <span style="display:none" id="zip_span" class="text-danger span_alert">Zip</span>                                
                        </div>
                        </div>
                        </div>
                         
                          <div class="row">
                          <div class="col-md-5">
                                <button id="btn_save" type="submit" class="btn btn-success btn-lg" style="background-color:green">SAVE</button>
                                <button id="btn_cancel" class="btn btn-danger btn-lg" style="background-color:darkred">CANCEL</button>
                            </div>
                          </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>