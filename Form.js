function validateName() {
	/* Function to validate the input received and give a feedback correspondingly
		If the value of input matches the regex then it is fine otherwise you have to 
		reconsider what you have entered. Similarly for the parent's information. */
	var nameField  = document.getElementById("name").value;
	var reg1 = /^[a-zA-Z\s\'\-]{3,15}$/;
	if(reg1.test(nameField)){
		document.getElementById("message_name1").style.color = "green";
		document.getElementById("message_name1").innerHTML = "valid";
	}
	else{
		document.getElementById("message_name1").style.color = "red"
		document.getElementById("message_name1").innerHTML = "Enter 3-15 characters"
	}
}

function validateFatherName() {
	var nameField  = document.getElementById("father_name").value
	var reg2 = /^[a-zA-Z\s\'\-]{3,15}$/;
	if(reg2.test(nameField)){
		document.getElementById("message_name2").style.color = "green";
		document.getElementById("message_name2").innerHTML = "valid";
	}
	else{
		document.getElementById("message_name2").style.color = "red"
		document.getElementById("message_name2").innerHTML = "Enter 3-15 characters"
	}
}

function validateMotherName() {
	var nameField  = document.getElementById("mother_name").value
	var reg3 = /^[a-zA-Z\s\'\-]{3,15}$/;
	if(reg3.test(nameField)){
		document.getElementById("message_name3").style.color = "green";
		document.getElementById("message_name3").innerHTML = "valid";
	}
	else{
		document.getElementById("message_name3").style.color = "red"
		document.getElementById("message_name3").innerHTML = "Enter 3-15 characters"
	}
}

function validateNumber(){
	/* Validate phone number whether it contains ten digits or not(for INDIA) */
	var phone = document.getElementById("phoneNumber").value;
	var reg = /^[0-9]{10}$/;
	if(reg.test(phone)){
		document.getElementById("message_name4").style.color = "green";
		document.getElementById("message_name4").innerHTML = "valid";
	}
	else{
		document.getElementById("message_name4").style.color = "red"
		document.getElementById("message_name4").innerHTML = "Enter a valid number"
	}
}

function validateEmail(){
	/* Function to check the validity of the email address provided based on
		 the regex expression */
	var email = document.getElementById("email-id").value;
	var reg4 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	if(reg4.test(email)){
		document.getElementById("message_name5").style.color = "green";
		document.getElementById("message_name5").innerHTML = "valid";
	}
	else{
		document.getElementById("message_name5").style.color = "red"
		document.getElementById("message_name5").innerHTML = "Enter a valid email address"
	}
}

/* Function to validate the form when submitting. The modified version of this is useful
 	when we are working on server side development.*/
function validateForm(){
	var username = document.forms["myForm"]["username"].value;
	if(username == "" || username == null){
		document.getElementById("user_name").innerHTML = "Please enter your username."
		return false;
	}
	var password = document.forms["myForm"]["pwd"].value;
	if(password == "" || password == null){
		document.getElementById("pwd").innerHTML = "Please enter your password."
		return false;
	}
}
