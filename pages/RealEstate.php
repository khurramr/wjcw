<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="../css/CarouselAllCss.css" />
  <link rel="icon" href="../assets/images/cropped-logo.png" type="image/x-icon" />
  <title>Real Estate</title>
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
      max-width: 50%;
      margin-right: 15px;
    }
    .heading-container .h5 {
      margin-bottom: -10px;
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
  <?php
    include "../google_translator.php";
    include "../header_footer/headers.php";
  ?>

  <section id="MainBanner">
    <!--<img class="d-block w-100" src="../assets/images/real_estate/buildings_1920x500.jpg" alt="pic">-->
  </section>

  <br />
  <div class="container mt-3 pt-3">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-9">
        <!-- <h3 class="font-weight-bold">Real Estate</h3> -->
      </div>
    </div>
    <div class="row">
      <div class="column">
        <!--<img src="../assets/images/real_estate/uk_houses.jpg" class="w-100" alt="">-->
      </div>
      <div class="column">
        <!--<img src="../assets/images/real_estate/uk_colonies_640x427.jpg" class="w-100 d-block" alt="">-->
      </div>
    </div>
    <div class="text-img-container">
      <div class="heading-container">
        <h3>Real Estate</h3>
        <h5 class="font-weight-light text-muted mt-3">Real estate, house for everyone, home sweet home.</h5>
      </div>
      <div class="img-container">
        <img src="../assets/new_images/real-estate-1.jpeg" class="w-100 d-block" alt="real estate">
        <img src="../assets/new_images/real-estate-2.jpg" class="w-100 d-block" alt="real estate">
      </div>
    </div>
  </div>

  <div class="container pt-2">
    <div class="clearfix">
      <ul>
        <li>Real estate, property consisting of land or buildings, air rights above the land and underground rights below the land.</li>
        <li>The term real estate means real, or physical, property.</li>
        <li><strong>WJCW</strong> aim for discounts on housing for members which may be up to 20-30% off market prices for qualifying members.</li>
      </ul>
    </div>
  </div>

  <div class="pt-5 mt-5">
    <?php include "../header_footer/footer.php"; ?>
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
