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
	$andhra_pradesh = 'select count(*) as andhraPradesh from Registree where state = "Andhra Pradesh"';
	$andhra_pradesh = $connection->query($andhra_pradesh);
    $andhra_pradesh->setFetchMode(PDO::FETCH_ASSOC);
    $row_1 = $andhra_pradesh->fetch();

    $arunachal_pradesh = 'select count(*) as arunachalPradesh from Registree where state = "Arunachal Pradesh"';
	$arunachal_pradesh = $connection->query($arunachal_pradesh);
    $arunachal_pradesh->setFetchMode(PDO::FETCH_ASSOC);
    $row_2 = $arunachal_pradesh->fetch();

    $assam = 'select count(*) as assam from Registree where state = "Assam"';
	$assam = $connection->query($assam);
    $assam->setFetchMode(PDO::FETCH_ASSOC);
    $row_3 = $assam->fetch();

    $bihar = 'select count(*) as bihar from Registree where state = "Bihar"';
	$bihar = $connection->query($bihar);
    $bihar->setFetchMode(PDO::FETCH_ASSOC);
    $row_4 = $bihar->fetch();

    $chhattisgarh = 'select count(*) as chhattisgarh from Registree where state = "Chhattisgarh"';
	$chhattisgarh = $connection->query($chhattisgarh);
    $chhattisgarh->setFetchMode(PDO::FETCH_ASSOC);
    $row_5 = $chhattisgarh->fetch();

    $goa = 'select count(*) as goa from Registree where state = "Goa"';
	$goa = $connection->query($goa);
    $goa->setFetchMode(PDO::FETCH_ASSOC);
    $row_6 = $goa->fetch();

    $gujarat = 'select count(*) as gujarat from Registree where state = "Gujarat"';
	$gujarat = $connection->query($gujarat);
    $gujarat->setFetchMode(PDO::FETCH_ASSOC);
    $row_7 = $gujarat->fetch();

    $haryana = 'select count(*) as haryana from Registree where state = "Haryana"';
	$haryana = $connection->query($haryana);
    $haryana->setFetchMode(PDO::FETCH_ASSOC);
    $row_8 = $haryana->fetch();

    $himachal_pradesh = 'select count(*) as himachalPradesh from Registree where state = "Himachal Pradesh"';
	$himachal_pradesh = $connection->query($himachal_pradesh);
    $himachal_pradesh->setFetchMode(PDO::FETCH_ASSOC);
    $row_9 = $himachal_pradesh->fetch();

    $jharkhand = 'select count(*) as jharkhand from Registree where state = "Jharkhand"';
	$jharkhand = $connection->query($jharkhand);
    $jharkhand->setFetchMode(PDO::FETCH_ASSOC);
    $row_10 = $jharkhand->fetch();

    $karnataka = 'select count(*) as karnataka from Registree where state = "Karnataka"';
	$karnataka = $connection->query($karnataka);
    $karnataka->setFetchMode(PDO::FETCH_ASSOC);
    $row_11 = $karnataka->fetch();

    $kerala = 'select count(*) as kerala from Registree where state = "Kerala"';
	$kerala = $connection->query($kerala);
    $kerala->setFetchMode(PDO::FETCH_ASSOC);
    $row_12 = $kerala->fetch();

    $madhya_pradesh = 'select count(*) as madhyaPradesh from Registree where state = "Madhya Pradesh"';
	$madhya_pradesh = $connection->query($madhya_pradesh);
    $madhya_pradesh->setFetchMode(PDO::FETCH_ASSOC);
    $row_13 = $madhya_pradesh->fetch();

    $maharashtra = 'select count(*) as maharashtra from Registree where state = "Maharashtra"';
	$maharashtra = $connection->query($maharashtra);
    $maharashtra->setFetchMode(PDO::FETCH_ASSOC);
    $row_14 = $maharashtra->fetch();

    $manipur = 'select count(*) as manipur from Registree where state = "Manipur"';
	$manipur = $connection->query($manipur);
    $manipur->setFetchMode(PDO::FETCH_ASSOC);
    $row_15 = $manipur->fetch();

    $meghalaya = 'select count(*) as meghalaya from Registree where state = "Meghalaya"';
	$meghalaya = $connection->query($meghalaya);
    $meghalaya->setFetchMode(PDO::FETCH_ASSOC);
    $row_16 = $meghalaya->fetch();

	$mizoram = 'select count(*) as mizoram from Registree where state = "Mizoram"';
	$mizoram = $connection->query($mizoram);
    $mizoram->setFetchMode(PDO::FETCH_ASSOC);
    $row_17 = $mizoram->fetch();

    $nagaland = 'select count(*) as nagaland from Registree where state = "Nagaland"';
	$nagaland = $connection->query($nagaland);
    $nagaland->setFetchMode(PDO::FETCH_ASSOC);
    $row_18 = $nagaland->fetch();

    $odisha = 'select count(*) as odisha from Registree where state = "Odisha"';
	$odisha = $connection->query($odisha);
    $odisha->setFetchMode(PDO::FETCH_ASSOC);
    $row_19 = $odisha->fetch();

    $punjab = 'select count(*) as punjab from Registree where state = "Punjab"';
	$punjab = $connection->query($punjab);
    $punjab->setFetchMode(PDO::FETCH_ASSOC);
    $row_20 = $punjab->fetch();

    $rajasthan = 'select count(*) as rajasthan from Registree where state = "Rajasthan"';
	$rajasthan = $connection->query($rajasthan);
    $rajasthan->setFetchMode(PDO::FETCH_ASSOC);
    $row_21 = $rajasthan->fetch();

    $sikkim = 'select count(*) as sikkim from Registree where state = "Sikkim"';
	$sikkim = $connection->query($sikkim);
    $sikkim->setFetchMode(PDO::FETCH_ASSOC);
    $row_22 = $sikkim->fetch();

    $tamil_nadu = 'select count(*) as tamilNadu from Registree where state = "Tamil Nadu"';
	$tamil_nadu = $connection->query($tamil_nadu);
    $tamil_nadu->setFetchMode(PDO::FETCH_ASSOC);
    $row_23 = $tamil_nadu->fetch();

    $telangana = 'select count(*) as telangana from Registree where state = "Telangana"';
	$telangana = $connection->query($telangana);
    $telangana->setFetchMode(PDO::FETCH_ASSOC);
    $row_24 = $telangana->fetch();

    $tripura = 'select count(*) as tripura from Registree where state = "Tripura"';
	$tripura = $connection->query($tripura);
    $tripura->setFetchMode(PDO::FETCH_ASSOC);
    $row_25 = $tripura->fetch();

    $uttar_pradesh = 'select count(*) as uttarPradesh from Registree where state = "Uttar Pradesh"';
	$uttar_pradesh = $connection->query($uttar_pradesh);
    $uttar_pradesh->setFetchMode(PDO::FETCH_ASSOC);
    $row_26 = $uttar_pradesh->fetch();

    $uttarakhand = 'select count(*) as uttarakhand from Registree where state = "Uttarakhand"';
	$uttarakhand = $connection->query($uttarakhand);
    $uttarakhand->setFetchMode(PDO::FETCH_ASSOC);
    $row_27 = $uttarakhand->fetch();

    $west_bengal = 'select count(*) as westBengal from Registree where state = "West Bengal"';
	$west_bengal = $connection->query($west_bengal);
    $west_bengal->setFetchMode(PDO::FETCH_ASSOC);
    $row_28 = $west_bengal->fetch();

    $andaman_nicobar = 'select count(*) as andamanNicobar from Registree where state = "Andaman and Nicobar"';
	$andaman_nicobar = $connection->query($andaman_nicobar);
    $andaman_nicobar->setFetchMode(PDO::FETCH_ASSOC);
    $row_29 = $andaman_nicobar->fetch();

    $chandigarh = 'select count(*) as chandigarh from Registree where state = "Chandigarh"';
	$chandigarh = $connection->query($chandigarh);
    $chandigarh->setFetchMode(PDO::FETCH_ASSOC);
    $row_30 = $chandigarh->fetch();

    $daman_diu = 'select count(*) as damanDiu from Registree where state = "Daman and Diu"';
	$daman_diu = $connection->query($daman_diu);
    $daman_diu->setFetchMode(PDO::FETCH_ASSOC);
    $row_31 = $daman_diu->fetch();

    $delhi = 'select count(*) as delhi from Registree where state = "Delhi"';
	$delhi = $connection->query($delhi);
    $delhi->setFetchMode(PDO::FETCH_ASSOC);
    $row_32 = $delhi->fetch();

    $jammu_kashmir = 'select count(*) as jammuKashmir from Registree where state = "Jammu and Kashmir"';
	$jammu_kashmir = $connection->query($jammu_kashmir);
    $jammu_kashmir->setFetchMode(PDO::FETCH_ASSOC);
    $row_33 = $jammu_kashmir->fetch();

    $lakshadweep = 'select count(*) as lakshadweep from Registree where state = "Lakshadweep"';
	$lakshadweep = $connection->query($lakshadweep);
    $lakshadweep->setFetchMode(PDO::FETCH_ASSOC);
    $row_34 = $lakshadweep->fetch();

    $puducherry = 'select count(*) as puducherry from Registree where state = "Puducherry"';
	$puducherry = $connection->query($puducherry);
    $puducherry->setFetchMode(PDO::FETCH_ASSOC);
    $row_35 = $puducherry->fetch();

    $ladakh = 'select count(*) as ladakh from Registree where state = "Ladakh"';
	$ladakh = $connection->query($ladakh);
    $ladakh->setFetchMode(PDO::FETCH_ASSOC);
    $row_36 = $ladakh->fetch();
}
catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}

