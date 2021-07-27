<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="welcome.css">-->
		<title>Vaccination Drive</title>
		<style>
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
			img{
				width:100%;
				height:auto;
			}
			
		</style>
	</head>

	<body>
		<div class="topnav fixed-top">
			<a class="active" href="#"><span class="fa fa-home fa-lg"></span> Home</a>
			<!-- <a href="login.php"><span class="fa fa-sign-in fa-lg"></span> Login</a> -->
			<a href="register.php"><span class="fa fa-registered fa-lg"></span> Register</a>
			<a href="about.php"><span class="fa fa-question fa-lg"></span> About</a>
			<a href="info.php"><span class="fa fa-info fa-lg"></span> Info</a>
		</div>

		<!-- Header -->
		<header class="container-fluid bg-danger text-center" style="padding:58px 16px; margin:0px">
		  <h1 class="m-3"><big>TAKE YOUR JAB</big></h1>
		  <button class="btn btn-primary p-20 btn-lg mt-10">Get Vaccinated</button>
		</header>

		<!-- First Grid -->
		<div class="container p-3 m-4">
		  <div class="row row-content">
		    <div class="col-8">
		      	<h1>Covaxin</h1>
		      	<h5 class="py-3">Covaxin has been developed by Hyderabad-based Bharat Biotech International Ltd in association with the Indian Council of Medical Research (ICMR) and the National Institute of Virology (NIV).</h5>

		      	<p class="text-grey">Covaxin is an inactivated vaccine, which has been prepared on a tried and tested platform of dead viruses.

				This vaccine is developed with Whole-Virion Inactivated Vero Cell-derived technology. They contain inactivated viruses, which can not infect a person but still can teach the immune system to prepare a defence mechanism against the active virus.<br>

				These conventional vaccines have been in use for decades now. There are vaccines for some other diseases as well which are made using the same technology. These diseases are –
				Seasonal influenza,Rabies,Polio,Pertussis, andJapanese encephalitis</p>
		    </div>

		    <div class="col-4 d-flex justify-content-center">
		      <img src="covaxin.jpeg" alt="covaxin" class="img py-5">
		    </div>
		  </div>
		</div>

		<!-- Second Grid -->
		<div class="container p-3 m-4 bg-secondary">
		  <div class="row row-content">
		    <div class="col-4 d-flex justify-content-center">
		      <img src="covishield.jpeg" alt="covaxin" class="img py-5">
		    </div>

		    <div class="col-8">
		      	<h1>Covishield</h1>
		      	<h5 class="py-3">Covishield has been developed by the Oxford-AstraZeneca and is being manufactured by the Serum Institute of India (SII).</h5>

		      	<p class="text-grey">Covishield has been prepared using the viral vector platform which is a totally different technology.

				A chimpanzee adenovirus – ChAdOx1 – has been modified to enable it to carry the COVID-19 spike protein into the cells of humans. Well, this cold virus is basically incapable of infecting the receiver but can very well teach the immune system to prepare a mechanism against such viruses.<br>

				The exact technology was used to prepare vaccines for viruses like Ebola.</p>
		    </div>
		  </div>
		</div>

		
		<!-- Third grid -->
		<div class="container p-3 m-4">
		  <div class="row row-content">
		    <div class="col-8">
		      	<h1>Sputnik V</h1>
		      	<h5 class="py-3">Sputnik V is an adenovirus viral vector vaccine for COVID-19 developed by the Gamaleya Research Institute of Epidemiology and Microbiology. It was registered on 11 August 2020 by the Russian Ministry of Health as Gam-COVID-Vac</h5>

		      	<p class="text-grey">Gam-COVID-Vac is a viral two-vector vaccine based on two human adenoviruses – a common cold virus – containing the gene that encodes the full-length spike protein (S) of SARS-CoV-2 to stimulate an immune response.<br>
		      	The vaccine can be formulated in two ways: as a ready-to-use solution in water that is frozen at the common home-freezer storage temperature of −18 °C or 0 °F or lower; and as a freeze-dried powder, "Gam-COVID-Vac-Lyo", whose storage temperature is above freezing, 2–8 °C or 36–46 °F, at the common home-refrigerator temperature. The freeze-dried powder must be reconstituted with water before use.</p>
		    </div>

		    <div class="col-4 d-flex justify-content-center">
		      <img src="sputnik.jpeg" alt="covaxin" class="img py-5">
		    </div>
		  </div>
		</div>

		

		<!-- Footer -->
		<footer class="footer mt-1 p-3" style="background-color: rgb(76,108,181);">  	<div class="container">
				<div class="row">
					<div class="col-4 offset-1 col-sm-2">
                    	<h3><u>Links</u></h3>
	                    <ul class="list-unstyled">
	                        <li><a class="text-white" href="#">Home</a></li>
	                        <li><a class="text-white" href="./register.php">Register</a></li>
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
