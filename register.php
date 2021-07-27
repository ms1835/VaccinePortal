<!DOCTYPE html>
<html>
	<head>
		<title>Vaccination Drive</title>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSS file attached here -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="form.css"/>
		<link rel="stylesheet" href="styles.css"/>

	</head>

	<body>
		<!-- Javascript file attached here  -->
		<script src="Form.js"></script>
		<div class="topnav fixed-top">
			<a href="index.php"><span class="fa fa-home fa-lg"></span> Home</a>
			<!--<a href="login.php"><span class="fa fa-sign-in fa-lg"></span> Login</a> -->
			<a class="active" href="#"><span class="fa fa-registered fa-lg"></span> Register</a>
			<a href="about.php"><span class="fa fa-question fa-lg"></span> About</a>
			<a href="info.php"><span class="fa fa-info fa-lg"></span> Info</a>
		</div>

		<!-- Header -->
		<header class="container-fluid bg-danger text-center" style="padding:58px 16px; margin:0px">
		  <h1 class="m-3"><big>TAKE YOUR JAB</big></h1>
		  <button class="btn btn-primary p-20 btn-lg mt-10">Get Vaccinated</button>
		</header>
		<div class="card m-4" style="background-color: rgb(137,139,143)">
			<div class="container">
				<h2 class="p-2">SLOT REGISTRATION</h2>
				<form class="m-2" name="loginForm" method="post" action="">
					<div class="form-group">
						<!-- Name of candidate taking admission and a javascript function
						     to check the validity of the input  -->
						<label class="move">Name:*</label>
						<input id="name" type="text" name="name" onblur="validateName();">
							<span id="message_name1"></span>
					</div>
					<div class="form-group">
						<label class="move">Father's Name:*</label>
						<input id="father_name" type="text" name="father_name" onblur="validateFatherName();">
							<span id="message_name2"></span>
					</div>
					<div class="form-group">
						<label class="move">Mother's Name:*</label>
						<input id="mother_name" type="text" name="mother_name" onblur="validateMotherName();">
							<span id="message_name3"></span>
					</div>
					<div class="form-group">
						<label class="move">DOB:</label>
						<input type="date" name="DOB" required>
					</div>
					<div class="form-group">
						<label class="move">Gender:</label>
						<!-- Choose a gender -->
						
						<input type="radio" name="gender" value="male" checked>
						<label for="male" class="two text-dark">Male</label>
						<input type="radio" name="gender" value="female">
						<label for="female" class="two text-dark">Female</label>
						<input type="radio" name="gender" value="transgender">
						<label for="transgender" class="two text-dark">Transgender</label>
						
					</div>
					
					<div class="form-group">
						<label class="move">Mobile No.:</label>
						<input id="phoneNumber" type="text" name="contact" onblur="validateNumber();">
							<span id="message_name4"></span>
					</div>
					<div class="form-group">
						<label class="move">Email:</label>
						<input id="email-id" type="text" name="email" onblur="validateEmail();"><span id="message_name5"></span>
					</div>
					<div class="form-group">
						<label class="move">Residential Address:</label>
						<input type="text-area" name="address">
					</div>
					<div class="form-group">
						<label class="move">State:</label>
						<input id="state" type="text" name="state">
					</div>
					<div class="form-group">
						<input class="btn btn-success" type="submit" value="Register" name="submit" >
					</div>
					<!-- <p>Already have an account? <a class="text-danger" href="login.php">Login</a> here.</p> -->
				</form>
			</div>
		</div>


		<footer class="footer mt-3 p-3" style="background-color: rgb(76,108,181);">  	
			<div class="container">
				<div class="row">
					<div class="col-4 offset-1 col-sm-2">
                    	<h3><u>Links</u></h3>
	                    <ul class="list-unstyled">
	                        <li><a class="text-white" href="./index.php">Home</a></li>
	                        <li><a class="text-white" href="#">Register</a></li>
	                        <li><a class="text-white" href="./about.php">About</a></li>
	                        <li><a class="text-white" href="./info.php">Info</a></li>
	                    </ul>
                	</div>
	                <div class="col-7 col-sm-5">
	                    <h3><u>Contact Us</u></h3>
			            <p>Helpline Number: +91-11-23978046</p>
			            <p>Toll Free Number: 1075</p>
	                </div>
	                <div class="col-12 col-sm-4 align-self-center align-items-center">
	                    <div class="text-center">
	                        <a class="btn btn-social-icon btn-instagram" href="http://www.instagram.com/mygovindia/" title="MyGov Instagram" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
				            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/MyGovIndia/" title="MyGov Facebook" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
				            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/company/mygov-india/" title="MyGov LinkedIn" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
				            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/mygovindia" title="MyGov Twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
				            <a class="btn btn-social-icon btn-yt" href="http://youtube.com/mygovindia" title="MyGov Youtube" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
				            <a class="btn btn-social-icon" href="https://wa.me/919013151515?text=Hi" title="MyGov Whatsapp" target="_blank"><i class="fa fa-whatsapp fa-lg"></i></a>
				            <a class="btn btn-social-icon" href="https://www.messenger.com/t/MyGovIndia" title="MyGov Messenger" target="_blank"><i class="fa fa-send fa-lg"></i></a>
	                    </div>
	                </div>
				</div>
				<div class="row justify-content-center">
					<div class="col-auto">
						<small>&copy; 2021 Copyright  Terms & Privacy</small>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>



<?php
$host = "localhost";
$db_name = "web";
$username = "root";
$password = "maya";
//$connection = null;
try{
	$connection = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
	$connection->exec("set names utf8");
	//$connection->setAttribute(PDO::Attr_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}


//echo 'hello mayank, welcome to our page';
if(isset($_POST['submit'])){
	$name = htmlentities($_POST['name']);
	$father_name = htmlentities($_POST['father_name']);
	$mother_name = htmlentities($_POST['mother_name']);
	$DOB = htmlentities($_POST['DOB']);
	$gender = htmlentities($_POST['gender']);
	$contact = htmlentities($_POST['contact']);
	$email = htmlentities($_POST['email']);
	$address = htmlentities($_POST['address']);
	$state = htmlentities($_POST['state']);

	$query = "INSERT INTO Registree(name,father_name,mother_name,DOB,gender,contact,email,address,state) VALUES( :name, :father_name, :mother_name, :DOB, :gender, :contact, :email, :address, :state)";

	$callToDb = $connection->prepare( $query );
	$name=htmlspecialchars(strip_tags($name));
	$father_name=htmlspecialchars(strip_tags($father_name));
	$mother_name=htmlspecialchars(strip_tags($mother_name));
	$DOB=htmlspecialchars(strip_tags($DOB));
	$gender=htmlspecialchars(strip_tags($gender));
	$contact=htmlspecialchars(strip_tags($contact));
	$email=htmlspecialchars(strip_tags($email));
	$address=htmlspecialchars(strip_tags($address));
	$state=htmlspecialchars(strip_tags($state));
	$callToDb->bindParam(":name",$name);
	$callToDb->bindParam(":father_name",$father_name);
	$callToDb->bindParam(":mother_name",$mother_name);
	$callToDb->bindParam(":DOB",$DOB);
	$callToDb->bindParam(":gender",$gender);
	$callToDb->bindParam(":contact",$contact);
	$callToDb->bindParam(":email",$email);
	$callToDb->bindParam(":address",$address);
	$callToDb->bindParam(":state",$state);

	if($callToDb->execute()){
		echo '<h3 style="text-align:center;">We will get back to you very shortly!</h3>';
	}
}
 

?>

