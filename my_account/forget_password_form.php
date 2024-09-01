
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-md">
                <form class="form-horizontal" id='form_join_us'>
                    <fieldset>
                        <legend class="text-left header text-success"><h4>ENTER YOUR ID</h4></legend>
                     <div class="row">   
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Member Id:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o bigicon"  style="color:#00b33c"></i></span>
                                 </div>
                                 <input id="memberid" name="memberid" type="text" placeholder="Member Id" class="form-control">
                            </div>
                               
                                <span id="memberid_span" class="text-danger span_alert" class="required">Enter Member Id</span>                                
                        </div>
                        </div>
                        </div>                        
                    
                     <div class="row">   
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o bigicon"  style="color:#00b33c"></i></span>
                                 </div>
                                 <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                               
                                <span id="email_span" class="text-danger span_alert" class="required">Enter Email</span>                                
                                <span id="email_err" class="text-danger span_alert" class="required">Enter Valid Email Address</span>                                
                        </div>
                        </div>
                        </div>                        
                    
                          <div class="row">
                          <div class="col-md-6">
                                <h5 id="email_link_verify" class="text-success" style='display:none'>Link has been sent to your email address</h5>
                                <h5 id="email_link_fail" class="text-danger" style='display:none'>Email could not be sent to the given address</h5>
                                <h5 id="email_link_fail2" class="text-danger" style='display:none'>Please enter the correct member id and email</h5>
                            </div>
                          </div>
                          <div class="row mt-2">
                          <div class="col-md-3">
                                <button id="submit" type="submit" class="btn btn-success btn-lg ml-2" style="background-color:green">SEND LINK</button>
                            </div>
                          </div>
                          
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>