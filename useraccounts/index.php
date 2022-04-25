<?php 

session_start();

	if(!isset($_SESSION['useraccounts'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="icon" type="image/png" href="img/icon.png" sizes="128x128">
</head>
<body>

<!-- Nav Bar -->
		<div class="topnav" id="myTopnav">
			
			<a href="index.php?logout=true">Logout</a>
			<a href="profile.php"> PROFILE </a>
			<a href="faqs.php"> FAQs </a>
			<a href="doctors.php"> OUR DOCTORS </a>
			<a href="index.php" class="active"> HOME </a>

			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			
				<i class="fa fa-bars"></i>
			</a>
			<p class="sname"> Online Doctor Consultation </p>
		</div>

		<script>
			function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
			}
		</script>

<!-- Content -->
<div class="contentcont">
	<div class="imgcover">
		<img class="dimg3" src="img/dimg3.jpg">
			<div class="boxcontainer">
				<div id="box1" class="box">
					<div class="boxtext">
						<p> Have Any Health Related Concerns? <p>
						<br>
						<a href="#" class="boxlink"> Talk to our Doctor </a>
					</div>
				</div>

				<div id="box2" class="box">
					<div class="boxtext">
						<p> Come Visit Our Hospital Near Your Area. <p>
						<br>
						<a href="#" class="boxlink"> Book an Appointment Now! </a>
					</div>
				</div>
						
				<div id="box3" class="box">
				<div class="boxtext">
						<p> You Don't Have To Control Your Thoughts. <p>
						<br>
						<a href="#" class="boxlink"> Talk to our Psychologists </a>
					</div>
				</div>
			</div>

			<div class="iconcontainer">
				<div id="icon1" class="icon"><img src="img/icon1.png"></div>
				<div id="icon2" class="icon"><img src="img/icon3.png"></div>
				<div id="icon3" class="icon"><img src="img/icon2.png"></div>
			</div>
	</div>	
</div>













</body>
</html>