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

<?php
					echo "user = ".$userid = $_SESSION['userid'];
					echo "<br>logontime = ".$logontime=$_SESSION['logontime'];
					echo "<br>timecheck = ".$timecheck=(int)time()-(int)$logontime;

					function secToHR($seconds) {
							$hours = floor($seconds / 3600);
							$minutes = floor(($seconds / 60) % 60);
							$seconds = $seconds % 60;
							return "$hours:$minutes:$seconds";
					}
					echo "<br>time = ".$logondisplay=secToHR((int)time()-(int)$logontime);
					
					if (($userid != '') && ($timecheck <= 18000)){
						$sql = "SELECT * FROM users WHERE userid LIKE '%$userid%'";
						$query = mysqli_query($conn,$sql);
						$resultuser=mysqli_fetch_array($query,MYSQLI_ASSOC);
						$username = $resultuser["username"];
					}ELSE echo "No Logon";
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