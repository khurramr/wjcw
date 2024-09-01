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
        // $from_currency = $_POST['from_currency'];
        $to_currency = $_POST['to_currency'];
        $amount = $_POST['amount'];

        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.exchangeratesapi.io/v1/latest?access_key=7969c44dc4f0b59042bff782c378d04c&base=EUR",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0
        ]);
                
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          // echo "cURL Error #:" . $err;
        } else {
          $response = json_decode($response, true);
          // echo $response["rates"]["AED"];
          $rate = $response["rates"]["AED"] * $amount;
        }
        

        // $url = "https://api.exchangeratesapi.io/v1/latest?access_key=7969c44dc4f0b59042bff782c378d04c&base=". $from_currency ."&symbols=". $to_currency;
        // $url = "https://api.exchangeratesapi.io/v1/latest?access_key=7969c44dc4f0b59042bff782c378d04c&base=EUR";
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, [
        //   'x-rapidapi-host: currency-conversion-and-exchange-rates.p.rapidapi.com',
        //   'x-rapidapi-key: d5a27c6359mshdbdbeb98eb81034p116322jsn01b2d56dd648'
        // ]);
        // $result = curl_exec($ch);
        // echo "HEY";
        // echo $result;
        // curl_close($ch);
        // $result = json_decode($result, true);
        // echo $result;
        // $rate = $result["rates"][$to_currency] * $amount;
    }   
?>
</div>
<div class="content-wrapper  mt-4">
        <div class="container-fluid scroll">
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
/*
$("#main-nav").show();
document.onreadystatechange = function() {
    if (document.readyState <> "complete") {
        document.querySelector("#main-nav").style.visibility = "visible";
    } 
};
    
</script>
</body>
</html>