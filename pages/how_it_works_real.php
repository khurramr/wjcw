<?php
        include"../google_translator.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <style>
        border-radius: 50%;
    </style>      
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   <link rel="stylesheet" href="../css/CarouselAllCss.css">
   <link rel = "icon" href =  "../assets/images/cropped-logo.png" type = "image/x-icon"> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../css/FivePrincipals.css">
   <link rel="stylesheet" href="../css/ribbon.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <title>How It Works</title>

<style>
    .card-title {font-size: 24px; font-weight: bold}
    .card-text, .card-body, .a_gift_card {font-size: 19px}    
    .card-header {text-align:center; font-size:34px}
    .col-md-3{
        margin:0!important;
        padding:0!important;
    }
    .mgn_pdn{
        margin:0!important;
        padding:0!important;
    }
    
    .row {
        display: flex;
    }

        .column {
            flex: 45.33%;
            padding: 5px;
        }

    .sticky {
    max-width: 50%;
    height: auto;
    }
    
.rod_numbers {
 margin-top: 30px;
    height:auto;
    width:50%
}
    .row_margin {
         margin-top: 60px;
    }
@media only screen and (max-width: 1600px) {
.h_1 { font-size:2vw;
    color:green; text-align:center;
    };
}
@media only screen and (max-width: 600px) {
.h_1 { font-size:8vw;
    };
}

@media only screen and (max-width: 1600px) {
.card_section_heading_1 {
    color:green; font-size:28px; text-align:center
    };
}
    

@media only screen and (max-width: 600px) {
.card_section_heading_1 { color:green; font-size:14px; text-align:center
    };

}
@media only screen and (max-width: 1600px) {
    .card_section_heading_main{
    color:green; font-size:52px; text-align:center
    };
}
    

@media only screen and (max-width: 600px) {
.card_section_heading_main{font-size:34px; text-align:center
    };
}
@media only screen and (max-width: 1600px) {
#join_us { background-color:green; color: white; font-size: 16px; position: relative; left:0%}
}

@media only screen and (max-width: 600px) {
#join_us { background-color:green; color: white; font-size: 2vw; position: relative; left:35%}
}
@media only screen and (max-width: 1600px) {    
    #brd_gift_card_12 {width: 23rem; margin: auto; border: 3px solid seagreen;  padding: 10px}
    }
@media only screen and (max-width: 600px) {    
    #brd_gift_card_12 {width: 22rem}
    }
/*@media only screen and (max-width: 1600px) {    
    #bottom_btn {font-size:22px}
    }*/
@media only screen and (max-width: 600px) {    
    #bottom_btn {font-size:7px}
    }
/*@media only screen and (max-width: 1496px) {    
    #bottom_btn {font-size:16px}
    }*/

