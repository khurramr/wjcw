<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />     
    
</head>
<body>
<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css");

@import url("https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.css");

@import url("https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.css");

@import url("https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.transitions.min.css");

@import url("https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.min.css");

@import url("https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.transitions.css");


#owl-demo .item{
    background: #42bdc2;
    padding: 30px 0px;
    margin: 5px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
}    
</style>

<h1>Owl carousel 1.3.2 demo</h1>

<div id="owl-demo" class="owl-carousel owl-theme">
  <div class="item"><h1>1</h1></div>
  <div class="item"><h1>2</h1></div>
  <div class="item"><h1>3</h1></div>
  <div class="item"><h1>4</h1></div>
  <div class="item"><h1>5</h1></div>
  <div class="item"><h1>6</h1></div>
</div>
</body>
<!--<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/links/owl.carousel.min.js"></script>
<!--<script src="js/site.js"></script>-->

<script>
$(document).ready(function() {
  
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
     
      navigation : true,

  navigationText: ["◀ Left <strong>arrow</strong>","Right <strong>arrow</strong> ▶"]
  });
});


  
 </script>
</html>