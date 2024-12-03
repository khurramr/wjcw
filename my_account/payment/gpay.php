<?php 
 include("../../../db/configuration.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Pay</title>
  
  <!-- Remove async to load synchronously -->
  <script src="https://pay.google.com/gp/p/js/pay.js"></script>
</head>
<body>
  <div id="container">
    <?php if(isset($_SESSION['member_id'])){?>
    <div class="row mb-3">
        <div class="col-sm-4 font-weight-bold">Name:</div>
        <div class="col-sm-8"><?= $_SESSION['fullname']; ?></div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-4 font-weight-bold">Member Id:</div>
        <div class="col-sm-8"><?= $_SESSION['member_id']; ?></div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-4 font-weight-bold">Amount:</div>
        <div class="col-sm-8" id="amount_show_gpay">£0</div>
    </div>
    <?} else{?>
    <div class="row mb-3">
        <div class="col-sm-4 font-weight-bold">Name:</div>
        <div class="col-sm-8 gpay_name" id="gpay_name"></div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-4 font-weight-bold">Email</div>
        <div class="col-sm-8 gpay_email" id="gpay_email"></div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-4 font-weight-bold">Amount:</div>
        <div class="col-sm-8" id="amount_show_gpay">£0</div>
    </div>
    <?} ?>
  </div>
  
  <script type="text/javascript">
    // Wait until the Google Pay API script has loaded before proceeding
    if (typeof google !== 'undefined' && google.payments && google.payments.api) {
      // Google Pay API is available, proceed with initialization
      const paymentsClient = new google.payments.api.PaymentsClient({
        environment: '<?= GPAY_ENV ?>', // 'PRODUCTION' for live transactions
      });

      // Check if Google Pay is available on the user's device
      function onGooglePayLoaded() {
        const isReadyToPayRequest = {
          apiVersion: 2,
          apiVersionMinor: 0,
          allowedPaymentMethods: [
            {
              type: 'CARD',
              parameters: {
                allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
                allowedCardNetworks: ['MASTERCARD', 'VISA']
              },
              tokenizationSpecification: {
                type: 'PAYMENT_GATEWAY',
                parameters: {
                  gateway: '<?= GPAY_PAYMENT_GATEWAY ?>', // Set your gateway
                  gatewayMerchantId: '<?= GPAY_MERCHANT_ID ?>'
                }
              }
            }
          ]
        };

        paymentsClient.isReadyToPay(isReadyToPayRequest).then(function(response) {
          if (response.result) {
            addGooglePayButton();
          }
        }).catch(function(err) {
          console.error('Google Pay initialization error', err);
        });
      }

      function addGooglePayButton() {
        const button = paymentsClient.createButton({
          onClick: onGooglePaymentButtonClicked
        });
        document.getElementById('container').appendChild(button);
      }
      function onGooglePaymentButtonClicked() {
        // var total_license_fee = '10'; // for test purpose only
        var total_license_fee = $("#f_amount").val();
        const paymentDataRequest = {
          apiVersion: 2,
          apiVersionMinor: 0,
          allowedPaymentMethods: [{
            type: 'CARD',
            parameters: {
              allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
              allowedCardNetworks: ['MASTERCARD', 'VISA']
            },
            tokenizationSpecification: {
              type: 'PAYMENT_GATEWAY',
              parameters: {
                gateway: '<?= GPAY_PAYMENT_GATEWAY ?>', // Set your gateway
                gatewayMerchantId: '<?= GPAY_MERCHANT_ID ?>'
              }
            }
          }],
          transactionInfo: {
            countryCode: 'GB',
            currencyCode: 'GBP',
            totalPriceStatus: 'FINAL',
            totalPrice: total_license_fee  // Update with actual amount
          },
          merchantInfo: {
            merchantName: '<?= GPAY_MERCHANT_NAME ?>'
          }
        };

        paymentsClient.loadPaymentData(paymentDataRequest).then(function(paymentData) {
          // Send payment data to your server for processing
          processPayment(paymentData);
        }).catch(function(err) {
          // swal("Enter Valid Number!", "VALID NUMBER REQURIED!", "error");
          console.error('Google Pay error', err);
        });
      }

      function processPayment(paymentData) {
        // Send tokenized payment data to the backend (PHP server)
        const paymentToken = paymentData;
        let paymentDataToSend = {
          token: paymentData  // Assuming `paymentData` is already defined earlier
        };

        // Check for each input field and add to the paymentData object if it exists
        var no_of_tokens = $("#f_token").val();
        if (no_of_tokens) {
          paymentDataToSend.no_of_tokens = no_of_tokens;
        }

        var memberid = $("#memberid").val();
        if (memberid) {
          paymentDataToSend.memberid = memberid;
        }

        var module_val = $("#module_name").val();
        if (module_val) {
          paymentDataToSend.module = module_val;
        }

        var total_license_fee = $("#f_amount").val();
        if (total_license_fee) {
          paymentDataToSend.amount = total_license_fee;
        }

        var is_visitor = $("#is_visitor").val();
        if (is_visitor) {
          paymentDataToSend.is_visitor = is_visitor;
        }
        
        var name = $('#name').val();
        if (name) {
          paymentDataToSend.name = name;
        }

        var email = $('#email').val();
        if (email) {
          paymentDataToSend.email = email;
        }

        fetch('../../../my_account/payment/process-payment.php', {  // Use relative URL
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(paymentDataToSend)
        })
        .then(response => response.json())
        .then(data => {
          if(data == 2){
            swal("Payment Successfull. Kindly check your email for further Details", {
                              icon: "success",
                              showConfirmButton: false
                            })
                            .then(response => {
                               $('#myModal').modal('hide');

                            }); 
          }
          else{
            swal("Payment Successfull.", {
                              icon: "success",
                              showConfirmButton: false
                            })
                            .then(response => {
                               $('#myModal').modal('hide');

                            });
          }
        
          console.log('Payment successful', data);
        })
        .catch(error => {
          console.error('Payment processing error', error);
        });
      }

      // Initialize Google Pay
      onGooglePayLoaded();
    } else {
      console.error('Google Pay API is not available.');
    }
  </script>
</body>
</html>
