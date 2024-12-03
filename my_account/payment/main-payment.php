<div class="container">
  <!-- For demo purpose -->
  <div class="row">
    <div class="col-md-12 mx-auto text-center">
    </div>
  </div> <!-- End -->
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card ">
        <div class="card-header">
          <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
            <!-- Credit card form tabs -->
            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
              <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link gpay active ">
                  <img src="../../dist/img/credit/gpay.png" style="width: 51px; height: 32px;"  alt="" class="brand-image img-circle elevation-3" style=" width:30%; border-radius:50%">
                  Google Pay </a> </li>
              <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link paypal">
                  <!--                            <i class="fas fa-mobile-alt mr-2"></i>-->
                  <img src="../../dist/img/credit/netbanking.jpg" alt="" class="brand-image img-circle elevation-3" style=" width:24%; border-radius:50%">
                  PayPal </a> </li>
            </ul>
          </div> <!-- End -->
          <!-- Credit card form content -->
          <div class="tab-content">
            <!-- credit card info-->
            <div id="credit-card" class="tab-pane fade pt-3 active show">
              <?php include("gpay.php") ; ?> 
            </div>
            <div id="paypal" class="tab-pane fade pt-3 ">
            <?php include("paypal.php") ; ?> 
            
            </div>
          </div> <!-- End -->
          <!-- Paypal info -->

          <!-- bank transfer info -->
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
</div>
