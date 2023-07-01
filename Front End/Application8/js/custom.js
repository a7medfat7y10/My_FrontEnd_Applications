/*global $ */

(function () {
    
    'use strict';
    
    $('.navbar li a').click(function(){
        $(this).addClass('active').parent().siblings().find('a').removeClass('active')
    });
    
    $('.navbar li a').click(function(e){
        e.preventDefault();
        
        $('html , body').animate({
            scrollTop : $('.' + $(this).data('class')).offset().top
        },1000);
    });
    
    $('.info-list li').click(function () {
        $(this).addClass('selected').siblings('li').removeClass('selected');
        $('.info-content div').hide();
        $('.' + $(this).data('class')).fadeIn();
    });
    
});
