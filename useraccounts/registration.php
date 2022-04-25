<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
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
			
			<a href="/useraccounts/login.php#about"> About </a>
			<a href="/useraccounts/login.php#faqs"> Health FAQs </a>
			<a href="/useraccounts/login.php#whyodc"> Why ODC? </a>
			<a href="/useraccounts/login.php#hiw"> HOW IT WORKS </a>

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
<div>
	<form action="registration.php" method="post">
		<div class="container">

			<div class="container2">
				<img class="dimg2" src="img/dimg2.jpg">
					<div class="tl"> GET STARTED </div>
			</div>

			<div class="container3">
					<div class="tl2"> Create your Account. </div>
			</div>

			<div class="container4">
					<div class="tl3"> PERSONAL INFORMATION </div>
			</div>

			<div class="container5">
					<div class="tl4"> or <a href="login.php">Login</a> instead. </div>
			</div>

			<div class="row" style="margin-botton: 10px">
				<div class="col-sm-5">
					<input class="form-control" placeholder="First Name" id="firstname" type="text" name="firstname" required>

					<input class="form-control" placeholder="Middle Name" id="middlename" type="text" name="middlename" required>

					<input class="form-control" placeholder="Last Name" id="lastname"  type="text" name="lastname" required>

					<input class="form-control" placeholder="Gender" id="gender" type="text" name="gender" required>

					<input class="form-control" placeholder="Age" id="age" type="text" name="age" required>

					<input class="form-control" id="birthdate" type="date" name="birthdate" required>

				</div>

				<div class="col-sm-5"> 

					<input class="form-control" placeholder="Civil Status" id="civilstatus" type="text" name="civilstatus" required>

					<input class="form-control" placeholder="Municipality" id="municipality" type="text" name="municipality" required>

					<input class="form-control" placeholder="Contact Number" id="contactnumber"  type="text" name="contactnumber" required>

					<input class="form-control" placeholder="Email Address" id="email"  type="email" name="email" required>
					<input class="form-control" placeholder="Retype Email" id="cemail"  type="email" name="cemail" required>

					<input class="form-control" placeholder="Password" id="password"  type="password" name="password" required>
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">

				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


            var firstname 			= $('#firstname').val();
			var middlename 			= $('#middlename').val();
			var lastname 			= $('#lastname').val();
			var gender 				= $('#gender').val();
			var age 				= $('#age').val();
			var birthdate 			= $('#birthdate').val();
			var civilstatus 		= $('#civilstatus').val();
			var municipality		= $('#municipality').val();
			var contactnumber 		= $('#contactnumber').val();
			var email 				= $('#email').val();
			var password 			= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname, middlename: middlename, lastname: lastname, 
						gender: gender, age: age, birthdate: birthdate, civilstatus: civilstatus, 
						municipality: municipality, contactnumber: contactnumber, email: email, password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});

</script>
</body>
</html>