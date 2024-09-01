   <div class="container">
    <div class="row" id="contact_us_form">
        <div class="col-md-8">
            <div class="well well-sm">
                <form class="form-horizontal">
                    <fieldset>
                        <legend class="text-left header" style="color:#00b33c"><b>Contact Us</b></legend>

                        <div class="form-group col-md-8">
                            <label for="" class="required">Member Id:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key bigicon" style="color:#00b33c"></i></span>
                                </div>    
                                <input id="member_id" name="member_id" type="number" placeholder="Member Id" class="form-control">
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
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                                <span id="fname_span" class="text-danger span_alert">Enter First Name</span>                                
                            </div>
                        
                        
                        <div class="form-group col-md-8">
                            <label for="" class="required">Last Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user bigicon" style="color:#00b33c"></i></span>
                                </div>    
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                                </div>
                                <span id="lname_span" class="text-danger span_alert">Enter Last Name</span>                            
                            
                        </div>

                        <div class="form-group col-md-8">
                            <label for="" class="required">Email:</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope-o bigicon" style="color:#00b33c"></i></span>
                            </div>
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>    
                                <span id="email_span" class="text-danger span_alert">Enter Email</span>                            
                        </div>
                        

                        <div class="form-group col-md-8">
                            <label for="" class="required">Phone Number:</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone-square bigicon" style="color:#00b33c"></i></span>
                            </div>    
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
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