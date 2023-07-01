$(function () {
    'use strict';
    //dashboard
    $('.toggle-info').click(function () {
        $(this).toggleClass('selected').parent().next('.panel-body').fadeToggle(100);
        if ($(this).hasClass('selected') ) {
            $(this).html('<i class="fa fa-minus"></i>'); 
        }else{
            $(this).html('<i class="fa fa-plus"></i>')
        }
    });



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

    //add show pass eye 
    $('.show-password').hover(function() {
        $('.password').attr('type', 'text');
    }, function() {
        $('.password').attr('type', 'password');
    });


    //confirmation message on delete button
    $('.confirmation').click(function() {
        return confirm('Are You Sure?')
    });

    // category view option
    $('.cat h3' ).click (function(){
        $(this).next('.full-view').fadeToggle(200);
    });
    $('.option span').click(function(){
        $(this).addClass('active').siblings('span').removeClass('active');
        if($(this).data('view') === 'full') {
            $('.cat .full-view').fadeIn(200);
        } else {
            $('.cat .full-view').fadeOut(200);
        }
    })

    //category show delete on hover
    $('.child-link').hover(function () {
        $(this).find('.show-delete').fadeIn(400);
    }, function () {
        $(this).find('.show-delete').fadeOut(400);
    });
});