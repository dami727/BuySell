$(document).ready(function(){
    $('.local_top_buyer').owlCarousel({
        loop: true,
        margin: 5,
        dots: false,
        nav: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 800,
        autoHeight: false,
        autoplay: true,
        autoplayTimeout:2500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
    $('.international_top_buyer').owlCarousel({
        loop: true,
        margin: 5,
        dots: false,
        nav: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1500,
        autoHeight: false,
        autoplay: true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
});