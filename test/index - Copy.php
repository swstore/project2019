<?php 
	session_start();
	ob_start();
	require 'connect.php';
	error_reporting(0);
	ini_set('display_errors', 1);
	$_SESSION['prev']="index.php";
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
			Preloader
		=====================================================-->
		<div id='preloader' >
			<div class='loader' ></div>
			<div class='left' ></div>
			<div class='right' ></div>
		</div>
		
		<div class='main-content' >
			
			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
			
			
			
			<!--=====================================================
				Menu Button
			=====================================================-->
			<a href='#' class='menu-btn' >
				<span class='lines' >
					<span class='l1' ></span>
					<span class='l2' ></span>
					<span class='l3' ></span>
				</span>
			</a>
			
			
			<!--=====================================================
				Menu
			=====================================================-->
			<div class='menu' >
				<div class='inner' >
					<ul class='menu-items' >
						
						<li>
							<a href='#' class='section-toggle' data-section='intro' >
								Home
							</a>
						</li>
						
						<li>
							<a href='registration\register.php' class='section-toggle' data-section='register' >
								Register
							</a>
						</li>
						
						<li>
							<a href='registration\login.php' class='section-toggle' data-section='login' >
								Login
							</a>
						</li>
						
						<li>
							<a href='result.php' class='section-toggle' data-section='login' >
								Result
							</a>
						</li>
						
						<li>
							<a href='registration\change_password.php' class='section-toggle' data-section='change_password' >
								Change password
							</a>
						</li>
						
						<li>
							<a href='registration\editprofile.php' class='section-toggle' data-section='editprofile' >
								Edit Profile
							</a>
						</li>
						
						<li>
							<a href='registration\logout.php' class='section-toggle' data-section='logut' >
								Logut
							</a>
						</li>
						
						<li>
							<a href='#about' class='section-toggle' data-section='about' >
								About
							</a>
						</li>
						
						
						<li>
							<a href='#contact' class='section-toggle' data-section='contact' >
								Contact
							</a>
						</li>
						
						
					</ul>
				</div>
			</div>
			
			<div class='animation-block' ></div>
			
			
			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >
				
				<!--=====================================================
					Main Section
				=====================================================-->
				<section id='intro' class='section section-main active' >
					
					<?php
					$userid = $_SESSION['userid'];
					if ($userid != ''){
					$sql = "SELECT * FROM users WHERE userid LIKE '%$userid%'";
					$query = mysqli_query($conn,$sql);
					$resultuser=mysqli_fetch_array($query,MYSQLI_ASSOC);
					$username = $resultuser["username"];
					?>
					<div align="left">
					<h5><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color="white"><?php echo "ผู้ใช้งาน = ".$username; ?></font></h5>
					</div>
					<?php }ELSE{ ?>
					<div align="left">
					<h5><br>&nbsp&nbsp&nbsp&nbsp<font color="white"><?php echo "ยังไม่ได้ล๊อกอิน"; ?></font></h5>
					</div>
					<?php } ?>
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h1>ทดสอบ</h1>
									
									<p>
										เพื่อทดสอบความถนัดทางการเรียนต่อในสาขาที่ถนัด
									</p>
									
									<div class='intro-btns' >
<!--										
										<a href='result.php' class='btn-custom section-toggle' data-section='register' >
											<h5>สรุปผล</h5>
										</a>
