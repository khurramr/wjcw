<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Departmental Store Discounts for Members</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="../css/CarouselAllCss.css" />
  <link rel="icon" href="../assets/images/cropped-logo.png" type="image/x-icon" />

  <style>
    li {
      margin: 10px 0;
    }

    .text-img-container {
      display: flex;
      flex-wrap: wrap;
      margin-top: 40px;
    }

    .heading-container {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      flex: 1;
    }

    .img-container {
      display: flex;
      justify-content: flex-end;
      flex: 1;
      margin-left: 50px;
    }

    .img-container img {
      max-width: 50%;
      border-radius: 2px;
    }

    .h5 {
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
    
    .image-container {
        display: flex;
        flex-wrap: wrap; 
        justify-content: start; 
        gap: 1px;
        padding: 20px;
    }
    .image-container img {
        max-width: 100%;
        height: 620px;
        width: 800px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
  </style>
</head>
<body>

  <?php
    include "../google_translator.php";
    include "../header_footer/headers.php";
  ?>

  <section id="MainBanner">
    <!--<img class="d-block w-100" src="../assets/images/depatmental_store/main.jpg" alt="Department Store Banner">-->
    <div class="image-container">
        <img src="../assets/new_images/dep-store-1.jpg" alt="" >
        <!--<img src="../assets/new_images/dep-store-2.jpg" alt="" >-->
        <img src="../assets/new_images/dep-store-3.jpg" alt="" >
    </div>
  </section>

  <div class="container mt-5 pt-5">
    <div class="text-img-container">
      <div class="heading-container">
        <h3 class="font-weight-bold">Departmental Stores Discounts For Members</h3> 
      </div>
      <!--<div class="img-container">
        <img src="../assets/new_images/dep-store.jpg" alt="Fruits Discount Image">
      </div>-->
    </div>
  </div>

  <div class="container mt-4 pt-2">
    <ul>
      <li><strong>WJCW</strong>-focused, subsidised grocery shops and departmental stores operate under one roof, offering discounts exclusively for WJCW members with convenient home delivery options.</li>
      <li>Households spending around £200–£300 weekly on groceries can significantly cut their expenses. WJCW is committed to easing the financial burden on the community.</li>
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
