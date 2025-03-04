<?php include("../../session_login.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WJCW</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/gradient_buttons.css">
  <link rel = "icon" href =  "../../../assets/images/cropped-logo.png" type = "image/x-icon">
  <link rel="stylesheet" href="../../dist/css/size_adjustment_G_D_S_R.css"><style>
<style>
#main-nav1 {
position: fixed;
/*width: 100%;*/
height: 100vh;

z-index: 9999;
}

.p_fonts {text-align:justify}

.scroll-menu {
  width: 100%;
  height: 700px;
  overflow: auto;
}
/* width */
.scroll-menu::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.scroll-menu::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
.scroll-menu::-webkit-scrollbar-thumb {
/*  background: #5cb85c; */
  background: grey;
  border-radius: 10px;
}

/* Handle on hover */
.scroll-menu::-webkit-scrollbar-thumb:hover {
/*  background: #0275d8; */
  background: #5bc0de;
}

/*Not supported in firefox / edge browsers */
.scroll {
  width: 100%;
  height:500px;
  overflow: auto;
}
/* width */
.scroll::-webkit-scrollbar {
  width: 15px;
}

/* Track */
.scroll::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px green;
  border-radius: 10px;
}

/* Handle */
.scroll::-webkit-scrollbar-thumb {
  background: #5cb85c;
  border-radius: 10px;
}

.scroll::-webkit-scrollbar-thumb:hover {
  background: #5bc0de;
}
</style>


</head>
<body class="hold-transition sidebar-mini">
<?php include"../../../google_translator.php"; ?>
 <div class="wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4" id="main-nav">
      <!-- Sidebar Menu -->
       <?php include"../sidebar-menu-pages.php" ?>
      <!-- /.sidebar-menu -->
  </aside>
<?php include"../../header_green.php" ?>  <!-- Content Wrapper. Contains page content -->
<div class="container" style="margin-left:250px">
<?php
        $from_currency = "";
        $to_currency = "";
        $amount = "";
        $rate = "";



    if(isset($_POST['submit'])){
        $from_currency = $_POST['from_currency'];
        $to_currency = $_POST['to_currency'];
        $amount = $_POST['amount'];

        $curl = curl_init();
        $headers = [
          'Content-Type: application/json',
          'x-rapidapi-host: currency-converter5.p.rapidapi.com',
          'x-rapidapi-key: 2e8e7c3f72msha0fb280ca0df6adp1ce6a2jsnd9a798505800'
        ];

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://currency-converter5.p.rapidapi.com/currency/convert?format=json&from=".$from_currency."&to=".$to_currency."&amount=".$amount."&language=en%27",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTPHEADER => $headers
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $rate = $response['rates'][$to_currency]['rate'] * $amount;
    }
?>
</div>
<div class="content-wrapper  mt-4">
        <div>
            <div class="row">
               <div class="col-md-12">
               <form method="post" autocomplete="off">
                <div class="panel panel-primary" style="margin: 25px;">
                    <a  class="btn btn-success btn-block w-100" style="font-size:28px; text-align:left">
                        Currency Converter
                    </a>
                    <div class="panel panel-body" style="font-size: 18px;">
                        <div>
                            <label for="InputBase">From Currency</label>
                            <?php include"from_currencies_list.php" ?>
                        </div>
                        <div>
                            <label for="OutputCurrency">To Currency</label>
                            <?php include"to_currencies_list.php" ?>
                        </div>
                        <div>
                            <label for="Amount">Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount here....">
                        </div>
                       <div>
                          <br>
                          <p style="color: red;"><b><u>NOTE</u>: The rate provided here is only an estimate.</b></p>
                          </div>
                        <div>
                            <br>
                            <button type="submit" name="submit" class="btn btn-success btn-block" style="font-size:24px;">
                                Convert
                            </button>
                        </div>
                        <br>
                        <div>
                            <strong>Output: :</strong>
                            <h3 id="Converted" style="color: green;">
                                <?php
                                    echo $amount . "  " . $from_currency . " = " . $rate . " " . $to_currency;
                                ?>

                            </h3>
                        </div>
                    </div>

                </div>
            </form>
            </div>
            </div>
        </div>
</div>


</div>
<?php include"../../copy_right.php"; ?>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script>

$('a').click(function() {
    localStorage.setItem('currency_converter', $(this).attr('href'));
});
var collapseItem = localStorage.getItem('currency_converter');
if (collapseItem) {
   $(collapseItem).collapse('show')
}

</script>
</body>
</html>
