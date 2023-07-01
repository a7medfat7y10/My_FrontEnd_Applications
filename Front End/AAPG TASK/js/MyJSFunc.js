
//append login to navbar
var list = document.getElementById('list');
var myli = document.createElement("li");
var mya = document.createElement("a");
myli.appendChild(mya);
var mybutton = document.createElement('button');
mybutton.value="Login"; 
mybutton.innerHTML="Login"; 
mybutton.style.background="none";
mybutton.style.border="none";
mya.appendChild(mybutton);
list.appendChild(myli);
myli.onclick = function() {
    mybutton.click();
}


//append signup to navbar
var list = document.getElementById('list');
var myli2 = document.createElement("li");
var mya2 = document.createElement("a");
myli2.appendChild(mya2);
var mybutton2 = document.createElement('button');
mybutton2.value="Signup"; 
mybutton2.innerHTML="Signup"; 
mybutton2.style.background="none";
mybutton2.style.border="none";
mya2.appendChild(mybutton2);
list.appendChild(myli2);
myli2.onclick = function() {
    mybutton2.click();
}




//login button
mybutton.onclick=function(){
    // console.log('clicked');
    var table = document.getElementById('table');
    table.style.display="none";
    var login= document.getElementById('login');
    login.style.display="block";
    var signup= document.getElementById('signup');
    signup.style.display="none";
}
//signup button
mybutton2.onclick=function(){
    // console.log('clicked');
    var signup= document.getElementById('signup');
    signup.style.display="block";
    var login= document.getElementById('login');
    login.style.display="none";
    var table = document.getElementById('table');
    table.style.display="block";
    
}
//table
var signupbtn = document.getElementById('signupbtn');
signupbtn.onclick=function(e){
    e.preventDefault;
    var table = document.getElementById('table');
    table.style.display="block";
}
