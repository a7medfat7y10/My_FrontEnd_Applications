$(function (){
    //set height of the header background
    $('header').height($(window).height());
    $(window).resize(function(){
        $('header').height($(window).height());
    });
    //button next-section
    $('.next-section').on('click',function(){
        $('html, body').animate({
            scrollTop:$('header').height() - 70
        },1000)
    });
    //fixed navbar
    $(window).on('scroll', function(){
        $('header .navbar').addClass('white-nav').removeClass('transparent');
        if($(window).scrollTop() == 0){
            $('header .navbar').removeClass('white-nav').addClass('transparent');
        }
    });
    //scroll to section animation
    $(document).on('click', '.navbar a[href^="#"]', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 50
        }, 1000, 'linear');
    });
    //show more button
    $('.portfolio .show-more').on('click', function () {
        console.log('clicked');
        $('.portfolio .row > div:nth-of-type(n+7) ').toggle();
        if($(this ).text() === 'Show More' ) {
            $(this).text('Show Less')
        }else {
            $(this).text('Show More')
        }
    })


    //count to plugin
    $('.timer-one').countTo({from: 0, to: 568});
    $('.timer-three').countTo({from: 0, to:724 });
    $('.timer-four').countTo({from: 0, to: 602});
    $('.timer-two').countTo({from: 0, to: 1465});

    //wow js and animate css
    new WOW().init();

    //scroll top button
    var scrollButton = $('#scroll-top');
    $(window).scroll(function () {
       if($(this).scrollTop() >= 800) {
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
    //nice scroll
    $("body").niceScroll({
        cursorcolor:"#34495e",
        cursorwidth:"10px",
        zindex:[9999],
        cursorborder:"none",
        cursorborderradius: "0",
        emulatetouch: true,
        smoothscroll:true
    });

});

