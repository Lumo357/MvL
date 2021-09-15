$(function() {
    $('.player-block').click(function() {
        var index = $('.player-block').index(this);
        $('.player-detail').eq(index).fadeIn();
    });

    $('.close-player-detail').click(function() {
        $('.player-detail').fadeOut();
    });

});

