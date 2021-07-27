function validateForm(){
	var username = document.forms["myForm"]["username"].value;
	if(username == "" || username == null){
		document.getElementById("user_name").innerHTML = "Please enter your username.";
		//return false;
	}

	var password = document.forms["myForm"]["passowrd"].value;
	if(password == "" || password == null){
		document.getElementById("pwd").innerHTML = "Please enter your password.";
		return false;
	}

}
