(function carouselSlider($) {
    $('.paragraph--type--carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true, 
        draggable: true,
        nextArrow: '<span class="slick-next"></span>',
        prevArrow: '<span class="slick-prev"></span>',
        responsive: [
            {
              breakpoint: 1180,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
              breakpoint: 1023,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      }).on('afterChange',function(event){
        fixVerticalArrows();
      }).trigger('afterChange');
      $(window).resize(function(){
        fixVerticalArrows();
      })

  function fixVerticalArrows(){
    var h = ($('.carousel-item').find("img").height()/2-20.5);
    $('.slick-arrow').css('top',h+'px');
  }   
})(jQuery);

 