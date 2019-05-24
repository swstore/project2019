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
							<a href='index.php#' class='section-toggle' data-section='intro' >
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
					<h5><br>&nbsp&nbsp&nbsp&nbsp<font color="white"><?php echo "ผู้ใช้งาน = ".$username; ?></font></h5>
					</div>
					<?php }ELSE{ ?>
					<div align="left">
					<h5><br>&nbsp&nbsp&nbsp&nbsp<font color="white"><?php echo "ยังไม่ได้ล๊อกอิน"; ?></font></h5>
					</div>
					<?php } ?>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php

$qa=array();
$userid = $_SESSION['userid'];
$_SESSION['prev']="result.php";
if ($userid != ''){
					$sql = "SELECT * FROM answer WHERE userid LIKE '%$userid%'";
					$query = mysqli_query($conn,$sql);
					while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
						//print_r($result);
						$qa[$result[questionnumber]]=$result[answer];
					}

	$j=0;
	$row=array();
	for($i=1;$i<=80;$i++){
		//ข้อที่ยังไม่ได้ทำ
		if($qa[$i]==""){
			$k=$i; if($k < 10){$k = "0".$k;}
			$row[$j].='<a href="question.php?question='.$i.'"><span style="color: red;" />'.$k." ".'</span></a>';
		}
		//ข้อที่ทำแล้ว
		ELSE{
			$k=$i; if($k < 10){$k = "0".$k;}
			$row[$j].='<span style="color: black;" />'.$k." ".'</span>';
			//echo $qa[$i]." ";
		}
		if($i % 16 == 0){
	//		echo "<br>";
			$j++;
		}
		echo " ";
	}
	echo "<p align=center>$row[0]</p>";
	echo "<p align=center>$row[1]</p>";
	echo "<p align=center>$row[2]</p>";
	echo "<p align=center>$row[3]</p>";
	echo "<p align=center>$row[4]</p>";

?>	
								<div class='intro-text' >							
									<font color="white"><h2>สรุปผลการทดสอบ</h2></font>
								</div>
		
<?php }ELSE{ 
	
		//$userid = $_SESSION['userid'];
		//if ($userid == ''){ 
			$_SESSION['prev']="result.php";?>
			<center><br><br><br><br><font color="white">กรุณาล๊อกอินก่อนใช้งาน</font><br><br>
			<input type="button" onClick="MM_goToURL('parent','index.php');return document.MM_returnValue" value="Home">
			<input type="button" onClick="MM_goToURL('parent','registration/login.php');return document.MM_returnValue" value="Login">
			</h2></center>	
<?php	 } 	
	
?>		
	
		
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