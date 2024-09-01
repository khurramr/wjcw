
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-md">
                <form class="form-horizontal" id='form_join_us'>
                    <fieldset>
                        <legend class="text-left header text-success"><h4>CHANGE PASSWORD</h4></legend>
                     <div class="row">   
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o bigicon"  style="color:#00b33c"></i></span>
                                 </div>
                                 <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" disabled>
                            </div>
                                <span id="email_span" class="text-danger span_alert" class="required">Enter Email</span>                                
                                <span id="duplicate_email_span" class="text-danger span_alert" >Email Already Registered !</span>                                
                        </div>
                        </div>
                        </div>                        
                    
                     <div class="row">   
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock bigicon"  style="color:#00b33c"></i></span>
                                 </div>
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                            </div>
                                <span id="password_span" class="text-danger span_alert">Enter Password</span>
                        </div>
                        </div>
                        </div>
                     <div class="row">                           
                        <div class="col-md-4  mt-2">
                        <div class="form-group">
                            <label for="" class="required">Confirm Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock bigicon"  style="color:#00b33c"></i></span>
                                 </div>
                                <input id="cpassword" name="cpassword" type="password" placeholder="Confirm Password" class="form-control">

                            </div>
                                <span id="cpassword_span" class="text-danger span_alert">Enter Confirm Password</span>
                        </div>
                        </div>
                      </div>
                          <br>
                          <div class="row">
                          <div class="col-md-3">
                                <button id="submit" type="submit" class="btn btn-success btn-lg ml-2" style="background-color:green">Change Password</button>
                            </div>
                          </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>