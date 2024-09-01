<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/links/owl.carousel.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel = "icon" href =  "assets/images/cropped-logo.png" type = "image/x-icon">-->
    <title>WJCW</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />     

</head>
<style>


             /*Golden color of verses*/
            h5{
            color: #FFD700;
            }
    
    
    .owl-theme .owl-dots .owl-dot span{
    width:10px;
    height:10px;
    margin:5px 7px;
     background-image: linear-gradient(to right, lightgreen, green, seagreen) !important;
    display:block;
    -webkit-backface-visibility:visible;
    -webkit-transition:opacity 200ms ease;
    -moz-transition:opacity 200ms ease;
    -ms-transition:opacity 200ms ease;
    -o-transition:opacity 200ms ease;
    transition:opacity 200ms ease;
    -webkit-border-radius:30px;
    -moz-border-radius:30px;
    border-radius:30px;
}    

.owl-theme .owl-dots .owl-dot span:hover{
    width:10px;
    height:10px;
    margin:5px 7px;
    background: lightgreen !important;
    display:block;
    -webkit-backface-visibility:visible;
    -webkit-transition:opacity 200ms ease;
    -moz-transition:opacity 200ms ease;
    -ms-transition:opacity 200ms ease;
    -o-transition:opacity 200ms ease;
    transition:opacity 200ms ease;
    -webkit-border-radius:30px;
    -moz-border-radius:30px;
    border-radius:30px;
}

