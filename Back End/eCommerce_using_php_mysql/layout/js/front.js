$(function () {
    'use strict';




    //hide place holder on focus
    $('[placeholder]').focus(function() {
        $(this).attr('data-text' , $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function () {
        $(this).attr('placeholder', $(this).attr('data-text'));
    });


    //add asterisk
    $('input').each(function () {
        if($(this).attr('required') === 'required') {
            $(this).after('<span class="asterisk">*</span>');
        }
    });

   

    //confirmation message on delete button
    $('.confirmation').click(function() {
        return confirm('Are You Sure?');
    });

    //switch between login and signup
    $('.login-page h1 span').click(function () {
        $(this).addClass('selected').siblings().removeClass('selected');
        $('.login-page form').hide();
        $('.' + $(this).data('class')).fadeIn(100);
    })
    //live preview item add 
    $('.live').keyup(function() {
        $($(this).data('class')).text($(this).val());
    });
    
});