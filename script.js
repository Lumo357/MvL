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
    

});