-->										
										<a href='question.php?question=1' class='btn-custom section-toggle' data-section='questionnair' >
											<h5>เริ่มทำแบบทดสอบ</h5>
										</a>
										
									</div>
									
								</div>
							</div>
							
						</div>
						
					</div>
				
				</section>
				
				
				<!--=====================================================
					About Section
				=====================================================-->
				<section id='about' class='section about-section border-d' >
					
					<div class='section-block about-block' >
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>
									I'm a <strong class='color' >Programmer</strong>
								</h2>
							</div>
							
							<div class='row' >
								
								<div class='col-md-4' >
									
									<ul class='info-list' >
										
										<li>
											<strong>Name:</strong>
											<span>John Doe</span>
										</li>
										
										<li>
											<strong>Job:</strong>
											<span>Freelancer</span>
										</li>
										
										<li>
											<strong>Age:</strong>
											<span>26 Years</span>
										</li>
										
										<li>
											<strong>Residence:</strong>
											<span>United States</span>
										</li>
										
										<li>
											<strong>Hometown:</strong>
											<span>Dokri</span>
										</li>
										
										
										
									</ul>
									
								</div>
								
								<div class='col-md-8' >
								
									<div class='about-text' >
										<p>
											Qui ne indoctum electram vituperatoribus. Eirmod tamquam efficiendi mei cu, eum idque voluptatum ad, quo id tollit regione prompta. Cu probo iusto assentior eos, usu summo perpetua ne. Te suas phaedrum ullamcorper has. Ea mei ponderum rationibus dissentias. Inani phaedrum suavitate eu qui, vide aperiri facilis est eu. Te appetere cotidieque pro, duo eu assum facete instructior, no autem aeterno reprimique nec. Pri cu delectus adolescens, eruditi placerat cu sed, zril nonumes forensibus in eam. Eam ne dolore diceret pericula, in vis numquam pertinax. Vel ne dolorum eloquentiam, et vel senserit incorrupte neglegentur, pro cu audiam ocurreret reprimique.
										</p>
										
										<p>
											Qui ne indoctum electram vituperatoribus. Eirmod tamquam efficiendi mei cu, eum idque voluptatum ad, quo id tollit regione prompta. Cu probo iusto assentior. Qui ne indoctum electram vituperatoribus. Eirmod tamquam efficiendi mei cu, eum idque voluptatum ad.
										</p>
										
									</div>
									
									<div class='about-btns' >
										
										<a href='#' class='btn-custom btn-color' >
											Download Resume
										</a>
										
										<a href='#' class='btn-custom btn-color' >
											Hire Me
										</a>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
					</div>
					
					<div class='section-block services-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>My <strong class='color' >Services</strong></h2>
								
							</div>
							
							
							
							<div class='row' >
								
								<div class='col-md-4' >
									<div class='service' >
										
										<div class='icon' >
											<i class='icon-basic-photo' ></i>
										</div>
										
										<div class='content' >
											
											<h4>Photography</h4>
											
											<p>
												Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum.
											</p>
											
										</div>
										
									</div>
								</div>
								
								<div class='col-md-4' >
									<div class='service' >
										
										<div class='icon' >
											<i class='icon-basic-keyboard' ></i>
										</div>
										
										<div class='content' >
											
											<h4>Programming</h4>
											
											<p>
												Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum.
											</p>
											
										</div>
										
									</div>
								</div>
								
								<div class='col-md-4' >
									<div class='service' >
										
										<div class='icon' >
											<i class='ion-social-wordpress-outline' ></i>
										</div>
										
										<div class='content' >
											
											<h4>WordPress</h4>
											
											<p>
												Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum.
											</p>
											
										</div>
										
									</div>
								</div>
								
								
								
							</div>
							
							
						</div>
						
					</div>
					
					<div class='section-block skills-block' >
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>
									My <strong class='color' >Skills</strong>
								</h2>
								
							</div>
							
							<div class='row' >
								
								<div class='col-md-6' >
									
									<div class='skill' >
										
										<h4>HTML/CSS</h4>
										
										<div class='bar' >
											<div class='percent' style='width:85%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4>php</h4>
										
										<div class='bar' >
											<div class='percent' style='width:90%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4>jQuery</h4>
										
										<div class='bar' >
											<div class='percent' style='width:75%;' ></div>
										</div>
										
									</div>
									
								</div>
								
								<div class='col-md-6' >
									
									<div class='skill' >
										
										<h4>JavaScript</h4>
										
										<div class='bar' >
											<div class='percent' style='width:85%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4>WordPress</h4>
										
										<div class='bar' >
											<div class='percent' style='width:90%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4>SEO</h4>
										
										<div class='bar' >
											<div class='percent' style='width:75%;' ></div>
										</div>
										
									</div>
									
								</div>
								
							</div>
							
							
						</div>
					</div>
					
					<div class='section-block pricing-block' >
						
						<div class='section-header' >
							<h2>My <strong class='color' >Pricing</strong></h2>
						</div>
						
						
						<div class='row' >
							
							<div class='col-md-4' >
								
								<div class='p-table' >
									
									<div class='header' >
										
										<h4>Basic</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >19</span>
											<span class='period' >/HR</span>
										</div>
										
										
									</div>
									
									<ul class='items' >
										<li>
											App Designing
										</li>
										<li>
											App Development
										</li>
										<li>
											Web Development
										</li>
									</ul>
									
									<a href='#' class='btn-custom btn-color' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
							<div class='col-md-4' >
								
								<div class='p-table' >
									
									<div class='header' >
										
										<h4>Pro</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >29</span>
											<span class='period' >/HR</span>
										</div>
										
										
									</div>
									
									<ul class='items' >
										<li>
											App Designing
										</li>
										<li>
											App Development
										</li>
										<li>
											Web Development
										</li>
									</ul>
									
									<a href='#' class='btn-custom btn-color' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
							<div class='col-md-4' >
								
								<div class='p-table' >
									
									<div class='header' >
										
										<h4>Gold</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >39</span>
											<span class='period' >/HR</span>
										</div>
										
										
									</div>
									
									<ul class='items' >
										<li>
											App Designing
										</li>
										<li>
											App Development
										</li>
										<li>
											Web Development
										</li>
									</ul>
									
									<a href='#' class='btn-custom btn-color' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
							
						</div>
						
						
					</div>
					
				</section>
				
				
				<!--=====================================================
					Resume Section
				=====================================================-->
				<section id='resume' class='section resume-section border-d' >
					
					<div class='section-block timeline-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>My <strong class='color' >Education</strong></h2>
								
							</div>
							
							<ul class='timeline' >
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>CSS College Larkana</h4>
										
										<em>
											<span>Masters Degree</span>
											<span>2013-2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>CSS College Larkana</h4>
										
										<em>
											<span>Masters Degree</span>
											<span>2013-2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>CSS College Larkana</h4>
										
										<em>
											<span>Masters Degree</span>
											<span>2013-2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								
								
							</ul>
							
						</div>
						
					</div>
					
					<div class='section-block timeline-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>My <strong class='color' >Experience</strong></h2>
								
							</div>
							
							<ul class='timeline' >
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>CSS College Larkana</h4>
										
										<em>
											<span>Masters Degree</span>
											<span>2013-2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>CSS College Larkana</h4>
										
										<em>
											<span>Masters Degree</span>
											<span>2013-2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>CSS College Larkana</h4>
										
										<em>
											<span>Masters Degree</span>
											<span>2013-2016</span>
										</em>
										
										<p>
											Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.
										</p>
										
									</div>
									
								</li>
								
								
								
							</ul>
							
						</div>
						
					</div>
					
					<div class='section-block testimonials-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>My <strong class='color' >Clients</strong></h2>
								
							</div>
							
							
							<div class='testimonials-slider' >
								
								
								<div class='testimonial' >
									
									<div class='icon' >
										<i class='ion-quote' ></i>
									</div>
									
									<p>
										Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.
									</p>
									
									<div class='author' >
										<h4>Jake Doe</h4>
										<span>CEO at Company</span>
									</div>
									
								</div>
								
								<div class='testimonial' >
									
									<div class='icon' >
										<i class='ion-quote' ></i>
									</div>
									
									<p>
										Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.
									</p>
									
									<div class='author' >
										<h4>Jake Doe</h4>
										<span>CEO at Company</span>
									</div>
									
								</div>
								
								
								<div class='testimonial' >
									
									<div class='icon' >
										<i class='ion-quote' ></i>
									</div>
									
									<p>
										Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.
									</p>
									
									<div class='author' >
										<h4>Jake Doe</h4>
										<span>CEO at Company</span>
									</div>
									
								</div>
								
								<div class='testimonial' >
									
									<div class='icon' >
										<i class='ion-quote' ></i>
									</div>
									
									<p>
										Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.
									</p>
									
									<div class='author' >
										<h4>Jake Doe</h4>
										<span>CEO at Company</span>
									</div>
									
								</div>
								
								
								<div class='testimonial' >
									
									<div class='icon' >
										<i class='ion-quote' ></i>
									</div>
									
									<p>
										Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.
									</p>
									
									<div class='author' >
										<h4>Jake Doe</h4>
										<span>CEO at Company</span>
									</div>
									
								</div>
								
								<div class='testimonial' >
									
									<div class='icon' >
										<i class='ion-quote' ></i>
									</div>
									
									<p>
										Ei constituam theophrastus per, sea dolorum disputationi in, vel menandri suavitate similique in. Vide assum conceptam eum et. Has postulant vul putate eu. Pro justo aliquando prodesset at.
									</p>
									
									<div class='author' >
										<h4>Jake Doe</h4>
										<span>CEO at Company</span>
									</div>
									
								</div>
								
								
							</div>
							
						</div>
						
					</div>
					
				</section>
				
				
				<!--=====================================================
					Portfolio Section
				=====================================================-->
				<section id='portfolio' class='section portfolio-section border-d' >
					
					<div class='section-block portfolio-block' >
						
						<div class='container-fluid' >
							
							
							<div class='section-header' >
								<h2>My <strong class='color' >Works</strong></h2>
							</div>
							
							<ul class='portfolio-filters' >
								<li>
									<a href='#' class='active' data-group='all' >
										All
									</a>
								</li>
								<li>
									<a href='#' data-group='web' >
										Web
									</a>
								</li>
								<li>
									<a href='#' data-group='tech' >
										Tech
									</a>
								</li>
								<li>
									<a href='#' data-group='photography' >
										Photography
									</a>
								</li>
							</ul>
							
							<ul class='portfolio-items' >
								
								<li data-groups='["web","tech"]' >
									<div class='inner' >
										<img src='img/portfolio/1.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-1' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-1' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/1.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								<li data-groups='["tech","photography"]' >
									<div class='inner' >
										<img src='img/portfolio/2.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-2' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-2' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/2.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								<li data-groups='["web","photography"]' >
									<div class='inner' >
										<img src='img/portfolio/3.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-3' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-3' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/3.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								
								<li data-groups='["web"]' >
									<div class='inner' >
										<img src='img/portfolio/4.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-4' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-4' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/4.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								<li data-groups='["tech"]' >
									<div class='inner' >
										<img src='img/portfolio/5.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-5' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-5' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/5.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								<li data-groups='["photography"]' >
									<div class='inner' >
										<img src='img/portfolio/6.jpg' alt>
										
										<div class='overlay' >
											
											<a href='#popup-6' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-6' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img src='img/portfolio/6.jpg' alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
													<h4>My Project Title</h4>
													
													<!--project popup description-->
													<p>
														Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
							</ul>
							
						</div>
					
					</div>
					
				</section>
				
				
				<!--=====================================================
					Contact Section
				=====================================================-->
				<section id='contact' class='section contact-section border-d' >
					
					<div class='section-block contact-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>Contact <strong class='color' >Me</strong></h2>
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
				
			</div>
			
		</div>
		
		
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