@media only screen and (max-width: 2400px) {#five_principals_role{position: absolute; right: 120px;  top: 28%}

@media only screen and (max-width: 1270px) {#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 1.3vw} }

@media only screen and (max-width: 1270px) {#h_gift_card_01, #h_gift_card_02, #h_gift_card_03, #h_gift_card_04, #h_gift_card_05, #h_gift_card_06, #h_gift_card_07, #h_gift_card_08, #h_gift_card_09, #h_gift_card_10, #h_gift_card_11, #h_gift_card_12 {font-size: 3vw} }

@media only screen and (max-width: 909px) {#b_gift_card_12 {font-size: 1.28vw}}
@media only screen and (max-width: 880px) {#b_gift_card_12 {font-size: 1.25vw}}
@media only screen and (max-width: 845px) {#b_gift_card_11, #b_gift_card_12 {font-size: 1.23vw}}
@media only screen and (max-width: 855px) {#b_gift_card_09, #b_gift_card_10, #b_gift_card_11 {font-size: 1.22vw} #b_gift_card_12 {font-size: 1.20vw}}
@media only screen and (max-width: 790px) {#b_gift_card_12 {font-size: 1.18vw}}
@media only screen and (max-width: 771px) {#b_gift_card_12 {font-size: 1.16vw}}

@media only screen and (max-width: 1600px) {#h_gift_card_01, #h_gift_card_02, #h_gift_card_03, #h_gift_card_04, #h_gift_card_05, #h_gift_card_06, #h_gift_card_07, #h_gift_card_08, #h_gift_card_09, #h_gift_card_10, #h_gift_card_11, #h_gift_card_12 {font-size: 2.70vw}
#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 1.25vw}
}

@media only screen and (max-width: 1460px){#b_gift_card_12 {font-size: 1.21vw}}
@media only screen and (max-width: 1350px){#b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 1.19vw}}
@media only screen and (max-width: 1350px){#b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 1.15vw}}
@media only screen and (max-width: 1213px){#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 1vw}}

@media only screen and (max-width: 970px){#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: .95vw}}

@media only screen and (max-width: 906px){#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: .90vw}}

@media only screen and (max-width: 855px){#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: .85vw}}

@media only screen and (max-width: 805px){#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: .80vw}}

@media only screen and (max-width: 767px) {#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 5vw} }

@media only screen and (max-width: 300px) {#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 4vw} }

@media only screen and (max-width: 229px) {#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 3.5vw} }

@media only screen and (max-width: 890px) {#h_gift_card_01, #h_gift_card_02, #h_gift_card_03, #h_gift_card_04, #h_gift_card_05, #h_gift_card_06, #h_gift_card_07, #h_gift_card_08, #h_gift_card_09, #h_gift_card_10, #h_gift_card_11, #h_gift_card_12 {font-size: 2.5vw}}
    
@media only screen and (max-width: 818px) {#h_gift_card_01, #h_gift_card_02, #h_gift_card_03, #h_gift_card_04, #h_gift_card_05, #h_gift_card_06, #h_gift_card_07, #h_gift_card_08, #h_gift_card_09, #h_gift_card_10, #h_gift_card_11, #h_gift_card_12 {font-size: 2.2vw}}
    
@media only screen and (max-width: 767px) {#h_gift_card_01, #h_gift_card_02, #h_gift_card_03, #h_gift_card_04, #h_gift_card_05, #h_gift_card_06, #h_gift_card_07, #h_gift_card_08, #h_gift_card_09, #h_gift_card_10, #h_gift_card_11, #h_gift_card_12 {font-size: 6vw} }
    
/*
@media only screen and (max-width: 767px) {#b_gift_card_01, #b_gift_card_02, #b_gift_card_03, #b_gift_card_04, #b_gift_card_05, #b_gift_card_06, #b_gift_card_07, #b_gift_card_08, #b_gift_card_09, #b_gift_card_10, #b_gift_card_11, #b_gift_card_12 {font-size: 5vw} }

@media only screen and (max-width: 770px) {#b_gift_card_11 {font-size: 1.21vw} }
@media only screen and (max-width: 767px) {#b_gift_card_11 {font-size: 5vw} }

@media only screen and (max-width: 767px) {#h_gift_card_01, #h_gift_card_02, #h_gift_card_03, #h_gift_card_04, #h_gift_card_05, #h_gift_card_06, #h_gift_card_07, #h_gift_card_08, #h_gift_card_09, #h_gift_card_10, #h_gift_card_11, #h_gift_card_12 {font-size: 6vw} }
    
@media only screen and (max-width: 550px) {#h_gift_card_01, #h_gift_card_02, #h_gift_card_03, #h_gift_card_04, #h_gift_card_05, #h_gift_card_06, #h_gift_card_07, #h_gift_card_08, #h_gift_card_09, #h_gift_card_10, #h_gift_card_11, #h_gift_card_12 {font-size: 8vw} }
*/
    
    
@media only screen and (max-width: 1426px) {#five_principals_role{position: absolute; right: 115px;  top: 28%}}
@media only screen and (max-width: 1396px) {#five_principals_role{position: absolute; right: 110px;  top: 28%} #tabs{width:98%}}
@media only screen and (max-width: 1376px) {#five_principals_role{position: absolute; right: 92px;  top: 28%} #tabs{width:98%}}
@media only screen and (max-width: 1323px) {#five_principals_role{position: absolute; right: 90px;  top: 33%} #tabs{width:97%}}
@media only screen and (max-width: 2400px) {#Tauwheed, #Adl, #Imamat, #Qiyamat {width: 100%;  height: 110px;}}
@media only screen and (max-width: 1330px) {#Tauwheed, #Adl, #Imamat, #Qiyamat {width: 100%;  height: 98px;}}
@media only screen and (max-width: 2400px) {.a_gift_card{width:100%; font-size: 1vw}}
@media only screen and (max-width: 974px) {.a_gift_card{width:100%; font-size: .9vw}}
@media only screen and (max-width: 885px) {.a_gift_card{width:100%; font-size: .8vw}}
@media only screen and (max-width: 810px) {.a_gift_card{width:100%; font-size: .7vw}}
@media only screen and (max-width: 767px) {.a_gift_card{width:100%; font-size: 4vw}}
@media only screen and (max-width: 570px) {.a_gift_card{width:100%; font-size: 4vw}}
@media only screen and (max-width: 1325px) {#a_one, #a_two, #a_three, #a_four, #a_five {font-size: .9vw}}
@media only screen and (max-width: 1282px) {#a_one, #a_two, #a_three, #a_four, #a_five {font-size: .8vw}}
@media only screen and (max-width: 1237px) {#a_one, #a_two, #a_three, #a_four, #a_five {font-size: .7vw}}
</style>
</head>        
<body>
<?php
    include '../header_footer/header_how_it_works.php'?>
<div class="container-fluid" id="main1" style="background-image: url('../assets/images/ziaraat_umrah_haj/imam_hussain_shrine1.jpg');  height: 1100px;    width: 100%; background-size: cover; background-position: center">

                        <audio id="my_audio" src="../assets/audio/aliun_wali_ullah_cut.mp3"></audio>
                     <div class="col-sm-5 playBtn">
                            <img class="sticky d-block" src="../assets/images/ziaraat_umrah_haj/shah_ast_hussain.jpg" alt="Avatar">                     
                     </div>                                     
                    <div class="col-sm-6 playBtn">
                        <button class="btn btn-success btn-outline-success text-white  float-right mt-2 playBtn btn1" id="audio" style="font-weight:bold; font-size:20px"><span style="display:none" id="play">Click here to recite</span><span class="notranslate"> لآ اِلَهَ اِ لّا اللّهُ</span><i class="fa fa-hand-o-down"></i></button>
                        <button class="btn btn-primary p-2 float-right mt-2 mr-2 btn-2" id="audioStop" style="font-weight:bold; color:white; font-size:20px; display:none">Stop</button>
                       <br><br><br>
                        <div id="nade_ali" class="notranslate">
                           <strong> 
                            <h3 class="animate  text-right" id="ayat1">لآ اِلَهَ اِ لّا اللّهُ  
                            <span class="animate  text-right" id="ayat2">مُحَمَّدٌ رَسُوُل اللّهِ</span>
                            <span class="animate  text-right" id="ayat3">عليٌ وليُّ الله</span>
                            </h3>
                            
                            <h3 class="animate  text-right" id="ayat4">نَادِ عَلِیًّا یَآ مَّظْـہَرَ الْعَجَآ یِٔبِ 
                            <span class="animate text-right" id="ayat5">تَجِدْہُ عَوْنًالَّکَ فِی النَّوَ آیِٔبِ</span>
                            </h3>
                            
                            <h3 class="animate  text-right" id="ayat6"> کُلُّ ھَمٍّ وَّغَمٍّ 
                            <span class="animate text-right" id="ayat7">سَیَنْجَلِیْ</span>
                            <span class="animate  text-right" id="ayat8">بِعَظَمَتِکَ یَآ اَللہُ </span>
                            <span class="animate text-right" id="ayat9">وَبِنَبُوَّ تِکَ یَا مُحَمَّدُ</span>
                            </h3>
                            <h3   class="animate  text-right" id="ayat10">وَبِوَلَا یَتِکَ
                            <span class="animate text-right" id="ayat11">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat12">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat13">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat14">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat15">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat16">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat17">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat18">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat19">عَلِیُّ</span>
                            <span class="animate text-right" id="ayat20">عَلِیُّ</span>
                            </h3>
                            </strong>
                        </div>
                </div>

</div>

<div class="container-fluid mt-1 pt-1">
        <div class="row">
              <div class="col-md-5">
                    <h4 style="color:seagreen; margin-left:200px">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h4>                 
                              <p style="color:seagreen;  font-size:17px; position:relative;">In the name of Allah, The Most Gracious and The Most Merciful</p>
                    
                    <h4 style="color:seagreen"> أَنْ تَعْتَدُوا ۘ وَتَعَاوَنُوا عَلَى الْبِرِّ وَالتَّقْوَىٰ ۖ وَلَا تَعَاوَنُوا عَلَى الْإِثْمِ وَالْعُدْوَانِ</h4>
                  <h4 style="color:seagreen; text-align:left">Cooperate with one another in goodness and righteousness, and do not cooperate in sin and transgression. (Sura Al Maida:02) </h4> 
              </div>
              <div class="col-md-7">
                 <div class="row">
                         <div class="col-md-4"></div>
                         <div class="col-md-8">
                              <h4 style="color:seagreen; margin-left:200px">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h4>
                              <p style="color:seagreen; text-align:right; font-size:17px; position:relative; left:-32px">In the name of Allah, The Most Gracious and The Most Merciful</p>
                                    <h4 style="color:seagreen; text-align:center"> وَاﻋْﺘَﺼِﻤُﻮاْ ﺑِﺤَﺒْﻞِ ﷲِّ ﺟَﻤِﯿﻌًﺎ وَﻻَ ﺗَﻔَﺮﱠﻗُﻮاْ</h4>
                                    <p style="color:seagreen; ; font-size:16.5px">Hold firmly to the way, rope of Allah all together and do not become divided (Sura Aali Imran:103) 
                                    </p>
                         </div>
                  </div>
              </div>
          </div>

        <div class="col-md-7"> <h2 style="color:seagreen; text-align:center">INCREDIBLE JOURNEY</h2>
            <h4 style="color:seagreen; text-align:center; font-size:23px">&nbsp;&nbsp;Here are 3 very easy steps towards 
             Incredible journey</h4>
        </div>

        <div class="col-md-4">
                <h2 style="color:seagreen; text-align:center">THE WJCW CF TABLE</h2>
        </div>
     </div>
    <div class="container-fluid"> 
       <div class="row">
          <div class="column">
        <!--<img src="../assets/images/mlm/gifts11.jpg"  style="margin-left: 0%; margin-right: 30%; width:85%">-->
            <div class="col-md-5"></div>
            <div class="col-md-5">
                <a href="../my_account/join-us.php" class="btn" id="join_us" style="">JOIN US</a>
            </div>
          </div>
          <div class="column">
            <img src="../assets/images/mlm/chain05.jpg" class="w-75 d-block" style="margin-left: 10%; margin-right: 10%; width:70%">
          </div>
       </div>
    </div>
    
        <div class="container-fluid"> 
            <h1 class="ribbon">
               <strong class="ribbon-content">3-VERY EASY STEPS TO INCREDIBLE JOURNEY</strong>
            </h1>
               <div class="row">
                    <div class="col-xl-2 col-md-2 col-sm-2 col-xs-2"></div>
                     <div class="col-xl-8 col-md-8 col-sm-8 col-xs-8">
                        <h2 style="color:green; font-size: 1.5vw; font-weight:bold">Follow the system, and the system will follow you through all the welfare benefits for yourself and others around the globe.</h2>
                     </div>
                    <div class="col-xl-2 col-md-2 col-sm-2 col-xs-2"></div>                 
               </div>        
        </div>
 
    
            
<div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
          <div class="col-md-9">
            <img src="../assets/images/mlm/chart_tree4.png" class="w-100 d-block" >
          </div>
            <div class="col-md-1"></div>          
       </div>
</div>

    <div class="container-fluid  mt-4 pt-4"></div>
    <img src="../assets/images/mlm/LineBreak.jpg" class="w-100 d-block">
<div class="container-fluid  mt-4 pt-4">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"></div>       
        <div class="col-lg-11 col-md-11 col-sm-11 col-xm-11">
            <h3 style="" class="h_1">RECEIVE GIFTS/DONATIONS 6 WAYS AND MORE</h3>
            <p style="font-size: 1.4vw; font-size:18px; margin-right:80px">WJCW crowdfunding makes it easy for everyone to get  gifts/donations. Our very strong system gives every member more than 6 ways to receive gifts/donations through following 3 very easy steps.
            </p>
        </div>
    </div>
 
    <div class="row" style=" margin-top:-40px">       
        <div class="col-lg-10 col-md-10 col-sm-10 col-xm-10">
                <p class="rod_numbers">
                    <img srcset="../assets/images/mlm/rod_section.png"  style="width:180%" id="rod_section">
                </p>    
        </div>
    </div>
</div>
<?php include'how_it_works_card_section.php' ?>

    <div class="container-fluid  mt-4 pt-4">
        <p style="text-align:justify; color:seagreen; font-size:18px">There are a total of just (12 Gift/ Donation pods)
        in your WJCW CF table 2x2. It is very easy and simple.
        First register and send a gift/donation to
        become an active member. 
        Help 2 or more become active members.
        When they help two or more people become active members, your WJCW CF table fills another WJCW CF table automatically and opens for you to receive more gifts/donations without extra effort.
        Let’s hold firmly to the rope of Allah SWT all together and do not become divided by working together on this welfare platform for the community around the globe. 
        Please note: every member starts of first level, it’s your choice to gift/donate on one or multiple levels, but it is important to go throughout each stage step-by-step.
        </p>
         <div class="text-center mt-4 pt-4">
            <a href="../my_account/join-us.php" class="btn" style="background-color:green; color:white;" id="bottom_btn">JOIN US TO START RAISING FUNDS TODAY!</a>
        </div>
    </div>

<div class="container-fluid  mt-4 pt-4"></div>
<?php include'../header_footer/footer.php' ?>
</body>


<script>
$(document).ready(function() {
var stopAudio = document.querySelector("#audioStop");
var playAudio = document.querySelector("audio");

    $('.animate').hide();
    $("#audio").click(function( event ) {
    $("#my_audio").get(0).play();
    $("#audioStop").show();
    $("#ayat1").delay(1000).fadeIn();
    $("#ayat2").delay(7000).fadeIn();
    $("#ayat3").delay(10000).fadeIn();
    $("#ayat4").delay(25000).fadeIn();
    $("#ayat5").delay(36000).fadeIn();
    $("#ayat6").delay(40000).fadeIn();
    $("#ayat7").delay(43000).fadeIn();
    $("#ayat8").delay(49000).fadeIn();
    $("#ayat9").delay(52000).fadeIn();
    $("#ayat10").delay(57000).fadeIn();
    $("#ayat11").delay(58000).fadeIn();
    $("#ayat12").delay(59000).fadeIn();
    $("#ayat13").delay(60000).fadeIn(function(){
        $("#ayat14").delay(400).fadeIn(function(){
            $("#ayat15").delay(400).fadeIn(function(){
                $("#ayat16").delay(400).fadeIn(function(){
                    $("#ayat17").delay(350).fadeIn(function(){
                        $("#ayat18").delay(350).fadeIn(function(){
                            $("#ayat19").delay(350).fadeIn(function(){
                                $("#ayat20").delay(350).fadeIn(function(){
                                    $("#audioStop").hide();
                                    $('.animate').stop();
                                    $('.animate').hide();
                                });
                            });                
                        });            
                    });        
                });    
            });
        });
    });
});


stopAudio.addEventListener('click', function(){
    playAudio.pause();
    playAudio.currentTime = 0;
    $("#audioStop").hide();
    $('.animate').stop();
    $('.animate').hide();

});
//        playAudio.pause();
//    playAudio.currentTime = 0;

$( "#audio" ).mouseover(function( event ) {
    $("#play").show();

});

$( "#audio" ).mouseleave(function( event ) {
    $("#play").hide();
});

    $("#h_gift_card_01, #f_gift_card_01, #b_gift_card_01").mouseover(function(){
        $("#h_gift_card_01, #f_gift_card_01, #b_gift_card_01, #brd_gift_card_01").css("background-color", "green");
        $("#h_gift_card_01, #f_gift_card_01, #b_gift_card_01, #brd_gift_card_01").css("color", "white");
        $("#a_gift_card_01").css("background-color", "white");
        $("#a_gift_card_01").css("color", "green");
    });

    $("#h_gift_card_01, #f_gift_card_01, #b_gift_card_01").mouseleave(function(){
        $("#h_gift_card_01, #f_gift_card_01, #b_gift_card_01, #brd_gift_card_01").css("background-color", "white");
        $("#h_gift_card_01, #f_gift_card_01, #b_gift_card_01, #brd_gift_card_01").css("color", "black");
        $("#a_gift_card_01").css("background-color", "green");
        $("#a_gift_card_01").css("color", "white");
    });
    
    
    $("#h_gift_card_02, #f_gift_card_02, #b_gift_card_02").mouseover(function(){
        $("#h_gift_card_02, #f_gift_card_02, #b_gift_card_02, #brd_gift_card_02").css("background-color", "green");
        $("#h_gift_card_02, #f_gift_card_02, #b_gift_card_02, #brd_gift_card_02").css("color", "white");
        $("#a_gift_card_02").css("background-color", "white")
        $("#a_gift_card_02").css("color", "green")
    });

    $("#h_gift_card_02, #f_gift_card_02, #b_gift_card_02").mouseleave(function(){
        $("#h_gift_card_02, #f_gift_card_02, #b_gift_card_02, #brd_gift_card_02").css("background-color", "white");
        $("#h_gift_card_02, #f_gift_card_02, #b_gift_card_02, #brd_gift_card_02").css("color", "black");
        $("#a_gift_card_02").css("background-color", "green")
        $("#a_gift_card_02").css("color", "white")
    });
    
    $("#h_gift_card_03, #f_gift_card_03, #b_gift_card_03").mouseover(function(){
        $("#h_gift_card_03, #f_gift_card_03, #b_gift_card_03, #brd_gift_card_03").css("background-color", "green");
        $("#h_gift_card_03, #f_gift_card_03, #b_gift_card_03, #brd_gift_card_03").css("color", "white");
        $("#a_gift_card_03").css("background-color", "white")
        $("#a_gift_card_03").css("color", "green")
    });

    $("#h_gift_card_03, #f_gift_card_03, #b_gift_card_03").mouseleave(function(){
        $("#h_gift_card_03, #f_gift_card_03, #b_gift_card_03, #brd_gift_card_03").css("background-color", "white");
        $("#h_gift_card_03, #f_gift_card_03, #b_gift_card_03, #brd_gift_card_03").css("color", "black");
        $("#a_gift_card_03").css("background-color", "green");
        $("#a_gift_card_03").css("color", "white");
    });
    
    $("#h_gift_card_04, #f_gift_card_04, #b_gift_card_04").mouseover(function(){
        $("#h_gift_card_04, #f_gift_card_04, #b_gift_card_04, #brd_gift_card_04").css("background-color", "green");
        $("#h_gift_card_04, #f_gift_card_04, #b_gift_card_04, #brd_gift_card_04").css("color", "white");
        $("#a_gift_card_04").css("background-color", "white")
        $("#a_gift_card_04").css("color", "green")
    });

    $("#h_gift_card_04, #f_gift_card_04, #b_gift_card_04").mouseleave(function(){
        $("#h_gift_card_04, #f_gift_card_04, #b_gift_card_04, #brd_gift_card_04").css("background-color", "white");
        $("#h_gift_card_04, #f_gift_card_04, #b_gift_card_04, #brd_gift_card_04").css("color", "black");
        $("#a_gift_card_04").css("background-color", "green")
        $("#a_gift_card_04").css("color", "white")
    });
    
    $("#h_gift_card_05, #f_gift_card_05, #b_gift_card_05").mouseover(function(){
        $("#h_gift_card_05, #f_gift_card_05, #b_gift_card_05, #brd_gift_card_05").css("background-color", "green");
        $("#h_gift_card_05, #f_gift_card_05, #b_gift_card_05, #brd_gift_card_05").css("color", "white");
        $("#a_gift_card_05").css("background-color", "white")
        $("#a_gift_card_05").css("color", "green")
    });

    $("#h_gift_card_05, #f_gift_card_05, #b_gift_card_05").mouseleave(function(){
        $("#h_gift_card_05, #f_gift_card_05, #b_gift_card_05, #brd_gift_card_05").css("background-color", "white");
        $("#h_gift_card_05, #f_gift_card_05, #b_gift_card_05, #brd_gift_card_05").css("color", "black");
        $("#a_gift_card_05").css("background-color", "green");
        $("#a_gift_card_05").css("color", "white");
    });
    
    $("#h_gift_card_06, #f_gift_card_06, #b_gift_card_06").mouseover(function(){
        $("#h_gift_card_06, #f_gift_card_06, #b_gift_card_06, #brd_gift_card_06").css("background-color", "green");
        $("#h_gift_card_06, #f_gift_card_06, #b_gift_card_06, #brd_gift_card_06").css("color", "white");
        $("#a_gift_card_06").css("background-color", "white");
        $("#a_gift_card_06").css("color", "green");
    });

    $("#h_gift_card_06, #f_gift_card_06, #b_gift_card_06").mouseleave(function(){
        $("#h_gift_card_06, #f_gift_card_06, #b_gift_card_06, #brd_gift_card_06").css("background-color", "white");
        $("#h_gift_card_06, #f_gift_card_06, #b_gift_card_06, #brd_gift_card_06").css("color", "black");
        $("#a_gift_card_06").css("background-color", "green")
        $("#a_gift_card_06").css("color", "white")
    });
    
    $("#h_gift_card_07, #f_gift_card_07, #b_gift_card_07").mouseover(function(){
        $("#h_gift_card_07, #f_gift_card_07, #b_gift_card_07, #brd_gift_card_07").css("background-color", "green");
        $("#h_gift_card_07, #f_gift_card_07, #b_gift_card_07, #brd_gift_card_07").css("color", "white");
        $("#a_gift_card_07").css("background-color", "white")
        $("#a_gift_card_07").css("color", "green")
    });

    $("#h_gift_card_07, #f_gift_card_07, #b_gift_card_07").mouseleave(function(){
        $("#h_gift_card_07, #f_gift_card_07, #b_gift_card_07, #brd_gift_card_07").css("background-color", "white");
        $("#h_gift_card_07, #f_gift_card_07, #b_gift_card_07, #brd_gift_card_07").css("color", "black");
        $("#a_gift_card_07").css("background-color", "green");
        $("#a_gift_card_07").css("color", "white");
    });
    
        $("#h_gift_card_08, #f_gift_card_08, #b_gift_card_08").mouseover(function(){
        $("#h_gift_card_08, #f_gift_card_08, #b_gift_card_08, #brd_gift_card_08").css("background-color", "green");
        $("#h_gift_card_08, #f_gift_card_08, #b_gift_card_08, #brd_gift_card_08").css("color", "white");
        $("#a_gift_card_08").css("background-color", "white");
        $("#a_gift_card_08").css("color", "green");
    });

    $("#h_gift_card_08, #f_gift_card_08, #b_gift_card_08").mouseleave(function(){
        $("#h_gift_card_08, #f_gift_card_08, #b_gift_card_08, #brd_gift_card_08").css("background-color", "white");
        $("#h_gift_card_08, #f_gift_card_08, #b_gift_card_08, #brd_gift_card_08").css("color", "black");
        $("#a_gift_card_08").css("background-color", "green")
        $("#a_gift_card_08").css("color", "white")
    });
    
        $("#h_gift_card_09, #f_gift_card_09, #b_gift_card_09").mouseover(function(){
        $("#h_gift_card_09, #f_gift_card_09, #b_gift_card_09, #brd_gift_card_09").css("background-color", "green");
        $("#h_gift_card_09, #f_gift_card_09, #b_gift_card_09, #brd_gift_card_09").css("color", "white");
        $("#a_gift_card_09").css("background-color", "white")
        $("#a_gift_card_09").css("color", "green")
    });

    $("#h_gift_card_09, #f_gift_card_09, #b_gift_card_09").mouseleave(function(){
        $("#h_gift_card_09, #f_gift_card_09, #b_gift_card_09, #brd_gift_card_09").css("background-color", "white");
        $("#h_gift_card_09, #f_gift_card_09, #b_gift_card_09, #brd_gift_card_09").css("color", "black");
        $(".a_gift_card").addClass("btn-success");
        $("#a_gift_card_09").css("background-color", "green")
        $("#a_gift_card_09").css("color", "white")
    });

        $("#h_gift_card_10, #f_gift_card_10, #b_gift_card_10").mouseover(function(){
        $("#h_gift_card_10, #f_gift_card_10, #b_gift_card_10, #brd_gift_card_10").css("background-color", "green");
        $("#h_gift_card_10, #f_gift_card_10, #b_gift_card_10, #brd_gift_card_10").css("color", "white");
        $("#a_gift_card_10").css("background-color", "white")
        $("#a_gift_card_10").css("color", "green")
    });

    $("#h_gift_card_10, #f_gift_card_10, #b_gift_card_10").mouseleave(function(){
        $("#h_gift_card_10, #f_gift_card_10, #b_gift_card_10, #brd_gift_card_10").css("background-color", "white");
        $("#h_gift_card_10, #f_gift_card_10, #b_gift_card_10, #brd_gift_card_10").css("color", "black");
        $("#a_gift_card_10").css("background-color", "green")
        $("#a_gift_card_10").css("color", "white")
    });

        $("#h_gift_card_11, #f_gift_card_11, #b_gift_card_11").mouseover(function(){
        $("#h_gift_card_11, #f_gift_card_11, #b_gift_card_11, #brd_gift_card_11").css("background-color", "green");
        $("#h_gift_card_11, #f_gift_card_11, #b_gift_card_11, #brd_gift_card_11").css("color", "white");
        $("#a_gift_card_11").css("background-color", "white")
        $("#a_gift_card_11").css("color", "green")
});

    $("#h_gift_card_11, #f_gift_card_11, #b_gift_card_11").mouseleave(function(){
        $("#h_gift_card_11, #f_gift_card_11, #b_gift_card_11, #brd_gift_card_11").css("background-color", "white");
        $("#h_gift_card_11, #f_gift_card_11, #b_gift_card_11, #brd_gift_card_11").css("color", "black");
        $("#a_gift_card_11").css("background-color", "green")
        $("#a_gift_card_11").css("color", "white")
    });
    
        $("#h_gift_card_12, #f_gift_card_12, #b_gift_card_12").mouseover(function(){
        $("#h_gift_card_12, #f_gift_card_12, #b_gift_card_12, #brd_gift_card_12").css("background-color", "green");
        $("#h_gift_card_12, #f_gift_card_12, #b_gift_card_12, #brd_gift_card_12").css("color", "white");
        $("#a_gift_card_12").css("background-color", "white")
        $("#a_gift_card_12").css("color", "green")

    });

    $("#h_gift_card_12, #f_gift_card_12, #b_gift_card_12").mouseleave(function(){
        $("#h_gift_card_12, #f_gift_card_12, #b_gift_card_12, #brd_gift_card_12").css("background-color", "white");
        $("#h_gift_card_12, #f_gift_card_12, #b_gift_card_12, #brd_gift_card_12").css("color", "black");
        $("#a_gift_card_12").css("background-color", "green")
        $("#a_gift_card_12").css("color", "white")
    });
});    
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>