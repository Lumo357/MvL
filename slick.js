$(function() {
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