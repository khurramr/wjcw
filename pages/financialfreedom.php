<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="../css/CarouselAllCss.css">

<link rel = "icon" href =  "../assets/images/cropped-logo.png" type = "image/x-icon"> 
    <title>Financial Freedom</title>
    <style>        
        li{
          margin: 10px 0;
        }
        .row {
          display: flex;
        }
        .column {
          flex: 45.33%;
          padding: 2px;
        }
        .text-img-container{
          display: flex;
        }
        .text-img-container .heading-container{
          display: flex;
          flex-direction: column;
          justify-content: flex-end;
        }
        .text-img-container .img-container{
          display: flex;
          flex: 1;
          margin-left: 50px;
        }
        .text-img-container .img-container img {
          max-width: 50%;
          margin-right: 15px;
        }
        @media screen and (max-width: 960px) {
        .text-img-container {
            flex-direction: column;
        }
        .text-img-container .img-container {
            justify-content: center;
            margin: 0;
        }
    }
    </style>

</head>
<body>
    <?php include '../header_footer/headers.php'?>

<section id="MainBanner">
            <!--<img class="d-block w-100" src="../assets/images/financial_freedom/coins_1920x500.jpg" alt="pic">-->
</section>


<div class="container mt-3 pt-3 fix-header-cut">
    <div class="text-img-container">
        <div class="heading-container">
          <h1>Financial Freedom</h1>
          <h2 class="font-weight-light text-muted mt-3">Financial Freedom</h2>
        </div>
        <div class="img-container">
          <img src="../assets/new_images/financial-freedom-1.jpg"class="w-100 d-block" alt="" >
          <img src="../assets/new_images/financial-freedom-2.jpg"class="w-100 d-block" alt="" >
        </div>
    </div>
    <div class="row">
      <div class="column">
        <!--<img src="../assets/images/financial_freedom/coins_arrow.jpg"class="w-100 d-block" alt="" height="90.25%">-->
      </div>
      <div class="column">
        <!--<img src="../assets/images/financial_freedom/stairs.jpg" class="w-100 d-block" alt="" height="91.50%">-->
      </div>
      </div>
    
<div class="row">
                <ul>
                <li>
                    <p>We believe that through  knowledge, discipline, and unity, financial freedom is possible for all of us.</p>
                </li>
                   <li>
                    <p>Financial freedom means that you get to make life decisions without being overly stressed about the financial impact of unexpected events
because you are prepared.</p>
                </li>
                <li>
                    <p>You control your finances instead of being controlled by them. </p> 
                </li>
                <li>
                     <p>However, financial freedome does not mean that you are "free" from the responsibility of handling your money well; it remains your responsibility </p>
                </li>
                <li>
                    <p>Financial freedom is available on this platform to those who learn about it and work for it.</p>
                </li>
            </ul>    
    </div>    
</div>


<div class="pt-5 mt-5">
<?php include'../header_footer/footer.php' ?>

</div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>