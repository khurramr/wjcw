<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .body-paypal {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container-payapl {
            /* max-width: 500px; */
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
         /* {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        } */
        .container-payapl .button-paypal {
            width: 100%;
            padding: 10px;
            background-color: #0070ba;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button-paypal:hover {
            background-color: #005f8b;
        }
        .message {
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #4CAF50;
            color: white;
        }
        .error {
            background-color: #f44336;
            color: white;
        }
        .amount-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
        }
        .amount-label {
            font-size: 16px;
            font-weight: normal;
            color: #333;
        }
        .amount-display {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body class="body-paypal">

    <div class="container-payapl">
        <h1>Pay with PayPal</h1>
        
        <form id="paypalForm"  action="../../../my_account/payment/paypal_payment.php" method="POST">
        <input type="hidden" value="" name="module" id="module"> 
        <?php if(isset($_SESSION['member_id'])){?>
        <div class="amount-container">
            <label for="amount" class="amount-label">Name :</label>
            <div class="amount-display" ><?= $_SESSION['fullname']; ?></div>
        </div>
        <div class="amount-container">
            <label for="amount" class="amount-label">Member Id:</label>
            <div class="amount-display" ><?= $_SESSION['member_id']; ?></div>
        </div>
        <div class="amount-container">
            <label for="amount" class="amount-label">Amount :</label>
            <div class="amount-display"  id="amount-display">£0</div>
        </div>
        <?} else{?>
            <div class="row mb-3">
                <div class="col-sm-4 font-weight-bold">Name:</div>
                <div class="col-sm-8 gpay_name" id="gpay_name"></div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 font-weight-bold">Email</div>
                <div class="col-sm-8 gpay_email" id="gpay_email" ></div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 font-weight-bold">Amount:</div>
                <div class="col-sm-8" id="amount-display">£0</div>
            </div>
            <input type="hidden" id="paypalHiddenName" name="name">
            <input type="hidden" id="paypalHiddenEmail" name="email">
        <?} ?>
            <!-- <label for="currency">Currency</label>
            <select id="currency" name="currency" required>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option> -->
                <!-- Add more currencies as needed -->
            <!-- </select> -->
            
            <button class="button-paypal" type="submit">Proceed to PayPal</button>
        </form>

        <!-- Success/Failure message -->
        <div id="message" class="message" style="display: none;"></div>
    </div>

    <script>
        // Handle form submission via AJAX
        // $('#paypalForm').submit(function(event) {
        //     event.preventDefault(); // Prevent normal form submission

        //     var amount = $('#f_amount').val();
        //     var currency = 'GBP';
            
        //     // Check if amount is valid
        //     if (!amount || amount <= 0) {
        //         $('#message').text("Please enter a valid amount").removeClass('success').addClass('error').show();
        //         return;
        //     }

        //     // Clear previous message
        //     $('#message').hide().removeClass('success error').text("");

        //     // Send AJAX request to the backend
        //     $.ajax({
        //         url: '../../../my_account/payment/paypal_payment.php',
        //         type: 'POST',
        //         data: {
        //             amount: amount,
        //             currency: currency
        //         },
        //         success: function(response) {
        //             var data = JSON.parse(response);
        //             if (data.status == 'success') {
        //                 window.location.href = data.redirect_url; // Redirect to PayPal for approval
        //             } else {
        //                 $('#message').text(data.message).removeClass('success').addClass('error').show();
        //             }
        //         },
        //         error: function() {
        //             $('#message').text("An error occurred. Please try again.").removeClass('success').addClass('error').show();
        //         }
        //     });
        // });

        $('.paypal').click(function() {
            CallPaypal();
        });
        $('#btn_proceed').click(function() {
            // alert("here");
            $(".nav-item.gpay").hide();
            setTimeout(function (){
                $('.paypal').trigger('click');
                }, 
                100);
            CallPaypal();
        });
        
       
        function CallPaypal(){
            var amount = $('#f_amount').val();
            $('#amount-display').text('£' + amount);
            var module_name = $('#module_name').val();
            var paypalHiddenName = $("#hiddenName").val();
            if (paypalHiddenName) {
                $('#paypalHiddenName').val(paypalHiddenName);
            }
            var paypalHiddenEmail = $("#hiddenEmail").val();
            if (paypalHiddenEmail) {
                $('#paypalHiddenEmail').val(paypalHiddenEmail);
            }
            // $('#hiddenName').val(name);
            // $('#hiddenEmail').val(email);
            $('#module').val(module_name);
            // $('#amount-display').text('£' + amount);
            $('#paypalForm').append('<input type="hidden" id="f_amount" name="f_amount" value="'+amount+'">');
        }
    </script>

</body>
</html>
