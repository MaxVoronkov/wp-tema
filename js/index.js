$(document).ready(function(){
  $('.slider_js').slick({
    slidesToShow: 1,
    infinite: true,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 815,
        settings: {  

        }          
      }
    ],
  });

  ////////////////END SCROLL////////////////////////////////
  var wow = new WOW({
    //offset: 200, 
  });
  wow.init();


}); // end ready 


