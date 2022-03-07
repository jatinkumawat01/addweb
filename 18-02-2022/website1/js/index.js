$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
       $('#navbar').removeClass('fixed-top');
    } else {
       $('#navbar').addClass('fixed-top');
    }
});

$("#video_projects .owl-carousel").owlCarousel({
   loop: true,
   nav: false,
   dots: false,
   responsive : {
       600: {
           items: 1
       },
       
   }
});

const changePic = (e)=>{
    document.getElementById("main_image").src = e;
}
