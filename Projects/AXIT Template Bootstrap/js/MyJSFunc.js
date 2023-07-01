$(function () {
    'use strict';
    $(window).scroll(function(){
        var navbar = $('.navbar');
        if($(window).scrollTop() >= navbar.height()){
            navbar.addClass('selected');
        }else{
            navbar.removeClass('selected');
        };
    });

    //tabs section
    $('.tabs .tabs-switch li').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('.tabs .tabs-content > div ').hide();
        $('.' + $(this).data('class')).show();
    });

    //scroll to sections
    $(document).on('click', 'a[href^="#"]', function (e) {
        e.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000, 'linear');
    });

    //add active class to navbar 
    $('.navbar ul li' ).click (function () {
        $(this).addClass('active').siblings().removeClass('active');
    });

    //loading section
    $(window).load(function () {
        $('.loading-overlay .spinner').fadeOut(2000, function(){
            $(this).parent().fadeOut(2000, function() {
                $(this).remove();
            });
        });
    });
    
    //scroll top button
    var scrollButton = $('#scroll-top');
    $(window).scroll(function () {
       if($(this).scrollTop() >= 700) {
           scrollButton.show();
       }else {
           scrollButton.hide();
       }
       
    });
    scrollButton.click(function() {
        $('html,body').animate({
            scrollTop:0
        },600)
    });
    
    
});
