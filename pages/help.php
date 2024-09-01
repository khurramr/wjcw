<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/links/owl.carousel.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../css/site.css">
    <link rel = "icon" href =  "../assets/images/cropped-logo.png" type = "image/x-icon"> 
    <style>
        .list_help {margin:24px; font-size:20px; font-weight:bold}
    </style>
    <title>Help</title>

</head>

<body>
    <?php
    include"../google_translator.php";
    include("../header_footer/headers.php") ?>
        <section id="MainContent" class="bg-white py-5">
            <div class="container">

                <div class="row ">
                    <div class="col-auto col-md-10 ">
                        <nav aria-label="breadcrumb " class="first d-md-flex">
                            <ol class="breadcrumb indigo lighten-6 first-1 shadow-lg mb-5 ">
                                <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase " href="../index.php"><span>home</span></a><img class="ml-md-3" src="https://img.icons8.com/offices/30/000000/double-right.png" width="20" height="20"> </li>
                                <li class="breadcrumb-item font-weight-bold mr-0 pr-0"><a class="black-text active-1" href=""><span>HELP</span></a> </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <?php include"help_accordion.php"?>
        </section>
    <!-- Footer -->
    <?php include("../header_footer/footer.php") ?>
    <!-- Footer Ends -->
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/links/owl.carousel.min.js"></script>
<script src="js/site.js"></script>

</html>