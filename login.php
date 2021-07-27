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
	session_start();
	if(!isset($_POST['submit'])){

	}
	else{
		$username_err;
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		if(!empty($_POST['username'])){
			$username_err = "Enter your username.";
		}
		else{
			header('Location: form_submit.php');
		}
	}
	
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="Form.css"/>
		<style>
			.wrapper{
				padding:25px;
				
				border:3px dotted black;
				
			}
			.card {
  				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  				transition: 0.3s;
  				border-radius: 5px; /* 5px rounded corners */
  				margin:auto;
				max-width:500px;
}
			.topnav {
			  overflow: hidden;
			  background-color: #333;
			}

			.topnav a {
			  float: left;
			  color: #f2f2f2;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			  font-size: 17px;
			}

			.topnav a:hover {
			  background-color: #ddd;
			  color: black;
			}

			.topnav a.active {
			  background-color: #04AA6D;
			  color: white;
			}
		</style>
	</head>

	<body>
		<div class="topnav fixed-top">
			<a href="home.php"><span class="fa fa-home fa-lg"></span> Home</a>
			<a class="active" href="#"><span class="fa fa-sign-in fa-lg"></span> Login</a>
			<a href="register.php"><span class="fa fa-registered fa-lg"></span> Register</a>
			<a href="about.php"><span class="fa fa-info fa-lg"></span> About</a>
		</div>

		<!-- Header -->
		<header class="container-fluid bg-danger text-center" style="padding:58px 16px; margin:0px">
		  <h1 class="m-3"><big>TAKE YOUR JAB</big></h1>
		  <button class="btn btn-primary p-20 btn-lg mt-10">Get Vaccinated</button>
		</header>

		<div class="card m-5" style="background-color: rgb(137,139,143)">
			<div class="container">
				<h3>Login Page</h3>
				<p>Please fill in your details to login.</p>
				
				<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
				<form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()" required>
					<div class="form-group">
						<label>Username: </label>
						<input type="text" name="username" >
						<span id="user_name"><?php echo $username_err; ?></span>
					</div>
					<div class="form-group">
						<label>Password: </label>
						<input type="password" name="password" required>
						<span id="pwd"></span>
					</div>
					<div class="form-group">
						<input class="btn btn-success" name="submit" type="submit" value="Login">
					</div>
					<p>Don't have an account? <a class="text-danger" href="register.php">Sign Up</a> now</p>
				</form>
			</div>
		</div>
		<footer class="container-fluid mt-1" style="background-color: rgb(76,108,181);">  
			<div class="d-flex justify-content-center p-2">
			    <a class="btn btn-social-icon btn-instagram" href="http://www.instagram.com/mygovindia/" title="MyGov Instagram" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
	            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/MyGovIndia/" title="MyGov Facebook" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
	            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/company/mygov-india/" title="MyGov LinkedIn" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
	            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/mygovindia" title="MyGov Twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
	            <a class="btn btn-social-icon btn-yt" href="http://youtube.com/mygovindia" title="MyGov Youtube" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
	            <a class="btn btn-social-icon" href="https://wa.me/919013151515?text=Hi" title="MyGov Whatsapp" target="_blank"><i class="fa fa-whatsapp fa-lg"></i></a>
	            <a class="btn btn-social-icon" href="https://www.messenger.com/t/MyGovIndia" title="MyGov Messenger" target="_blank"><i class="fa fa-send fa-lg"></i></a>
			</div>
			<div class="container d-flex justify-content-center p-3">
				<small>&copy; 2021 Copyright  Terms & Privacy</small>
			</div>
		</footer>
	</body>
</html>


