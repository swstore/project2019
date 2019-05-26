<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
<!--	<link rel="stylesheet" type="text/css" href="style.css">
-->	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title>Questionnair</title>
		
		
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='../css/linea.css' >
		<link rel='stylesheet' type='text/css' href='../css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='../css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='../css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='../css/style.css' >
		
		<script type="text/javascript">
		function MM_goToURL() { //v3.0
		  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
		  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
		}
		</script>
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
			
			<div class='animation-block' ></div>
			
			
			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >
				
				<!--=====================================================
					Main Section
				=====================================================-->
				<section id='intro' class='section section-main active' >
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h2><font color="white">Login</font></h2>
									<br>
<center>								
<form method="post" action="login.php">

		<?php include('errors.php'); ?>
<h3>
		<div class="input-group">
			<label><font color="white">รหัสนักเรียน&nbsp&nbsp</font></label>
			<input type="text" name="userid" >
		</div>
		<div class="input-group">
			<label><font color="white">Password&nbsp&nbsp&nbsp&nbsp&nbsp</font></label>
			<input type="password" name="password">
		</div>
</h3>
		
		<div class="input-group">
		<h3> <input type="submit" name="login_user"  value="ล๊อกอิน"></h3>
		</div>
</form>
<h3>
		<input name="button" type="button" id="button" onClick="MM_goToURL('parent','../index.php');return document.MM_returnValue" value="หน้าหลัก">
		<input name="button" type="button" id="button" onClick="MM_goToURL('parent','register.php');return document.MM_returnValue" value="ลงทะเบียน">
</h3>	

</center>										
								
									
								</div>
							</div>
							
						</div>
						
					</div>
				</section>
			</div>

		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='../js/jquery.min.js' ></script>
		<script src='../js/jquery.shuffle.min.js' ></script>
		<script src='../js/owl.carousel.min.js' ></script>
		<script src='../js/jquery.magnific-popup.min.js' ></script>
		<script src='../js/validator.min.js' ></script>
		<script src='../js/script.js' ></script>
</body>
</html>