<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="img/icon.png" sizes="128x128">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<!-- Nav Bar -->
		<div class="topnav" id="myTopnav">
			
            <a href="index.php?logout=true">Logout</a>
			<a href="profile.php" class="active"> PROFILE </a>
			<a href="faqs.php"> FAQs </a>
			<a href="doctors.php"> OUR DOCTORS </a>
			<a href="index.php"> HOME </a>

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

</html>
</body>