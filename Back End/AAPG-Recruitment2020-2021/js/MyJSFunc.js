	var tap1 = document.getElementById("tap1");
	var tap2 = document.getElementById("tap2");
	var tap3 = document.getElementById("tap3");
	var Form = document.getElementById("recruit");
	var Phone = Form["phone"];
	var subButton = document.getElementById("submit");
	var commAlert1 = document.getElementById("comm1");
	var commAlert2 = document.getElementById("comm2");
	  
	var Name = document.getElementById("name");
	var faculty = document.getElementById("faculty");
	var Depart = document.getElementById("Depart");
	var Academic = document.getElementById("academic");
	var Email= document.getElementById("email");
	var Facebook= document.getElementById("facebook");

	var validname = document.getElementById("validname");
	var validfaculty = document.getElementById("validfaculty");
	var validdepart = document.getElementById("validdepart");

	var validq1 = document.getElementById('validfield9');
	var validq2 = document.getElementById('validfield10');

	var Comm1 = document.getElementById("committee1");
	var Comm2 = document.getElementById("committee2");

	var button1 = document.getElementById("btn1");
	var button2 = document.getElementById("btn2");
	var button3 = document.getElementById("btn3");

function fPage(){
	tap1.style.display="block";
	tap2.style.display="none";
	tap3.style.display="none";
}	
function sPage(){
	if(Name.value != '' && faculty.value != '' && Depart.value != '' && Academic.value != '' && Phone.value != '' && Email.value != '' && Facebook.value != '') {
		tap1.style.display="none";
		tap2.style.display="block";
		tap3.style.display="none";
	} else {
		tap1.style.display="block";
		tap2.style.display="none";
		tap3.style.display="none";
	}
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
}
function tPage(){
	var q1 = document.getElementById('field9');
	var q2 = document.getElementById('field10');
	if (q1.value != '' && q2.value != '' && Comm1.value !== Comm2.value && Comm1.value !== 'None' && Comm2.value !== 'None' ){
		tap1.style.display="none";
		tap2.style.display="none";
		tap3.style.display="block";
	} else if(Name.value == '' || faculty.value == '' || Depart.value == '' || Academic.value == '' || Phone.value == '' || Email.value == '' || Facebook.value == '') {
		tap1.style.display="block";
		tap2.style.display="none";
		tap3.style.display="none";
	} else {
		tap1.style.display="none";
		tap2.style.display="block";
		tap3.style.display="none";
	}
	if(Name.value == '') {
		validname.innerHTML = 'You Must Enter Your Full Name'
	}else {
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
	if(q1.value =='') {
		validq1.innerHTML = 'This is required';
	} else {
		validq1.innerHTML = '';
	}
	if(q2.value =='') {
		validq2.innerHTML = 'This is required';
	} else {
		validq2.innerHTML = ''
	}
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
function facebookVal(){
    var Facebook= document.getElementById("facebook");
    var validfacebook= document.getElementById("validfacebook");
   if(/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(Facebook.value)){
    validfacebook.textContent="";
    }else{
		validfacebook.textContent="Invalid URL!";
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


//Jquery
$(document).ready(function(){
	
	// for writing effect on main screen
	var sentences = new Array("Campaign name" , "Campaign name" , "Campaign name");
	var sentenceNum = 0;
	var sentsLen = sentences.length;
	var currentSentence,exploded,currentLoc,curSentLen;
	
	function writeToMain(){
			
			$(".campaign .writing-jam").html("");
			currentSentence = sentences[sentenceNum];
			exploded = currentSentence.split("");
			currentLoc = 0;
			curSentLen = currentSentence.length;
		
		var interval = setInterval(function(){
			
			if(currentLoc == curSentLen){
				
				if(sentenceNum == sentsLen-1){
					sentenceNum = 0;
					clearInterval(interval);
					setTimeout(function(){
						var myPos = curSentLen;
						var clrStr = setInterval(function(){
							if(myPos == 0){
								
								clearInterval(clrStr);
								writeToMain();
							}else{
								var myStr = currentSentence.substr(0,myPos);
								myPos--;
								$(".campaign .writing-jam").html(myStr);
							}
							
						},15);
						
						
					},4000);
				}else{
					
					clearInterval(interval);
					setTimeout(function(){
						var myPos = curSentLen;
						var clrStr = setInterval(function(){
							if(myPos == 0){
								
								clearInterval(clrStr);
								writeToMain();
							}else{
								var myStr = currentSentence.substr(0,myPos);
								myPos--;
								$(".campaign .writing-jam").html(myStr);
							}
							
						},15);
						
						
					},4000);
					sentenceNum++;
				}
				
			}else{
				$(".campaign .writing-jam").append(exploded[currentLoc]);
				currentLoc++;
			}
			
		},60);
		
		
	};
	writeToMain();
	


	// for writing effect on main screen
	var sentences2 = new Array("Campaign name" , "Campaign name" , "Campaign name");
	var sentenceNum2 = 0;
	var sentsLen2 = sentences2.length;
	var currentSentence2,exploded2,currentLoc2,curSentLen2;
	
	function writeToMob(){
			
			$(".online-mobile .writing-jam").html("");
			currentSentence2 = sentences2[sentenceNum2];
			exploded2 = currentSentence2.split("");
			currentLoc2 = 0;
			curSentLen2 = currentSentence2.length;
		
		var interval2 = setInterval(function(){
			
			if(currentLoc2 == curSentLen2){
				
				if(sentenceNum2 == sentsLen2 -1){
					sentenceNum2 = 0;
					clearInterval(interval2);
					setTimeout(function(){
						var myPos2 = curSentLen2;
						var clrStr2 = setInterval(function(){
							if(myPos2 == 0){
								
								clearInterval(clrStr2);
								writeToMob();
							}else{
								var myStr2 = currentSentence2.substr(0,myPos2);
								myPos2--;
								$(".online-mobile .writing-jam").html(myStr2);
							}
							
						},15);
						
						
					},4000);
				}else{
					
					clearInterval(interval2);
					setTimeout(function(){
						var myPos2 = curSentLen2;
						var clrStr2 = setInterval(function(){
							if(myPos2 == 0){
								
								clearInterval(clrStr2);
								writeToMob();
							}else{
								var myStr2 = currentSentence2.substr(0,myPos2);
								myPos2--;
								$(".online-mobile .writing-jam").html(myStr2);
							}
							
						},15);
						
						
					},4000);
					sentenceNum2++;
				}
				
			}else{
				$(".online-mobile .writing-jam").append(exploded2[currentLoc2]);
				currentLoc2++;
			}
			
		},60);
		
		
	};
	writeToMob();
		


		// for writing effect on main screen
		var sentences3 = new Array("Online Recruitment" , "Online Recruitment" , "Online Recruitment");
		var sentenceNum3 = 0;
		var sentsLen3 = sentences3.length;
		var currentSentence3,exploded3,currentLoc3,curSentLen3;
		
		function writeToMain2(){
				
				$(".online-recruit .writing-jam").html("");
				currentSentence3 = sentences3[sentenceNum3];
				exploded3 = currentSentence3.split("");
				currentLoc3 = 0;
				curSentLen3 = currentSentence3.length;
			
			var interval3 = setInterval(function(){
				
				if(currentLoc3 == curSentLen3){
					
					if(sentenceNum3 == sentsLen3 -1){
						sentenceNum3 = 0;
						clearInterval(interval3);
						setTimeout(function(){
							var myPos3 = curSentLen3;
							var clrStr3 = setInterval(function(){
								if(myPos3 == 0){
									
									clearInterval(clrStr3);
									writeToMain2();
								}else{
									var myStr3 = currentSentence3.substr(0,myPos3);
									myPos3--;
									$(".online-recruit .writing-jam").html(myStr3);
								}
								
							},15);
							
							
						},4000);
					}else{
						
						clearInterval(interval3);
						setTimeout(function(){
							var myPos3 = curSentLen3;
							var clrStr3 = setInterval(function(){
								if(myPos3 == 0){
									
									clearInterval(clrStr3);
									writeToMain2();
								}else{
									var myStr3 = currentSentence3.substr(0,myPos3);
									myPos3--;
									$(".online-recruit .writing-jam").html(myStr3);
								}
								
							},15);
							
							
						},4000);
						sentenceNum3++;
					}
					
				}else{
					$(".online-recruit .writing-jam").append(exploded3[currentLoc3]);
					currentLoc3++;
				}
				
			},60);
			
			
		};
		writeToMain2();
		
	
		
});
	

