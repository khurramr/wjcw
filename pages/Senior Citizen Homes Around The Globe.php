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
    <title>Senior Citizen Homes Around The Globe</title>
    <style>        
        li {
      margin: 10px 0;
    }
    .row {
      display: flex;
    }
    .column {
      flex: 45.33%;
      padding: 2px;
    }
    .fix-cut {
      margin-left: 285px;
    }
    .text-img-container {
      display: flex;
    }
    .text-img-container .heading-container {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }
    .text-img-container .img-container {
      display: flex;
      flex: 1;
      margin-left: 50px;
      justify-content: flex-end;
    }
    .text-img-container .img-container img {
      max-width: 70%;
      margin-right: 15px;
    }
    .heading-container .h5 {
      margin-bottom: -10px;
    }
    ul{
      padding-left:0;
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
        /*html { font-size: 1vw; }*/
    </style>

</head>
<body>
    <?php
    include"../google_translator.php";
    include '../header_footer/headers.php'?>

<section id="MainBanner">
            <!--<img class="d-block w-100" src="../assets/images/senior-citizens/home_big_1920x500.jpg" alt="pic">-->
</section>

<div class="container mt-3 pt-3 fix-header-cut">
    <div class="row">
      <div class="column">
            <!--<img src="../assets/images/senior-citizens/hands.jpg" class="w-100" alt="">-->
      </div>
      <div class="column">
            <!--<img src="../assets/images/senior-citizens/three.jpeg" class="w-100" alt="" height="100%">-->
      </div>
      <div class="text-img-container">
            <div class="heading-container">
            <h3 class="font-weight-bold">Senior Citizen Homes Around The Globe</h3>
            </div>
            <div class="img-container">
                <img src="../assets/new_images/senior-citizen.jpg" class="w-100 d-block" alt="real estate">
            </div>
      </div>
</div>
    
<div class="row">
    <h4 class="font-weight-bold">Senior Citizen Around The Globe</h4>
             <ul>

          <strong>Retirement Wishes</strong>: Retirement from work marks the new beginning of life. You can wish a happy retirement to your colleague, coworker, father, boss, friend, relative, and family member. By sharing inspirational and encouraging words, cheer them up for a fabulous time and great adventures. Bring a smile on their face by sending some wonderfully crafted retirement greetings or Farewell Wishes. Though leaving the workplace is difficult for them but your heartiest retirement wishes can make them feel better and positive. Some people find retirement as a depressing part of life. But you can always cheer them up and make them happy about it. So, let’s check out the following retirement wishes to see if you find what you were looking for.
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