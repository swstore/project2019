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
$_SESSION['prev']="index.php";
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
					//print_r($resultuser);
					
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
		<h2>Edit Profile</h2>
	</div>
	
	<form method="post" action="editprofile_confirm.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>รหัสนักเรียน  : <?php echo $userid; ?></label>
		<?php //echo $resultuser["userid"]; ?>
<!--			<input maxlength="5" type="text" name="userid" value="<?php echo $resultuser["userid"]; ?>">
-->		</div>
		<div class="input-group">
			<label>ชื่อ</label>
			<input type="text" name="username" value="<?php echo $resultuser["username"]; ?>">
		</div>
		<div class="input-group">
			<label>นามสกุล</label>
			<input type="text" name="surname" value="<?php echo $resultuser["surname"]; ?>">
		</div>
		<div class="input-group">
			<label>ชั้น </label>
			<select style="font-size:16px; id="class" name="class" >
				<option <?php if ($resultuser["class"] == '1') {echo "selected";}?> value="1">ม. 1</option>
				<option <?php if ($resultuser["class"] == '2') {echo "selected";}?> value="2">ม. 2</option>
				<option <?php if ($resultuser["class"] == '3') {echo "selected";}?> value="3">ม. 3</option>
				<option <?php if ($resultuser["class"] == '4') {echo "selected";}?> value="4">ม. 4</option>
				<option <?php if ($resultuser["class"] == '5') {echo "selected";}?> value="5">ม. 5</option>
				<option <?php if ($resultuser["class"] == '6') {echo "selected";}?> value="6">ม. 6</option>
			</select>
		</div>
		<div class="input-group">
			<label>ห้อง </label>
			<select style="font-size:16px; id="room" name="room" >
				<option <?php if ($resultuser["room"] == '1') {echo "selected";}?> value="1">1</option>
				<option <?php if ($resultuser["room"] == '2') {echo "selected";}?> value="2">2</option>
				<option <?php if ($resultuser["room"] == '3') {echo "selected";}?> value="3">3</option>
				<option <?php if ($resultuser["room"] == '4') {echo "selected";}?> value="4">4</option>
				<option <?php if ($resultuser["room"] == '5') {echo "selected";}?> value="5">5</option>
				<option <?php if ($resultuser["room"] == '6') {echo "selected";}?> value="6">6</option>
				<option <?php if ($resultuser["room"] == '7') {echo "selected";}?> value="7">7</option>
				<option <?php if ($resultuser["room"] == '8') {echo "selected";}?> value="8">8</option>
				<option <?php if ($resultuser["room"] == '9') {echo "selected";}?> value="9">9</option>
				<option <?php if ($resultuser["room"] == '10') {echo "selected";}?> value="10">10</option>
				<option <?php if ($resultuser["room"] == '11') {echo "selected";}?> value="11">11</option>
				<option <?php if ($resultuser["room"] == '12') {echo "selected";}?> value="12">12</option>
				<option <?php if ($resultuser["room"] == '13') {echo "selected";}?> value="13">13</option>
				<option <?php if ($resultuser["room"] == '14') {echo "selected";}?> value="14">14</option>
				<option <?php if ($resultuser["room"] == '15') {echo "selected";}?> value="15">15</option>
				<option <?php if ($resultuser["room"] == '16') {echo "selected";}?> value="16">16</option>
				</select>
		</div>
		<div class="input-group">
			<label>เลขที่</label>
			<input maxlength="2" type="text" name="number" value="<?php echo $resultuser["number"]; ?>">
		</div>
		
		<div class="input-group">
			<label>ปีการศึกษา</label>
<!--		<input style="width: 60px;" maxlength="4" type="text" name="year" value="<?php echo $resultuser["year"]; ?>"> -->
			<input maxlength="4" type="text" name="year" value="<?php echo $resultuser["year"]; ?>">
		</div>
		<div class="input-group">
			<label>แผนการเรียนปัจจุบัน</label>
			<select style="font-size:16px; id="current" name="current" >
				<option <?php if ($resultuser["current"] == 'ห้องปกติ') {echo "selected";}?> value="ห้องปกติ">ห้องปกติ</option>
				<option <?php if ($resultuser["current"] == 'ห้อง Intensive') {echo "selected";}?> value="ห้อง Intensive">ห้อง Intensive</option>
				<option <?php if ($resultuser["current"] == 'ห้อง Gifted') {echo "selected";}?> value="ห้อง Gifted">ห้อง Gifted</option>
				<option <?php if ($resultuser["current"] == 'วิทย์-คณิต') {echo "selected";}?> value="วิทย์-คณิต">วิทย์-คณิต</option>
				<option <?php if ($resultuser["current"] == 'ศิลป์-คำนวน') {echo "selected";}?> value="ศิลป์-คำนวน">ศิลป์-คำนวน</option>
				<option <?php if ($resultuser["current"] == 'ศิลป์-ภาษา') {echo "selected";}?> value="ศิลป์-ภาษา">ศิลป์-ภาษา</option>
				<option <?php if ($resultuser["current"] == 'อาชีวะ') {echo "selected";}?> value="อาชีวะ">อาชีวะ</option>
				</select>
		</div>
		<div class="input-group">
			<label>แผนการเรียนที่คาดหวัง</label>
			<input type="text" name="expect" value="<?php echo $resultuser["expect"]; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $resultuser["email"]; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_0">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="edit_user">แก้ไข</button>
		</div>
		<p>
			แก้ไขแล้ว  <a href="login.php">ล๊อกอิน</a> เลย หรือ <a href="../index.php">กลับหน้าหลัก</a
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