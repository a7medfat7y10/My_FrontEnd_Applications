//get slider elements
var sliderImages = Array.from(document.querySelectorAll('.slider-container img'));
//get number of slides
var slidesCount = sliderImages.length;
//set current slide
var currentSlide = 2;
//slide number element
// var slideNumberElement = document.getElementById('slide-number');

//prev and next buttons
var nextButton = document.getElementById('next');
var prevButton = document.getElementById('prev');
//handle click on prev and next buttons
nextButton.onclick = nextSlide;
prevButton.onclick = prevSlide;



//trigger the checker function
theChecker();

//next slide function
function nextSlide() {
    if(nextButton.classList.contains('disabled')) {
        return false;
    }else{
        currentSlide++;
        
        theChecker();
        $('.slider-container > img').each(function(){
            console.log($(this).css('left'));
            console.log(($('.slider-container').width())* .3);
            percent = ($('.slider-container').width())* .3;
            left = parseFloat($(this).css('left'));
            $(this).css('left', left - percent);
        });
    }
}
//prev slide function
function prevSlide() {
    if(prevButton.classList.contains('disabled')) {
        return false
    }else{
        currentSlide--;
        theChecker();
        $('.slider-container > img').each(function(){
            console.log($(this).css('left'));
            console.log(($('.slider-container').width())* .3);
            percent = ($('.slider-container').width())* .3;
            left = parseFloat($(this).css('left'));
            $(this).css('left', left + percent);
        });
    }
}



//create the checker function
 function theChecker () {
    //set the slide number
    // slideNumberElement.innerHTML = 'Slide #' + (currentSlide) + ' of ' + (slidesCount);
    
    //remove all active classes
    removeAllActive();
   

    //set active class on current slide
    sliderImages[currentSlide - 1].classList.add('active');
    //check if current slide is the first
    if (currentSlide == 1) {
        //add disabled class on prev button
        prevButton.classList.add('disabled');

    }else {
        //remove disabled class from prev button
        prevButton.classList.remove('disabled');
    }
     //check if current slide is the last
     if (currentSlide == slidesCount) {
        //add disabled class on prev button
        nextButton.classList.add('disabled');

    }else {
        //remove disabled class from prev button
        nextButton.classList.remove('disabled');
    }
};


//remove all active classes from images and pagination bullets
function removeAllActive() {
    //loop through images
    sliderImages.forEach(function(img) {
        img.classList.remove('active');

    });
}
