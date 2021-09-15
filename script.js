$(function() {
       
    $('.menu-icon').click(function() {
        $('#menu-bar').slideToggle();

    });

    if(window.matchMedia("(min-width: 800px)").matches){
        $('.player-block').click(function() {
          var index = $('.player-block').index(this);
          $('.player-detail').eq(index).fadeIn();
          });
  
          $('.close-player-detail').click(function() {
              $('.player-detail').fadeOut();
          });  
      }
       
       $('.player-top-list').slick({
        infinite: true,
        slidesToShow: 3,
        //slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive:[
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                }
            },

            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                }
            },
        ] 

    });
    

});
