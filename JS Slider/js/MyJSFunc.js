
//get slider elements
var sliderImages = Array.from(document.querySelectorAll('.slider-container img'));
//get number of slides
var slidesCount = sliderImages.length;
//set current slide
var currentSlide = 3;
//slide number element
var slideNumberElement = document.getElementById('slide-number');
//prev and next buttons
var nextButton = document.getElementById('next');
var prevButton = document.getElementById('prev');
//handle click on prev and next buttons
nextButton.onclick = nextSlide;
prevButton.onclick = prevSlide;

//create the main ul element
var paginationElement = document.createElement('ul');
//set id on created ul element
paginationElement.setAttribute('id',  'pagination-ul');
//create list items based on slidecount
for(var i = 1; i <= slidesCount; i++) {
    //create li
    var paginationItem = document.createElement('li');
    //set custom attribute
    paginationItem.setAttribute('data-index',  i);
    //set item content
    paginationItem.appendChild(document.createTextNode(i));
    //append items to the ul list
    paginationElement.appendChild(paginationItem);
}
//add the created ul element to the page
document.getElementById('indicators').appendChild(paginationElement);

//get the new created ul
var paginationCreatedUl = document.getElementById('pagination-ul');

//get pagination items
var paginationsBullets = Array.from(document.querySelectorAll('#pagination-ul li'));


//loop through all bullets items
for (var i = 0; i < paginationsBullets.length; i++){
    paginationsBullets[i].onclick = function () {
        currentSlide = parseInt(this.getAttribute('data-index'));
        theChecker();
    }
}

//trigger the checker function
theChecker();

//next slide function
function nextSlide() {
    if(nextButton.classList.contains('disabled')) {
        return false;
    }else{
        currentSlide++;
        theChecker();
        
    }
}
//prev slide function
function prevSlide() {
    if(prevButton.classList.contains('disabled')) {
        return false;
    }else{
        currentSlide--;
        theChecker();
    }
}



//create the checker function
 function theChecker () {

    //set the slide number
    slideNumberElement.innerHTML = 'Slide #' + (currentSlide) + ' of ' + (slidesCount);
    
    //remove all active classes
    removeAllActive();
   

    //set active class on current slide
    sliderImages[currentSlide - 1].classList.add('active');
    //set active class on current pagination item
    paginationCreatedUl.children[currentSlide - 1].classList.add('active');
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
        nextvButton.classList.remove('disabled');
    }
};


//remove all active classes from images and pagination bullets
function removeAllActive() {
    //loop through images
    sliderImages.forEach(function(img) {
        img.classList.remove('active');

    });
    //loop through pagination bullets
    paginationsBullets.forEach(function(bullet){
        bullet.classList.remove('active');
    })
}
