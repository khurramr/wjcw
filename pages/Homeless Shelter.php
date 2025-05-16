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

    <title>Homeless Shelter</title>
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
        height: 500px;
        width: 1960px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
        
    </style>

</head>
<body>
    <?php
    include"../google_translator.php";
    include '../header_footer/headers.php'?>

<section id="MainBanner">
    <!--<img class="d-block w-100" src="../assets/images/homeless_shelter/main.jpg" alt="pic">-->
    <div class="image-container">
        <img src="../assets/new_images/home-less.jpg" alt="">
    </div>
</section>



<div class="container mt-3 pt-3">
        <div class="row">

            <div class="column">
                <!--<img src="../assets/images/homeless_shelter/beds.jpg" class="w-100" alt="" height="100%">-->
            </div>
            <div class="column">
                <!--<img src="../assets/images/homeless_shelter/food.jpg" class="w-100" alt="">-->
            </div>
        </div>
        <div class="text-img-container">
            <div class="heading-container">
                <h3>Homeless Shelters and Orphanages Based</h3>
            </div>
            <!--<div class="img-container">
                <img src="../assets/new_images/home-less.jpg" class="w-100 d-block" alt="real estate">
            </div>-->
        </div>
        
    </div>

    <div class="container mt-2 pt-2">
        <ul>
<li>In the <strong>Qur'an</strong>, Muslims are instructed to look after the environment and not to damage it. Because of this passage, people see themselves as being responsible for the world which Allah created and they have to make their own decisions about how to do this.</li>
<li><strong>Prophet Muhammad (s.a.w.w)</strong> said that of the most rewarding actions in Islam is: aiding those in need, gladdening the heart of a Muslim, feeding the hungry, and helping the afflicted. He, peace and blessings be upon him, also said: “Allah will aid a servant (of His) so long as the servant aids his brother.”</li>
<li>Homelessness is considered one of the modern world’s most serious problems. Although society has come a long way in finding solutions for many of the issues it faces, poverty and homelessness still remain a big problem in today’s world. <strong>WJCW</strong> aims to aid homeless shelters and orphanages based around the globe. This is a core part of our humanitarian work and is something which touches every person’s heart.</li>
        </ul>
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