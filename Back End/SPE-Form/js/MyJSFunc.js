	var Form = document.getElementById("recruit");
	var Phone = Form["phone"];
	var subButton = document.getElementById("submit");
	  
	var Name = document.getElementById("name");
	var faculty = document.getElementById("faculty");
	var Depart = document.getElementById("Depart");
	var Academic = document.getElementById("academic");
	var Email= document.getElementById("email");
	var Facebook= document.getElementById("facebook");

	var validname = document.getElementById("validname");
	var validfaculty = document.getElementById("validfaculty");
	var validdepart = document.getElementById("validdepart");

subButton.onsubmit = function() {
	if(Name.value == '') {
		validname.innerHTML = 'You Must Enter Your Full Name'
	} else {
		validname.innerHTML = ''
	}
	if(faculty.value == '') {
		validfaculty.innerHTML = 'You Must Enter Your Faculty'
	} else {
		validfaculty.innerHTML = ''
	}
	if(Depart.value == '') {
		validdepart.innerHTML = 'You Must Enter Your Department'
	} else {
		validdepart.innerHTML = ''
	}
	academicVal();
	facebookVal();
	emailVal();
	phoneVal();
};


function preventSC(input){
	var regex = /[^A-Za-z\d\s]/;
	input.value = input.value.replace(regex , "");}


function phoneVal(){
	var num = document.getElementById("validPhone");
	if (Phone.value.length === 11){
		num.innerHTML="";
		subButton.disabled=false;
	}else{
		num.innerHTML="Invalid Phone Number!";
		subButton.disabled=true;
	}
}
function academicVal(){
    var Academic = document.getElementById("academic");
    var academicValid = document.getElementById("validacademic");
    if(Academic.value==""){
        academicValid.textContent="Invalid Choice";
    }else{
        academicValid.textContent="";
    }
}
function emailVal(){
    var Email= document.getElementById("email");
    var validEmail= document.getElementById("validemail");
   if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Email.value)){
    validEmail.textContent="";
    }else{
			 validEmail.textContent="Invalid Email!";
		}
}
function facebookVal(){
    var Facebook= document.getElementById("facebook");
    var validfacebook= document.getElementById("validfacebook");
   if(/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(Facebook.value)){
    validfacebook.textContent="";
    }else{
		validfacebook.textContent="Invalid URL!";
	}
}


	



		


		
		
	
		
	

