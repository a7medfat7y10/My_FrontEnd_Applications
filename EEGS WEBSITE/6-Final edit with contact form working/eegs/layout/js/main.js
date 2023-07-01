/*jslint browser:true */
/*global $, window*/



$(function () {
   
    'use strict';
    
    var $win = $(window),
        backgoundImage = $('section, .bg-image');

    $('.events .owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            700: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    // Scroll to specific Section
    $('.navbar .nav-item .scrolltosection').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('active').parent('.nav-item').siblings('.nav-item').find('.nav-link').removeClass('active');
        $('body,html').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top - $('nav').innerHeight()
        }, 1500);
    });

    

    // Header Menu
    $('header .navbar-nav .has-sub .menu li').on( "click",function () {
        $(this).toggleClass('isOpen');
        if ($(this).hasClass('isOpen')) {
            $(this).children('a').addClass('open')
        } else {
            $(this).children('a').removeClass('open')
        }
        $(this).children('ul').toggle();
    });
    
    // Header Menu in md screen
    if ($win.width() <= 991) {
        $('header .navbar-nav .has-sub .submenu-button').on( "click",function () { 
            $(this).next('.menu').toggle();
        });
    }






    $('.bg-image').each(function () {
        $(this).css('background-image', 'url(' +  'layout/images/Slider/' + $(this).data('image') + ')');
    });

    $('.hero-slider').owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        smartSpeed: 700
    });



    
    
    
});