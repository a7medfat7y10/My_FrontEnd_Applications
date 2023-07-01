window.addEventListener('scroll', function() {
    let nav = document.querySelector('nav');
    let windowPosition = window.scrollY > 100;
    nav.classList.toggle('scrolling-active', windowPosition);
})



var nav = document.getElementById('nav');
window.onscroll = function() {
    if (window.pageYOffset > 100) {
        nav.style.background = "rgba(0,0,0,.7)";
    } else {
        nav.style.background = "transparent";
    }
};



// ----------------------------------------------------------


const selectElement = function(element) {
    return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let b = selectElement('header');

menuToggler.addEventListener('click', function() {
    b.classList.toggle('open')
});





// ---------------------------------------------------------




var options = {
    accessibility: true,
    prevNextButtons: true,
    pageDots: true,
    setGallerySize: false,
    arrowShape: {
        x0: 10,
        x1: 60,
        y1: 50,
        x2: 60,
        y2: 45,
        x3: 15
    }
};

var carousel = document.querySelector('[data-carousel]');
var slides = document.getElementsByClassName('carousel-cell');
var flkty = new Flickity(carousel, options);

flkty.on('scroll', function() {
    flkty.slides.forEach(function(slide, i) {
        var image = slides[i];
        var x = (slide.target + flkty.x) * -1 / 3;
        image.style.backgroundPosition = x + 'px';
    });
});



var n = 0

function read() {
    if (!n) {
        document.getElementById("more").style.display = "inline";
        n = 1;
    } else {
        document.getElementById("more").style.display = "none";
        n = 0;
    }
}
var m = 0

function read1() {
    if (!m) {
        document.getElementById("more1").style.display = "inline";
        m = 1;
    } else {
        document.getElementById("more1").style.display = "none";
        m = 0;
    }
}


var k = 0

function read2() {
    if (!k) {
        document.getElementById("more2").style.display = "inline";
        k = 1;
    } else {
        document.getElementById("more2").style.display = "none";
        k = 0;
    }
}


var l = 0

function read3() {
    if (!l) {
        document.getElementById("more3").style.display = "inline";
        l = 1;
    } else {
        document.getElementById("more3").style.display = "none";
        l = 0;
    }
}


var h = 0

function read4() {
    if (!h) {
        document.getElementById("more4").style.display = "inline";
        h = 1;
    } else {
        document.getElementById("more4").style.display = "none";
        h = 0;
    }
}
var z = 0

function read5() {
    if (!z) {
        document.getElementById("more5").style.display = "inline";
        z = 1;
    } else {
        document.getElementById("more5").style.display = "none";
        z = 0;
    }
}




// ----------------------------------------------------------------


var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
var modal5 = document.getElementById("myModal5");
var modal6 = document.getElementById("myModal6");
var modal7 = document.getElementById("myModal7");
var modal8 = document.getElementById("myModal8");
var modal9 = document.getElementById("myModal9");
var modal10 = document.getElementById("myModal10");
var modal11 = document.getElementById("myModal11");
var modal12 = document.getElementById("myModal12");
var modal13 = document.getElementById("myModal13");
var modal14 = document.getElementById("myModal14");
var modal15 = document.getElementById("myModal15");
var modal16 = document.getElementById("myModal16");
var modal17 = document.getElementById("myModal17");
var modal18 = document.getElementById("myModal18");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");
var btn9 = document.getElementById("myBtn9");
var btn10 = document.getElementById("myBtn10");
var btn11 = document.getElementById("myBtn11");
var btn12 = document.getElementById("myBtn12");
var btn13 = document.getElementById("myBtn13");
var btn14 = document.getElementById("myBtn14");
var btn15 = document.getElementById("myBtn15");
var btn16 = document.getElementById("myBtn16");
var btn17 = document.getElementById("myBtn17");
var btn18 = document.getElementById("myBtn18");



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];
var span5 = document.getElementsByClassName("close5")[0];
var span6 = document.getElementsByClassName("close6")[0];
var span7 = document.getElementsByClassName("close7")[0];
var span8 = document.getElementsByClassName("close8")[0];
var span9 = document.getElementsByClassName("close9")[0];
var span10 = document.getElementsByClassName("close10")[0];
var span11 = document.getElementsByClassName("close11")[0];
var span12 = document.getElementsByClassName("close12")[0];
var span13 = document.getElementsByClassName("close13")[0];
var span14 = document.getElementsByClassName("close14")[0];
var span15 = document.getElementsByClassName("close15")[0];
var span16 = document.getElementsByClassName("close16")[0];
var span17 = document.getElementsByClassName("close17")[0];
var span18 = document.getElementsByClassName("close18")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}




// ----------------------

btn1.onclick = function() {
    modal1.style.display = "block";
}

span1.onclick = function() {
    modal1.style.display = "none";
}

// ---------------------------

btn2.onclick = function() {
    modal2.style.display = "block";
}

span2.onclick = function() {
        modal2.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn3.onclick = function() {
    modal3.style.display = "block";
}

span3.onclick = function() {
        modal3.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn4.onclick = function() {
    modal4.style.display = "block";
}

span4.onclick = function() {
        modal4.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn5.onclick = function() {
    modal5.style.display = "block";
}

span5.onclick = function() {
        modal5.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn6.onclick = function() {
    modal6.style.display = "block";
}

span6.onclick = function() {
        modal6.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn7.onclick = function() {
    modal7.style.display = "block";
}

span7.onclick = function() {
        modal7.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn8.onclick = function() {
    modal8.style.display = "block";
}

span8.onclick = function() {
        modal8.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn9.onclick = function() {
    modal9.style.display = "block";
}

span9.onclick = function() {
        modal9.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn10.onclick = function() {
    modal10.style.display = "block";
}

span10.onclick = function() {
        modal10.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn11.onclick = function() {
    modal11.style.display = "block";
}

span11.onclick = function() {
        modal11.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn12.onclick = function() {
    modal12.style.display = "block";
}

span12.onclick = function() {
        modal12.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn13.onclick = function() {
    modal13.style.display = "block";
}

span13.onclick = function() {
        modal13.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn14.onclick = function() {
    modal14.style.display = "block";
}

span14.onclick = function() {
        modal14.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn15.onclick = function() {
    modal15.style.display = "block";
}

span15.onclick = function() {
        modal15.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn16.onclick = function() {
    modal16.style.display = "block";
}

span16.onclick = function() {
        modal16.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn17.onclick = function() {
    modal17.style.display = "block";
}

span17.onclick = function() {
        modal17.style.display = "none";
    }
    // --------------------------
    // ---------------------------

btn18.onclick = function() {
    modal18.style.display = "block";
}

span18.onclick = function() {
        modal18.style.display = "none";
    }
    // --------------------------