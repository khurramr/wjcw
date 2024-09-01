
    AOS.init();
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop:true,
            responsiveClass:true,
            margin:20,
            autoplay:true,
            autoplayTimeout:2000,
            responsive:{
                0:{
                    items:1,

                },
                600:{
                    items:2,
                },
                1000:{
                    items:3,
                },
            },
        })
                var owl = $('.owl-carousel');
        owl.owlCarousel();
        $('#owl-prev').on('click',function() {
            owl.trigger('prev.owl.carousel');
        })
        $('#owl-next').on('click',function() {
            owl.trigger('next.owl.carousel');
        })
        
    })
var audio = document.querySelector("#audio");
var stopAudio = document.querySelector("#audioStop");
var playAudio = document.querySelector("audio");

playAudio.addEventListener('ended', (event) => {
    document.querySelector('#audioStop').style.display ="none";
    document.querySelector('#text-appear').style.display ="none";

});
stopAudio.addEventListener('click', function(){
    document.querySelector('#text-appear').style.display ="none";
    playAudio.pause();
    playAudio.currentTime = 0;

})
audio.addEventListener('click', function(){
    playAudio.play();
    document.querySelector('#audioStop').style.display ="block";
    document.querySelector('#text-appear').style.display ="block";
    
});