<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free Holidays</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="../css/CarouselAllCss.css" />
  <link rel="icon" href="../assets/images/cropped-logo.png" type="image/x-icon" />

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
    include '../header_footer/headers.php';
  ?>

  <section id="MainBanner">
    <!--<img class="d-block w-100" src="../assets/images/free_holidays/walking_holidays_europe.jpg" alt="pic" width="1920" height="500">-->
  </section>

  <div class="container mt-5 pt-5 fix-header-cut">
    <div class="row">
      <div class="column">
        <!--<img src="../assets/images/free_holidays/buildings.jpg" class="w-100" alt="" height="95%">-->
      </div>
      <div class="column">
        <!--<img src="../assets/images/free_holidays/london_bridge.jpg" class="w-100" alt="" height="95%">-->
      </div>
      <div class="text-img-container">
        <div class="heading-container">
          <h3 class="font-weight-bold">Free Holidays</h3>
           <h4 class="font-weight-bold mt-2">Why Are Holidays Important?</h4>
        </div>
        <div class="img-container">
          <img src="../assets/new_images/free-holiday-1.jpg" class="w-100 d-block" alt="holiday image 1" />
          <img src="../assets/new_images/free-holiday-2.jpg" class="w-100 d-block" alt="holiday image 2" />
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-2 pt-2">
   
    <ul>
      <li>By now you already know that taking time — long or short — for a <strong>holiday</strong> can improve your physical and mental health, reduce your stress levels, help you sleep better, and put you in a good mood. A proper <strong>vacation</strong> can even help improve productivity at work or in business.</li>
      <li>Holidays usually involve travelling, which is exciting. Immersing yourself in a new culture, eating delicious food, and meeting new people provide emotional and physical health benefits.</li>
      <li>Studies prove that taking a proper vacation — without constantly checking work emails — is vital for physical health and can decrease the risk of heart disease.</li>
      <li>All qualifying shareholders of <strong>WJCW</strong> benefit from free or subsidised holidays.</li>
    </ul>
  </div>

  <div class="pt-5 mt-5">
    <?php include '../header_footer/footer.php'; ?>
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
