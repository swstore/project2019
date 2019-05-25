<?php 
	session_start();
	ob_start();
	require '../connect.php';
	error_reporting(0);
	ini_set('display_errors', 1);
?>
<?php include('server.php') ?>
<?php
error_reporting(0);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
					$userid = $_SESSION['userid'];
					if ($userid != ''){
					$sql = "SELECT * FROM users WHERE userid LIKE '%$userid%'";
					$query = mysqli_query($conn,$sql);
					$resultuser=mysqli_fetch_array($query,MYSQLI_ASSOC);
					$username = $resultuser["username"];
					
/*			$username = $resultuser["username"];
			$surname = $resultuser["surname"];
			$class = $resultuser["class"];
			$number = $resultuser["number"];
			$year = $resultuser["year"];
			$current = $resultuser["current"];
			$expect = $resultuser["expect"];
			$email = $resultuser["email"];
*/			
					?>
<!--					<div align="left">
					<h5><br>&nbsp&nbsp&nbsp&nbsp<font color="black"><?php echo "ผู้ใช้งาน = ".$username; ?></font></h5>
					</div>
-->
	<div class="header">
		<h2>Change Password</h2>
	</div>
	
	<form method="post" action="Change_Password.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Password เดิม</label>
			<input type="password" name="password_0">
		</div>
		
		<div class="input-group">
			<label>Password ใหม่</label>
			<input type="password" name="password_1">
		</div>
		
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="change_password">แก้ไข</button>
		</div>
		<p>
			<a href="../index.php">กลับหน้าหลัก</a
		</p>
	</form>
	
	<?php }ELSE{ ?>
		<div class="header">
			<h2>กรุณาล๊อกอินก่อน</h2>
		</div>
		<div align="center">
			<p>
				<a href="login.php">ล๊อกอิน</a>  หรือ <a href="../index.php">กลับหน้าหลัก</a
			</p>
		</div>
					<?php } ?>
					
</body>
</html>