<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | BNHS-Portal</title>
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/image/lock.png">
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/w3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/w3.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url();?>assets/css/scrolling-nav.css" rel="stylesheet"> </head>

<body id="page-top" ng-app="myApp" ng-controller="myCtrl" style="background-image: url(<?php echo base_url()?>)">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: darkcyan;" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url();?>assets/image/locker.png" width="50" height="50" alt=""> BNHS-Portal</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#about">About</a> </li>
					<li class="nav-item dropdown"> <a class="nav-link js-scroll-trigger" href="#services">Services</a> </li>
					<li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#inquiries">Inquiries</a> </li>
					<li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#contact">Contact</a> </li>
					<button class="btn btn-secondary"  data-target="#"><a href="studentside/loginstudent.php">Login</a></button>
				</ul>
			</div>
		</div>
	</nav>
	<div class="mySlides w3-display-container w3-center"> <img src="<?php echo base_url();?>assets/image/bnhs.jpg" height="600" width="100%">
		<div class="w3-display-middle w3-margin-top w3-center">
			<h1 class="w3-xxlarge w3-text-white"> <span class="w3-hide-small w3-text-white">BNHS</span><span class="w3-padding w3-black w3-opacity-min"><b>PORTAL</b></span></div>
	</div>
	<div class="mySlides w3-display-container w3-center"> <img src="<?php echo base_url();?>assets/image/r3.jpg" height="600" width="100%">
		<div class="w3-display-middle w3-margin-top w3-center">
			<h1 class="w3-xxlarge w3-text-white"> <span class="w3-hide-small w3-text-white">BNHS</span><span class="w3-padding w3-black w3-opacity-min"><b>PORTAL</b></span></div>
	</div>
	<section id="about">
		<div class="w3-container">
			<div class="w3-container col-lg-8 mx-auto">
				<h1><span class="w3-padding w3-black w3-opacity-min w3-round">About BNHS-Portal</span></h1>
				<div class="w3-container">
					<div class="w3-container">
						</br> <small>With safety and Ease of Way in learning on the students due this pandemic we assure you that we serve you and continue our service thru online and modular classes. also we give information and other stuff for you guys</small> </div>
				</div>
				</br>
				<h3><span class="w3-padding w3-black w3-opacity-min w3-round">We can assure your the following:</span></h3>
				<div class="w3-row-padding w3-container">
					<div class="w3-container w3-left" style="width:50%"> </div>
					<div class="w3-container w3-left">
						</br>
						<h1>Security</h1> <small>The single most important thing that we assured that the student can be</small> </div>
					<div class="w3-container w3-left">
						</br>
						</br>
						<h1>Independence and Respect</h1> <small>One key lesson that school  is the training ground for our future life we train them as a professional.</small> </div>
					<div class="w3-container w3-left">
						</br>
						</br>
						<h1>Health and Safety</h1> <small>With research supporting the claim that this time we need to be flex and continue studied even we have covid 19 pandemic situation. our teaching force find a way to teach you thru online we can access both smartphone and pc</small> </div>
					<div class="w3-container w3-left">
						</br>
						</br>
						<h1>Personalisation</h1> <small>With many students following a uniform dress code, it can be difficult for students to express creativity and individualism outside of the classroom. Giving students a personal area they can call their own – and allowing them to personalise it with stickers, photos and other embellishments – is one way to let their unique personality shine through. While ground rules should be laid out regarding what students can and can’t do with their lockers, giving them the freedom to add their own finishing touches may seem small but can make a big difference to their overall wellbeing – particularly for students who struggle socially.</small> </div>
					<div class="w3-container w3-left">
						</br>
						</br>
						<h1>Privacy</h1> <small>Privacy is important. Whether you’re a student, teacher, parent or professor, privacy is something we all see as valuable – but why is that? The concept of privacy creates boundaries that teach students about mutual respect, defines value in their belongings, thoughts and ideas, and builds trust by giving them access to a space that’s theirs and theirs alone. A locker plays an essential role in guaranteeing privacy by creating a place in schools where students can house their personal belongings, rather than having them out in the open.</small> </div>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2>We Offer a Course for those who enroll in SHS</h2>
					<p class="lead">
						<ol>
							<li ng-repeat="x in dept">Course Selection</li>
						</ol> Availble Lockers :
						<table class="table-striped">
							<thead>
								<tr>
									<th ng-repeat="d in label "></th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="l in locker ">
									<td> </td>
									<td> </td>
								</tr>
							</tbody>
						</table>
						For more info see the the department 
						<br>
						<button type="button" class="btn btn-secondary"  data-target="#"><a href="studentside/loginstudent.php">Login to see all department</a></button>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="inquiries">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2>Inquires</h2>
					<p class="lead">Please Bring the Following to your respective Teacher
						<ul>
							<li>Your Report Card</li>
							<li>Present Photocopy of your ID</li>
							<li>Survey Form</li>
							<li>Clearance slip</li>
							<li>NSO and Form 137-A for Freshmen</li>
						</ul> Online Enrollment and Classes shall be started accordingly based on the class calendar (DepEd)
						</p>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="bg-light">
		<div class="w3-container">
			<div class="w3-row-padding w3-grayscale">
				<h1 class="w3-center">Contact us</h1> </br>
				<div class="w3-col l2 m12 w3-margin-bottom"> <img src="<?php echo base_url();?>assets/image/famor.jpg" alt="famor" style="width:100%" class="w3-round w3-card-4">
					<h3 class="w3-center">Famor Calago</h3>
					<p class="w3-opacity w3-center">Project Manager</p>
					
					<p><a href="https://www.facebook.com/famor.calago" class="w3-button w3-light-grey w3-block" style="text-decoration:none" target="_blank">Contact</a></p>
				</div>
				<div class="w3-col l2 m12 w3-margin-bottom"> <img src="<?php echo base_url();?>assets/image/segovia.jpg" alt="Segovia" style="width:100%" class="w3-round w3-card-4">
					<h3 class="w3-center">Segovia Junmar</h3>
					<p class="w3-opacity w3-center">Systems Analyst</p>
					
					<p><a href="https://www.facebook.com/segovia24" class="w3-button w3-light-grey w3-block" style="text-decoration:none" target="_blank">Contact</a></p>
				</div>
				<div class="w3-col l2 m12 w3-margin-bottom"> <img src="<?php echo base_url();?>assets/image/borong.jpg" alt="borong" style="width:100%" class="w3-round w3-card-4">
					<h3 class="w3-center">Francis Borong</h3>
					<p class="w3-opacity w3-center">Developer</p>
					
					<p><a href="https://www.facebook.com/11Borong" class="w3-button w3-light-grey w3-block" style="text-decoration:none" target="_blank">Contact</a></p>
				</div>
				<div class="w3-col l2 m12 w3-margin-bottom"> <img src="<?php echo base_url();?>assets/image/butete.jpg" alt="butete" style="width:100%" class="w3-round w3-card-4">
					<h3 class="w3-center">Mariejoy Narciso</h3>
					<p class="w3-opacity w3-center">Technical Writer</p>
					
					<p><a href="https://www.facebook.com/P00CH09" class="w3-button w3-light-grey w3-block" style="text-decoration:none" target="_blank">Contact</a></p>
				</div>
				<div class="w3-col l2 m12 w3-margin-bottom"> <img src="<?php echo base_url();?>assets/image/dokkaebi.jpg" alt="dokkaebi" style="width:100%" class="w3-round w3-card-4">
					<h3 class="w3-center">Vladimir Cres</h3>
					<p class="w3-opacity w3-center">UX Designer</p>
					
					<p><a href="https://www.facebook.com/malldogxd" class="w3-button w3-light-grey w3-block" style="text-decoration:none" target="_blank">Contact</a></p>
				</div>
				<div class="w3-col l2 m12 w3-margin-bottom"> <img src="<?php echo base_url();?>assets/image/mam.jpg" alt="Mam" style="width:100%" class="w3-round w3-card-4">
					<h3 class="w3-center">Jennifer Amores</h3>
					<p class="w3-opacity w3-center">Instructor</p>
					
					<p><a href="https://www.facebook.com/grace.fantonial.92" class="w3-button w3-light-grey w3-block" style="text-decoration:none" target="_blank">Contact</a></p>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				</div>
				<div class="modal-body">
					<form method="post" action="controller/loginController/loginUser.php">
						<input type="text" class="form-control" placeholder="Username" required="" name="username" />
						<br/>
						<input type="password" class="form-control" placeholder="Password" required="" name="password" />
						<br/>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-default submit" name="login">Login</button>
							<a href="loginstudent.php">log-in as student</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; MalldogR150</p>
		</div>
		<!-- /.container -->
	</footer>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/angular.js"></script>
	<!-- Plugin JavaScript -->
	<script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Custom JavaScript for this theme -->
	<script src="<?php echo base_url();?>assets/js/scrolling-nav.js"></script>
	<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for(i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		myIndex++;
		if(myIndex > x.length) {
			myIndex = 1
		}
		x[myIndex - 1].style.display = "block";
		setTimeout(carousel, 4000);
	}
	</script>
</body>

</html>