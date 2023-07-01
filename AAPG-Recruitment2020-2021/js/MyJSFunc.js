/**
 * Created by Mahmoud Badawy on 16/05/2017.
 */
var tap1 = document.getElementById("tap1");
	var tap2 = document.getElementById("tap2");
	var tap3 = document.getElementById("tap3");
	var Progress = document.getElementById("prog");
	var Form = document.getElementById("recruit");
	var Phone = Form["phone"];
	var subButton = document.getElementById("submit");
	var commAlert1 = document.getElementById("comm1");
  	var commAlert2 = document.getElementById("comm2");

function fPage(){
	tap1.style.display="block";
	tap2.style.display="none";
	tap3.style.display="none";
	Progress.style.width="1%"
}	
function sPage(){
	tap1.style.display="none";
	tap2.style.display="block";
	tap3.style.display="none";
	Progress.style.width="33.3%";

}
function tPage(){
	tap1.style.display="none";
	tap2.style.display="none";
	tap3.style.display="block";
	Progress.style.width="66.66%";
}
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
function commVal(){
	var Comm1 = document.getElementById("committee1");
	var Comm2 = document.getElementById("committee2");
	if(Comm1.value === Comm2.value || Comm1.value == "None" || Comm2.value==="None"){
		Comm1.style.border="1px solid red";
		Comm2.style.border="1px solid red";
		commAlert1.textContent = "Invalid Choices";
		commAlert2.textContent = "Invalid Choices";
		subButton.disabled=true;
	}else{
		Comm1.style.border="0px solid red";
		Comm2.style.border="0px solid red";
		commAlert1.textContent = "";
		commAlert2.textContent = "";
		subButton.disabled=false;
	}
}
$(window).load(function(){

});


