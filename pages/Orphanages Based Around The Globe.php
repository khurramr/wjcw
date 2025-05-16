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

    <title>Orphanages Based Around The Globe</title>
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
        
    .text-img-container {
      display: flex;
      flex-wrap: wrap;
    }

    .text-img-container .heading-container {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      flex: 1;
    }

    .text-img-container .img-container {
      display: flex;
      justify-content: flex-end;
      flex: 1;
      margin-left: 50px;
    }

    .text-img-container .img-container img {
      max-width: 80%;
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
    <?php 
    include"../google_translator.php";
    include '../header_footer/headers.php'?>
    <section id="MainBanner">
            <!--<img class="d-block w-100" src="../assets/images/orphanage%20base%20around%20the%20gloab/IMG_1110.jpg" alt="pic" height="500" width="1920">-->
</section>


<div class="container mt-3 pt-3 fix-header-cut">
    <div class="row">
        <!-- <h3 class="font-weight-bold">Orphanages Based Around The Globe</h3> -->
    </div>
    <div class="row">
      <div class="column">
          <!--<img src="../assets/images/orphanage%20base%20around%20the%20gloab/prophet_says.jpg" class="w-100" alt="" height="83%">-->
      </div>
      <div class="column">
          <!--<img src="../assets/images/orphanage base around the gloab/" class="w-100" alt="">-->
      </div>
      </div>
    
<div class="row">
        <div class="text-img-container">
            <div class="heading-container">
            <h3 class="font-weight-bold">Orphanages Based Around The Globe</h3>
            </div>
            <div class="img-container">
                <img src="../assets/new_images/home-less.jpg" class="w-50 d-block" alt="haj-2">
            </div>
            </div>
        </div>
        <ul>
            <li>According to <strong>Islam, orphans</strong> are those children who are left with no protection because their fathers have passed away.</li>
            <li>Many <strong>orphans</strong> have no source of income and/or a guardian to take care of them. This is where Muslims as a community have to step in and aid the <strong>orphans</strong> even if the mother is still living.</li>
            <strong>What are the rights of orphans in Islam? </strong>
            <li>This includes the right to education, clothing, feeding, shelter, and healthcare. A parent can never be replaced, but as Muslims, we can still give these children the best we can. Allah knows why he chose to make someone an <strong>orphan</strong>, and why he chooses you to be the guardian of that child. Sponsoring orphans is a cause particularly dear to the Prophet Muhammad's (SAWW) heart who himself was an orphan.</li>
            <li>Ameerul Momineen, Imam Ali (A.S), was also known as the ‘father of the orphans’ due to his life long commitment to the orphan children. When Imam Ali (A.S) was struck by a sword before his martyrdom, orphans from Kufa brought him milk just like he used to bring them. WJCW aims to have special welfare projects for widows and orphans around the globe.</li>
       
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