?>



<!DOCTYPE html>
<html>
	<head>
		<title>Vaccination Drive</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
		</style>
	</head>

	<body>
		<div class="topnav fixed-top">
			<a href="index.php"><span class="fa fa-home fa-lg"></span> Home</a>
			<a href="register.php"><span class="fa fa-registered fa-lg"></span> Register</a>
			<a href="about.php"><span class="fa fa-question fa-lg"></span> About</a>
			<a class="active" href="#"><span class="fa fa-info fa-lg"></span> Info</a>
		</div>

		<!-- Header -->
		<header class="container-fluid bg-danger text-center" style="padding:58px 16px; margin:0px">
		  <h1 class="m-3"><big>TAKE YOUR JAB</big></h1>
		  <button class="btn btn-primary p-20 btn-lg mt-10">Get Vaccinated</button>
		</header>

		<div class="container m-3">
			<div class="row p-2">
				<div class="col-12">
					<h3>State-wise demand for covid vaccine (as per registration)</h3>
				</div>
			</div>
			<div class="row row-content col-md-9">
				<table class="table table-bordered table-condensed table-hover bg-light">
					<thead class="bg-secondary">
						<tr>
							<th>State</th>
							<th>Vaccine Required</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Andhra Pradesh</td>
							<td><?php echo htmlspecialchars($row_1['andhraPradesh']); ?></td>
						</tr>
						<tr>
							<td>Arunachal Pradesh</td>
							<td><?php echo htmlspecialchars($row_2['arunachalPradesh']); ?></td>
						</tr>
						<tr>
							<td>Assam</td>
							<td><?php echo htmlspecialchars($row_3['assam']); ?></td>
						</tr>
						<tr>
							<td>Bihar</td>
							<td><?php echo htmlspecialchars($row_4['bihar']); ?></td>
						</tr>
						<tr>
							<td>Chhattisgarh</td>
							<td><?php echo htmlspecialchars($row_5['chhattisgarh']); ?></td>
						</tr>
						<tr>
							<td>Goa</td>
							<td><?php echo htmlspecialchars($row_6['goa']); ?></td>
						</tr>
						<tr>
							<td>Gujarat</td>
							<td><?php echo htmlspecialchars($row_7['gujarat']); ?></td>
						</tr>
						<tr>
							<td>Haryana</td>
							<td><?php echo htmlspecialchars($row_8['haryana']); ?></td>
						</tr>
						<tr>
							<td>Himachal Pradesh</td>
							<td><?php echo htmlspecialchars($row_9['himachalPradesh']); ?></td>
						</tr>
						<tr>
							<td>Jharkhand</td>
							<td><?php echo htmlspecialchars($row_10['jharkhand']); ?></td>
						</tr>
						<tr>
							<td>Karnataka</td>
							<td><?php echo htmlspecialchars($row_11['karnataka']); ?></td>
						</tr>
						<tr>
							<td>Kerala</td>
							<td><?php echo htmlspecialchars($row_12['kerala']); ?></td>
						</tr>
						<tr>
							<td>Madhya Pradesh</td>
							<td><?php echo htmlspecialchars($row_13['madhyaPradesh']); ?></td>
						</tr>
						<tr>
							<td>Maharashtra</td>
							<td><?php echo htmlspecialchars($row_14['maharashtra']); ?></td>
						</tr>
						<tr>
							<td>Manipur</td>
							<td><?php echo htmlspecialchars($row_15['manipur']); ?></td>
						</tr>
						<tr>
							<td>Meghalaya</td>
							<td><?php echo htmlspecialchars($row_16['meghalaya']); ?></td>
						</tr>
						<tr>
							<td>Mizoram</td>
							<td><?php echo htmlspecialchars($row_17['mizoram']); ?></td>
						</tr>
						<tr>
							<td>Nagaland</td>
							<td><?php echo htmlspecialchars($row_18['nagaland']); ?></td>
						</tr>
						<tr>
							<td>Odisha</td>
							<td><?php echo htmlspecialchars($row_19['odisha']); ?></td>
						</tr>
						<tr>
							<td>Punjab</td>
							<td><?php echo htmlspecialchars($row_20['punjab']); ?></td>
						</tr>
						<tr>
							<td>Rajasthan</td>
							<td><?php echo htmlspecialchars($row_21['rajasthan']); ?></td>
						</tr>
						<tr>
							<td>Sikkim</td>
							<td><?php echo htmlspecialchars($row_22['sikkim']); ?></td>
						</tr>
						<tr>
							<td>Tamil Nadu</td>
							<td><?php echo htmlspecialchars($row_23['tamilNadu']); ?></td>
						</tr>
						<tr>
							<td>Telangana</td>
							<td><?php echo htmlspecialchars($row_24['telangana']); ?></td>
						</tr>
						<tr>
							<td>Tripura</td>
							<td><?php echo htmlspecialchars($row_25['tripura']); ?></td>
						</tr>
						<tr>
							<td>Uttar Pradesh</td>
							<td><?php echo htmlspecialchars($row_26['uttarPradesh']); ?></td>
						</tr>
						<tr>
							<td>Uttarakhand</td>
							<td><?php echo htmlspecialchars($row_27['uttarakhand']); ?></td>
						</tr>

						<tr>
							<td>West Bengal</td>
							<td><?php echo htmlspecialchars($row_28['westBengal']); ?></td>
						</tr>
						

					</tbody>
				</table>
			</div>
		</div>

		<div class="container m-3">
			<div class="row p-2">
				<div class="col-12">
					<h3>UT-wise demand for covid vaccine (as per registration)</h3>
				</div>
			</div>
			<div class="row row-content col-md-9">
				<table class="table table-bordered table-condensed table-hover bg-light">
					<thead class="bg-secondary">
						<tr>
							<th>Union Territory</th>
							<th>Vaccine Required</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Andaman and Nicobar Islands</td>
							<td><?php echo htmlspecialchars($row_29['andamanNicobar']); ?></td>
						</tr>
						<tr>
							<td>Chandigarh</td>
							<td><?php echo htmlspecialchars($row_30['chandigarh']); ?></td>
						</tr>

						<tr>
							<td>Daman and Diu</td>
							<td><?php echo htmlspecialchars($row_31['damanDiu']); ?></td>
						</tr>
						<tr>
							<td>Delhi</td>
							<td><?php echo htmlspecialchars($row_32['delhi']); ?></td>
						</tr>
						<tr>
							<td>Jammu and Kashmir</td>
							<td><?php echo htmlspecialchars($row_33['jammuKashmir']); ?></td>
						</tr>
						<tr>
							<td>Lakshadweep</td>
							<td><?php echo htmlspecialchars($row_34['lakshadweep']); ?></td>
						</tr>
						<tr>
							<td>Puducherry</td>
							<td><?php echo htmlspecialchars($row_35['puducherry']); ?></td>
						</tr>
						<tr>
							<td>Ladakh</td>
							<td><?php echo htmlspecialchars($row_36['ladakh']); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<footer class="footer mt-3 p-3" style="background-color: rgb(76,108,181);">  	
			<div class="container-fluid">
				<div class="row">
					<div class="col-4 offset-1 col-sm-2">
                    	<h3><u>Links</u></h3>
	                    <ul class="list-unstyled">
	                        <li><a class="text-white" href="./index.php">Home</a></li>
	                        <li><a class="text-white" href="./register.php">Register</a></li>
	                        <li><a class="text-white" href="#">About</a></li>
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


