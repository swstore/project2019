<?php 
	session_start();
	ob_start();
	require 'connect.php';
	error_reporting(0);
	ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title>Questionnair</title>
		
		
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/linea.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		
	</head>
	<body>
				<!--=====================================================
					Contact Section
				=====================================================-->
				<section id='contact' class='section contact-section border-d' >
					
					<div class='section-block contact-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>Register <strong class='color' >Me</strong></h2>
							</div>
							
							
							<div class='row' >
							
								<div class='col-md-8' >
									
									<div class='contact-form' >
									
										<form id='contact-form' data-toggle='validator' method='post' action='mail.php' >
										
											<div id='contact-form-result' ></div>
										
											<div class='row' >
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='text' class='form-control' placeholder='Name' name='name' required>
														<div class='help-block with-errors' ></div>
														
													</div>												
												</div>
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='email' class='form-control' placeholder='Email' name='email' required>
														<div class='help-block with-errors' ></div>
													
													</div>
												</div>
												
											</div>
											
											<div class='form-group' >
												
												<input type='text' class='form-control' placeholder='Subject' name='subject' required>
												<div class='help-block with-errors' ></div>
											
											</div>
											
											<div class='form-group' >
												
												<textarea class='form-control' placeholder='Message' name='message' rows='5' required></textarea>
												<div class='help-block with-errors' ></div>
												
											</div>
											
											<div class='form-group text-center' >
												<button type='submit' class='btn-custom btn-color' >
													Send Message
												</button>
											</div>
											
										</form>
										
									</div>
									
									
								</div>
								
								<div class='col-md-4' >
									
									<div class='contact-info-icons' >
										
										<div class='contact-info' >
											
											<i class='ion-ios-location-outline' ></i>
											
											<p>
												1254 Patterson Street<br>
												Houston, TX 77025
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-ios-telephone-outline' ></i>
											
											<p>
												(+123) 713-295-4383<br>
												(+123) 913-295-2583
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-android-globe' ></i>
											
											<p>
												www.google.com<br>
												www.example.com
											</p>
											
										</div>
										
										
										
										
									</div>
									
									
									
								</div>
								
								
							</div>
							
							
							
						</div>
					
					</div>
					
				</section>
		
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
	</body>
</html>