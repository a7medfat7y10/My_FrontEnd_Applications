	var Form = document.getElementById("recruit");
	var Phone = Form["phone"];
	var subButton = document.getElementById("submit");  
	var Name = document.getElementById("name");
	var Email= document.getElementById("email");
	var validname = document.getElementById("validname");




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
function emailVal(){
    var Email= document.getElementById("email");
    var validEmail= document.getElementById("validemail");
   if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Email.value)){
    validEmail.textContent="";
    }else{
			 validEmail.textContent="Invalid Email!";
		}
}

