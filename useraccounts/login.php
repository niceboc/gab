<?php 

	session_start();
	
	if(isset($_SESSION['useraccounts'])){
		header("Location: index.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/icon.png" sizes="48x48">
</head>
<body>

<!-- Nav Bar -->
		<div class="topnav" id="myTopnav">
			
			<a href="#about"> About </a>
			<a href="#faqs"> Health FAQs </a>
			<a href="#whyodc"> Why ODC? </a>
			<a href="#hiw"> HOW IT WORKS </a>

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
<div class="imgcont">
	<img src="img/dimg1.jpg">
	<span class="imgtext1"> 24/7 Online Consultation </span>
	<br> <br>
	<div>
		<span class="imgtext2"> Consult via Chat </span>
	</div>
</div>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="img/logo.png" class="brand_logo" alt="ODC logo">
				</div>
			</div>
			<div class="d-flex justify-content-center form_container">
				<form>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" placeholder="Email Address" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" placeholder="Password" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
					</div>
				
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" id="login" class="btn login_btn">Login</button> 
			</div>
			</form>
			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="registration.php" class="ml-2">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "Login Successful"){
						setTimeout(' window.location.href =  "index.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>

<!-- Content 2 -->
<div class="content2">
	<a name="hiw"><p id="content2"> HOW IT WORKS </p></a>
	
	<div class="hiw">
		<img src="img/step1.png">
		<img src="img/step2.png">
		<img src="img/step3.png">
	</div>
</div>

<div class="content2">
	<a name="whyodc"><p id="content2"> Why ODC? </p></a>
	
	<div class='justify'>
		<p class="paragraph"> Online Doctors Consultation (ODC) is a telemedicine service that allows you to consult with a doctor at any time, day or night.
							There is no need to make an appointment to see a licensed doctor. You can chat with a doctor whenever and as frequently as you want. </p>
	</div>
</div>

<!-- FAQs Accordion -->
<div class="content2faqs">
	<a name="faqs"><p id="content2"> Health FAQs </p></a>

	<h6> Heart </h6>
	<button class="accordion"> What causes hypertension? </button>
	<div class="panel">
		<p> Inactivity, poor diet, obesity, age, and genetics are examples of causes
			so practicehealthy diet and properexercise. </p>
		<hr>
	</div>

	<button class="accordion"> What is the normal blood pressure? </button>
	<div class="panel">
		<p> 140/90 is relatively normal, however an increase of blood pressure might lead to hypertension
			which will then proceed to a heart attack if not treated with medication or first aid immediately. </p>
		<hr>
	</div>

	<button class="accordion"> What are the symptoms of an impending heart attack? </button>
	<div class="panel">
		<p> Some heart attacks strike suddenly, but many people have warning signs and symptoms hours, days
			or weeks in advance. The earliest warning might be recurrent chest pain or pressure (angina) that's
			triggered by activity and relieved by rest. Angina is caused by a temporary decrease in blood flow to
			the heart. </p>
		<hr>
	</div>

	<h6> Immune System </h6>
	<button class="accordion"> What are the symptoms of fever? </button>
	<div class="panel">
		<p> Recurring fever, chills, muscle ache, and fatigue
			can be a variety of symptoms one may have. </p>
		<hr>
	</div>

	<button class="accordion"> What to do if you have fever? </button>
	<div class="panel">
		<p> Avoiding contact that includes the possibility of passing the
			substance that carries the virus (e.g. saliva). </p>
		<hr>
	</div>

	<h6> Mental Health </h6>
	<button class="accordion"> Is therapy essential? </button>
	<div class="panel">
		<p> Therapy can help you learn life long coping skills. </p>
		<hr>
	</div>

	<button class="accordion"> Common cure for mental illness? </button>
	<div class="panel">
		<p> Counseling is the professional way of “curing” any
			problem or illness that can be connected to the mental health. </p>
		<hr>
	</div>

	<button class="accordion"> What are the symptoms of Depression? </button>
	<div class="panel">
		<p> The undernourishment in the body causes changes in the brain,
			often causing a negative shift in moods which leads to depression. </p>
		<hr>
	</div>

	<button class="accordion"> Can stress cause depression? </button>
	<div class="panel">
		<p> chronic stress may be expressed emotionally,physiologically
			and behaviorally, and may result not only int eh
			development of an eating disorder but in its maintenance as well. </p>
		<hr>
	</div>

		<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
			panel.style.maxHeight = null;
			} else {
			panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		});
		}
		</script>
</div>

<div class="content2">
	<a name="about"><p id="content2about"> About </p></a>
	
	<div class='justify'>
		<p class="paragraph"> Online Doctors Consultation is a telemedicine service with the goal
			of enhancing the lives of Filipinos by providing them with access to high-quality healthcare. </p>
		<p class="paragraph"> It's an online consultation service that links patients with doctors from a
			wide range of specializations. It provides services to make medical consultations more secure
			and convenient. There are no subscription or service costs associated with using the platform. </p>
	</div>
</div>
<br><br><br><br><br>

<!-- Footer -->
<div class="footer">
	<p class="l"> Copyright 2022 OCD. All rights reserved. </p>
	
	<a href="https://web.facebook.com/?_rdc=1&_rdr"> <img class="r" src="img/fb.png"> </a>
	<p class="r"> Connect with Us </p>
</div>


</body>
</html>