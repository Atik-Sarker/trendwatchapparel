jQuery(document).ready(function () {
    jQuery('#home .mobile-menu').meanmenu();
    //    meanmenu js end
    $('.main-slider').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        nav: true,
        autoplayHoverPause: false,
        margin: 0,
        smartSpeed: 500,
        autoplayTimeout: 4000,
        mouseDrag: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 1,
                nav: false
            },
            992: {
                items: 1,
                nav: false,
                loop: true,
            },
            1192: {
                items: 1,
                nav: false,
                loop: true,
            }
        }
    });
    //    slider end
    $('.news-slider').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        nav: false,
        animateOut: 'flipOutX',
        animateIn: 'flipInX',
        autoplayHoverPause: false,
        margin: 0,
        smartSpeed: 8000,
        autoplayTimeout: 6000,
        mouseDrag: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsiveClass: true,
    });
    //    slider end
    try {
        Typekit.load();
    } catch (e) {}
    //   typekit js
    new WOW().init();
    //    wow js
});
