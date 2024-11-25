   <div class="container">
    <!-- For demo purpose -->
    <div class="row">
        <div class="col-md-12 mx-auto text-center">
<!--            <h2 class="display-6" id="main_heading">STAGE 01 £20</h2>-->
<!--
                    <div class="btn-group">
                      <button class="btn btn-success btn-size">Give Gift/Donation £20</button>
                      <button class="btn btn-success btn-size">You receive £60</button>
                      <button class="btn btn-success btn-size">To open next level £40</button>
                      <button class="btn btn-success btn-size">Remaining Amount £20</button>
                      <button class="btn btn-success btn-size">You Give WJCW £10</button>
                      <button class="btn btn-success btn-size">You keep Net Profit £10</button>
                    </div>
-->
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active"> 
<!--                            <i class="fas fa-credit-card mr-2"></i>-->
<img src="../../dist/img/credit/mastercard.png" alt="" class="brand-image img-circle elevation-3" style=" width:30%; border-radius:50%" >                            
                             Credit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link"> 
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
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-success btn-block shadow-sm"> Confirm Payment </button>

                        </div>
                        </form>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-success "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
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
                            <p> <button type="button" class="btn btn-success "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
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
                            <p> <button type="button" class="btn btn-success"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>