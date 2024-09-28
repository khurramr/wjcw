<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
<!--            <h1 class="display-6">WJCW CF Send Gifts / Donations</h1>-->
            <h1 class="display-6">PAYMENT SECTION (Total Tokens <?php echo $_GET['tokens'] ?>)</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" style="height: 56px; display: flex; align-items: center;" href="#credit-card" class="nav-link active "> 
<!--                            <i class="fas fa-credit-card mr-2"></i>-->
<div style="display: inline;">
<img src="../../dist/img/credit/mastercard.png" alt="" class="brand-image img-circle elevation-3" style="  margin-right: 5px; border-radius:50%" >                            
<img src="../../dist/img/credit/visa.png" alt="" class="brand-image img-circle elevation-3" style="  margin-right: 5px; border-radius:50%" >                            
<img src="../../dist/img/credit/american-express.png" alt="" class="brand-image img-circle elevation-3" style="  margin-right: 5px; border-radius:50%" >                            


</div>
<span>

Credit / Debit Card
</span> </a> </li>
<!--Paypal-->
<!--                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> -->
<!--                            <i class="fab fa-paypal mr-2"></i>-->
<!--<img src="../../dist/img/credit/paypal.png" alt="" class="brand-image img-circle elevation-3" style=" width:25%; border-radius:50%" >                            -->
<!--                              Paypal </a> </li>-->
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> 
<!--                            <i class="fas fa-mobile-alt mr-2"></i>-->
<img src="../../dist/img/credit/netbanking.jpg" alt="" class="brand-image img-circle elevation-3" style=" width:24%; border-radius:50%" >
                                                          Net Banking </a> </li>
                            
                            <li class="nav-item"> <a data-toggle="pill" href="#e-wallet" class="nav-link ">
<!--                             <i class="fas fa-mobile-alt mr-2"></i>-->
<img src="../../dist/img/credit/ewallet.png" alt="" class="brand-image img-circle elevation-3" style=" width:25%; border-radius:50%" >
                                                            E-Wallet </a> </li>
                            
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                          <div class="card-footer" style="text-align:center"> 
                                   <?php include("stripe_form.php"); ?>
                        </div>   
                        </form>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div>  
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>
                                <option>Bank 3</option>
                                <option>Bank 4</option>
                                <option>Bank 5</option>
                                <option>Bank 6</option>
                                <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option>
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <div id="e-wallet" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your E-Wallet</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Wallet--</option>
                                <option>Skrill</option>
                                <option>Neteller</option>
                                <option>Perfect Money</option>
                                <option>Bitcoint</option>
                                <option>Amzon Pay</option>
                                <option>Apple Pay</option>
                                <option>Citi Masterpass</option>
                                <option>Payoneer</option>
                                <option>WorldRemit</option>
                                <option>ecoPyaz</option>
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>