.owl-dots {
  margin-left: 50px;
  margin-right: 50px
}    
@media only screen and (max-width: 1199px) {#sliding_arrows{display:none;}}
@media only screen and (max-width: 1496px) {.h-adjust-size{font-size:24px;}    
                                            .p-adjust-size{font-size:17px;}
                                            #Welcome2{display: none}
                                            #Welcome{display: block}
                                            
                                            }
@media only screen and (max-width: 1200px) {.h-adjust-size{font-size:15px;}    
                                            .p-adjust-size{font-size:11px;}
                                            .card-size{height:345px}
                                            #Welcome2{display: block}
                                            #Welcome{display: none}
                                            }

@media only screen and (max-width: 991px) {.h-adjust-size{font-size:24px;}    
                                            .p-adjust-size{font-size:17px;}
                                            .card-size{height:100%}
                                            .card-size2{height:459px}
                                            }
@media only screen and (max-width: 575px) {.h-adjust-size{font-size:24px;}    
                                            .p-adjust-size{font-size:17px;}
                                            .card-size{height:100%}
                                            .card-size2{height:100%}
                                            }
    
    
@media only screen and (max-width: 770px) {.h-adjust-size{font-size:20px;}    
                                            .p-adjust-size{font-size:18px;}
                                            }
    
</style>
<body>
    <!-- NAV -->
    
<?php

    
    include"google_translator.php";    
    if(isset($_GET['member_id'])){
         $_SESSION['member_id'] = $_GET['member_id'];
    }    
    
    include("header_footer/header_indx.php");
?>
       
    <main role="main">
        <section id="MainBanner">
            
                    <img class="d-block w-100" src="assets/images/main-bnr-min.jpg" alt="Imam a.s">

        </section>
        <div class="container-fluid"id="dua_carousel">
            <div class="row">
                <div class="col-md-12 carousel_adjustment">
                    <audio>
                        <source src="assets/audio/Dua ImameZamana.mp3" type="audio/mpeg">
                        <source src="assets/audio/Dua ImameZamana.mp3" type="audio/ogg">
                        Your browser does not support HTML5 video.
                  </audio>
                </div>
                <section>
                <div class="col-md-12">
                    <div class="row">                                     
                        <button class="btn btn-outline-success text-white  float-right mt-2 playBtn btn1" id="audio">Click here for Dua e Imam e Zamana &nbsp; <i class="fa fa-hand-o-left"></i></button>&nbsp;
                   <div id="removeBtn">
                    <button class="btn btn-outline-primary p-2 float-right mt-2 mr-2 btn-2" id="audioStop">Stop</button>
                   </div> 
                </div>
                </div>    
                <div class="row">
                    <div class="col-md-12 mt-lg-3 mt-md-3 mt-xl-3" id="text-appear"> 
                        <span id="text-show" class="font-italic">
                            <h5 class="animate__animated animate__fadeIn  text-center ayatNumber1">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ </h5>
                            <h5 class="animate__animated animate__fadeIn  text-right ayatNumber2">اللّهُمّ كُنْ لِوَلِيّكَ الحُجّةِ ابْنِ الحَسَنِ</h5>
                            <h5 class="animate__animated animate__fadeIn  text-right ayatNumber3"> صَلَوَاتُكَ عَلَيْهِ وَعَلَى آبَائِهِ</h5>
                            <h5 class="animate__animated animate__fadeIn  text-right ayatNumber4">فِي هذِهِ السَّاعَةِ وَفي كُلّ سَاعَةٍ</h5>
                            <h5 class="animate__animated animate__fadeIn  text-right ayatNumber5">وَلِيّاً وَحَافِظاً وَقَائِداً وَنَاصِراً وَدَلِيلاً وَعَيْناً</h5>
                            <h5 class="animate__animated animate__fadeIn  text-right ayatNumber6">حَتَّى تُسْكِنَهُ أَرْضَكَ طَوْعاً</h5>
                            <h5 class="animate__animated animate__fadeIn  text-right ayatNumber7">وَتُمَتّعَهُ فِيهَا طَوِيلاً</h5>
        
                        </span>
                        </div>
                </div>
               </section>
                
                </div>
        </div>
        <section id="Welcome" class="bg-dark py-1 text-center text-white fs-18 lh-2" >
            <div class="container pt-2">
                <div class="clearfix" id="english-lang">
                    <h2 class="text-white mb-2 h-adjust-size">WJCW Crowdfunding gives hope&#8230;</h2>
                    <p class="p-adjust-size">During a very difficult time for millions of people around the globe, where people have lost
                        their jobs and have no money due to the Covid-19 and have little hope, this crowdfunding
                        platform gives hope.</p>
                    <p class="p-adjust-size">WJCW Crowdfunding is the first welfare platform of its kind in the world which was established in
                        2020 for the Community around the globe with the aim of providing a range of benefits to its
                        members. Do not be hopeless of God&#8217;s blessings and join us on this journey.</p>
                </div>
                </div>
        </section>
        
        <section id="Welcome2" class="bg-dark py-1 text-center text-white fs-18 lh-2" style="display:none">
            <div class="container pt-2">
                <div class="clearfix" id="english-lang">
                    <h2 class="text-white mb-2 h-adjust-size">WJCW Crowdfunding gives hope&#8230;</h2>
                    <p class="p-adjust-size">During a very difficult time for millions of people around the globe, where people have lost
                        their jobs and have no money due to the Covid-19 and have little hope, this crowdfunding
                        platform gives hope. WJCW Crowdfunding is the first welfare platform of its kind in the world which was established in
                        2020 for the Community around the globe with the aim of providing a range of benefits to its
                        members. Do not be hopeless of God&#8217;s blessings and join us on this journey.</p>
                </div>
                </div>
        </section>

        <!-- Main-Text_End -->
        <!-- Cards -->
        <section id="Work" class="bg-primary py-1 text-center text-white section-height">
            <div class="container" >
                <div class="h2 text-white h-adjust-size">How does WJCW CF work ?</div>
                <div class="hm-txt">
                    <p class="p-adjust-size">WJCW is a straightforward way to gather funds. There are very easy steps :</p>
                </div>
                <div class="card-deck text-dark">
                    <div class="card border-0 rounded-0 shadow-lg card-size"  data-aos="flip-left">
                        <div class="card-img"><img src="assets/images/hm-pic1.jpg" alt="A GIFT/DONATION" class="d-block w-100"></div>
                        <div class="card-body px-2 d-blo">
                            <div class="text-success mb-0  h2 font-weight-bolder h-adjust-size">01</div>
                            <h4 class="text-success font-weight-bolder text-uppercase mb-1 h-adjust-size">A GIFT/DONATION</h4>
                            <p class="p-adjust-size">First register and send gift/donate to became an active member</p>
                            
                        </div>
                    </div>
                    <div class="d-block w-100 d-md-none"></div>
                    <div class="card border-0 rounded-0 shadow card-size card-size2"  data-aos="fade-up">
                        <div class="card-img"><img src="assets/images/hm-pic2.jpg" alt="SHARE WITH THE COMMUNITY "
                                class="d-block w-100"></div>
                        <div class="card-body px-2">
                            <div class="text-success mb-0 h2 font-weight-bolder h-adjust-size">02</div>
                            <h4 class="text-success font-weight-bolder text-uppercase mb-1 h-adjust-size">SHARE WITH THE COMMUNITY
                            </h4>
                            <p class="p-adjust-size">Help two or more become active members</p>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 shadow card-size" data-aos="flip-right">
                        <div class="card-img"><img src="assets/images/hm-pic3.jpg" alt="RECEIVE GIFTS/ DONATIONS"
                                class="d-block w-100"></div>
                        <div class="card-body px-2">
                            <div class="text-success mb-0 numb h2 font-weight-bolder h-adjust-size">03</div>
                            <h4 class="text-success font-weight-bolder text-uppercase mb-1 h-adjust-size">RECEIVE GIFTS/ DONATIONS</h4>
                            <p class="p-adjust-size">When they help two or more people become active members, you will start receiving gifts and donations active member</p>
                        </div>
                    </div>
                </div>
                
                <!--<a href="" class="btn btn-success btn-lg my-5 px-5 py-3 shadow"><span class="px-sm-5">Learn-->
                <!--        More</span></a>-->
            </div>
        </section>
            <!-- CARDS END -->

           
               
           
            <!-- Video Section -->
<!--    <section id="Video">  style="margin-left: 100px" -->
<!--      <hr style="  border: 2px solid green; border-radius: 2px;">-->
       <div class="container-fluid" style="background-image: linear-gradient(green, lightgreen 38%, #AD0000,  #7E0E02, #6E0C02);" id="large_screen">
       <div class="row">
           <div class="col-md-1">
<!--               <img src="assets/images/mlm/LineBreak_Vertical2.jpg" id="img_border1" style="height:100px; width:100%">-->
           </div>
           <div class="col-md-10" style="top:3px">
                <video width="101%" controls>
                  <source src="assets/video/intro.mp4" type="video/mp4">
                  Your browser does not support HTML video.
        </video>
        </div>
           <div class="col-md-1">
<!--               <img src="assets/images/mlm/LineBreak_Vertical.jpg" id="img_border2" style="height:100px; width:80%">-->
           </div>
        </div>
        </div>
<!--    </section>-->
           
        <video width="100%" controls id="small_screen">
          <source src="assets/video/intro.mp4" type="video/mp4">
          Your browser does not support HTML video.
        </video>
           
           
            <!-- Video Section End -->

            <!-- Carousel -->
        <section id="AIMS" class="py-3 text-center " >
            <div class="container py-md-3">
                <div class="h1 text-success font-weight-bolder mb-1 h-adjust-size">We will do best for you&#8230;</div>
                <p class="p-adjust-size">we invite you to join us and encourage others to join this noble cause were there are benefits for
                    everyone. WJCW CF begins from your willingness to help one another. We will achieve more When we
                    work together like one family.</p>
                <div class="h1 text-success font-weight-bolder pt-1 h-adjust-size">WJCW CROWDFUNDING'S AIMS</div>
                    </div>
            
            
        </section>
       <div class="container">
        <div  id="rtl">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                        <a href="pages/financialfreedom.php">
                        <img src="assets/images/hm-pic4.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Financial Freedom</p>
                        </a>
                        
                        </div>
                        <div class="item">
                            <a href="pages/RealEstate.php">
                            <img src="assets/images/real_estate/house.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Real Estate</p>
                            </a>
                        </div>
                       
                        <div class="item">
                            <a href="pages/help_reduce_poverty_around_globe.php">
                        <img src="assets/images/help_reduce_poverty/poverty.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Help To Reduce Poverty Around The Globe</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="pages/Education.php">
                                <img src="assets/images/education/toddlers.jpg" class="carousel_image" alt="">
                                <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Education</p>
                            </a>
                         </div>
                        <div class="item">
                            <a href="pages/business.php">
                                <img src="assets/images/business/meeting.jpg" class="carousel_image" alt="">
                                <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Business</p>
                            </a>
                         </div>
                         
                        <div class="item">
                        <a href="pages/Departmental Stores Discounts For Members.php">
                        <img src="assets/images/depatmental_store/shop.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Departmental Stores Discounts For Members</p>
                        </a>    
                        </div>
                        <div class="item">
                            <a href="pages/Charity.php">
                            <img src="assets/images/charity/charity.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Charity</p>
                            </a>
                            </div>
                        <div class="item">
                        <a href="pages/Homeless Shelter.php">
                        <img src="assets/images/homeless_shelter/help.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Homeless Shelter</p>
                        </a>    
                        </div>
                        
                        <div class="item">
                        <a href="pages/funeral.php">
                        <img src="assets/images/funeral/graveyard.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Funeral</p>
                        </a>    
                        </div>
                        
                        <div class="item">
                        <a href="pages/Private Hospital For The Community.php">
                        <img src="assets/images/private_hospital_for_the_community/unnamed.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Private Hospital For The Community</p>
                        </a>    
                       </div>
                        <div class="item">
                        <a href="pages/Orphanages Based Around The Globe.php">
                        <img src="assets/images/orphanage%20base%20around%20the%20gloab/IMG_1110.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Orphanages Based Around The Globe</p>
                        </a>    
                        </div>
                        <div class="item">
                        <a href="pages/Senior Citizen Homes Around The Globe.php">
                        <img src="assets/images/senior-citizens/home2.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Senior Citizen Homes Around The Globe</p>
                        </a>    
                       </div>
                        <div class="item">
                        <a href="pages/free_holidays.php">
                        <img src="assets/images/free_holidays/relax.jpg" class="carousel_image" alt="">
                        <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Free Holidays</p>
                        </a>    
                        </div>

                        <div class="item">
                        <a href="pages/haj.php">
                        <img src="assets/images/ziaraat_umrah_haj/haj_650x400.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Free Haj</p>
                        </a>    
                       </div>
                       <div class="item">
                        <a href="pages/haj.php">
                        <img src="assets/images/harm.jpeg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Free Haj</p>
                        </a>    
                       </div>

                        <div class="item">
                        <a href="pages/umrah.php">
                        <img src="assets/images/ziaraat_umrah_haj/umrah1.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Free Umrah</p>
                        </a>    
                       </div>
                        <div class="item">
                        <a href="pages/ziaraat.php">
                        <img src="assets/images/ziaraat_umrah_haj/imam-hussain-tomb.jpeg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Free Ziaraat</p>
                        </a>    
                       </div>

                        <div class="item">
                        <a href="pages/wedding.php">
                        <img src="assets/images/wedding/hands_combine.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Wedding</p>
                        </a>    
                       </div>
                        
                        <div class="item">
                        <a href="pages/loan.php">
                        <img src="assets/images/loan/cards.jpg" class="carousel_image" alt="">
                            <p class="h4 fs-11 text-center text dark pl-3 pr-3 pt-3 mb-0 font-weight-bolder">Loan Debit Credit</p>
                        </a>    
                       </div>
                    </div>
                    <div class="owl-controls" >
                        <div class="owl-nav">
                            <a class="owl-prev" id="owl-prev" role="button"><img src="assets/images/arrow-left.png" alt=""> </a>
                            <a class="owl-next" id="owl-next" role="button"><img src="assets/images/arrow-right.png" alt=""></a>
                        </div>
                    </div>
                    
                </div>
            </div>
                    <div class="owl-controls" id='sliding_arrows'>
                        <div class="owl-nav" style='position:relative; top:-30px'>
                            <a class="owl-prev" id="btn_ltr" role="button" style='position:absolute; left:400px'><img src="assets/images/arrow_backward.jpg" alt=""> </a>
                            <a class="owl-next" id="btn_rtl" role="button" style='position:absolute; right:400px'><img src="assets/images/arrow_forward.jpg" alt=""></a>
                        </div>
                    </div>
        </div>
        </div>

        <!-- Caraousel End -->
    </main>
    <!-- Main-Text -->
   
        <!-- Footer -->
    <?php include("header_footer/footer_indx.php") ?>    
    <!-- Footer Ends -->
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/links/owl.carousel.min.js"></script>
<script src="js/site.js"></script>
<script>
const nextIcon = '<img src="assets/images/arrow_backward.jpg" alt="" id="btn_rtl">';    
const prevIcon = '<img src="assets/images/arrow_forward.jpg" alt="">';    
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
//    nav:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }

});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})    

$("#btn_rtl").click(function(){
    $.ajax({
        url:"owl-carousel-rtl.php",
        method:"post",
        data:{},
        success:function(data){
            $("#rtl").html(data);
        }
    })
})

$("#btn_ltr").click(function(){
    $.ajax({
        url:"owl-carousel-ltr.php",
        method:"post",
        data:{},
        success:function(data){
            $("#rtl").html(data);
        }
    })
})
//@media only screen and (max-width: 1426px) {#five_principals_role{position: absolute; right: 115px;  top: 28%}}
if($(window).width() > 767) {
$("#large_screen").show();
$("#small_screen").hide();
}
if($(window).width() < 768){
$("#large_screen").hide();
$("#small_screen").show();
}
if($(window).width() < 768){
$("#large_screen").hide();
$("#small_screen").show();
}
var div_large_screen = $("#large_screen").height() * 1.122;
$("#img_border1").height(div_large_screen);
$("#img_border2").height(div_large_screen);


</script>
</html>