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
									
									<h2><font color="white">Register</font></h2>
									<br>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		
<center><h4><font color="white">
		<div class="input-group">
			<label>รหัสนักเรียน&nbsp&nbsp&nbsp&nbsp</label>
			<input maxlength="5" type="text" name="userid" value="<?php echo $userid; ?>">
		</div>
		<div class="input-group">
			<label>ชื่อ&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>นามสกุล&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="surname" value="<?php echo $surname; ?>">
		</div>
		
		<div class="input-group">
			<label>ชั้น &nbsp </label>
		<font color="black">
			<select style="font-size:16px; id="class" name="class" >
				<option <?php if ($class == '') {echo "selected";}?> value=""></option>
				<option <?php if ($class == '1') {echo "selected";}?> value="1">ม. 1</option>
				<option <?php if ($class == '2') {echo "selected";}?> value="2">ม. 2</option>
				<option <?php if ($class == '3') {echo "selected";}?> value="3">ม. 3</option>
				<option <?php if ($class == '4') {echo "selected";}?> value="4">ม. 4</option>
				<option <?php if ($class == '5') {echo "selected";}?> value="5">ม. 5</option>
				<option <?php if ($class == '6') {echo "selected";}?> value="6">ม. 6</option>
			</select>
		</font>
		</div>
		<div class="input-group">
			<label>ห้อง &nbsp</label>
			<font color="black">
			<select style="font-size:16px"; id="room" name="room" >
				<option <?php if ($room == '') {echo "selected";}?> value=""></option>
				<option <?php if ($room == '1') {echo "selected";}?> value="1">1</option>
				<option <?php if ($room == '2') {echo "selected";}?> value="2">2</option>
				<option <?php if ($room == '3') {echo "selected";}?> value="3">3</option>
				<option <?php if ($room == '4') {echo "selected";}?> value="4">4</option>
				<option <?php if ($room == '5') {echo "selected";}?> value="5">5</option>
				<option <?php if ($room == '6') {echo "selected";}?> value="6">6</option>
				<option <?php if ($room == '7') {echo "selected";}?> value="7">7</option>
				<option <?php if ($room == '8') {echo "selected";}?> value="8">8</option>
				<option <?php if ($room == '9') {echo "selected";}?> value="9">9</option>
				<option <?php if ($room == '10') {echo "selected";}?> value="10">10</option>
				<option <?php if ($room == '11') {echo "selected";}?> value="11">11</option>
				<option <?php if ($room == '12') {echo "selected";}?> value="12">12</option>
				<option <?php if ($room == '13') {echo "selected";}?> value="13">13</option>
				<option <?php if ($room == '14') {echo "selected";}?> value="14">14</option>
				<option <?php if ($room == '15') {echo "selected";}?> value="15">15</option>
				<option <?php if ($room == '16') {echo "selected";}?> value="16">16</option>
				</select>
			</font>
		</div>
		<div class="input-group">
			<label>เลขที่&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input maxlength="2" type="text" name="number" value="<?php echo $number; ?>">
		</div>
		
		<div class="input-group">
			<label>ปีการศึกษา&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<!--		<input style="width: 60px;" maxlength="4" type="text" name="year" value="<?php echo $year; ?>"> -->
			<input maxlength="4" type="text" name="year" value="<?php echo $year; ?>">
		</div>
		<div class="input-group">
			<label>ห้องปัจจุบัน&nbsp&nbsp&nbsp&nbsp</label>
			<font color="black">
			<select style="font-size:16px; id="current" name="current" >
				<option <?php if ($resultuser["current"] == '') {echo "selected";}?> value=""></option>
				<option <?php if ($resultuser["current"] == 'ห้องปกติ') {echo "selected";}?> value="ห้องปกติ">ห้องปกติ</option>
				<option <?php if ($resultuser["current"] == 'ห้อง Intensive') {echo "selected";}?> value="ห้อง Intensive">ห้อง Intensive</option>
				<option <?php if ($resultuser["current"] == 'ห้อง Gifted') {echo "selected";}?> value="ห้อง Gifted">ห้อง Gifted</option>
				<option <?php if ($resultuser["current"] == 'วิทย์-คณิต') {echo "selected";}?> value="วิทย์-คณิต">วิทย์-คณิต</option>
				<option <?php if ($resultuser["current"] == 'ศิลป์-คำนวน') {echo "selected";}?> value="ศิลป์-คำนวน">ศิลป์-คำนวน</option>
				<option <?php if ($resultuser["current"] == 'ศิลป์-ภาษา') {echo "selected";}?> value="ศิลป์-ภาษา">ศิลป์-ภาษา</option>
				<option <?php if ($resultuser["current"] == 'อาชีวะ') {echo "selected";}?> value="อาชีวะ">อาชีวะ</option>
				</select>
			</font>
		</div>
		<div class="input-group">
			<label>แผนในอนาคต</label>
			<input type="text" name="expect" value="<?php echo $expect; ?>">
		</div>
		<div class="input-group">
			<label>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password&nbsp&nbsp&nbsp</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>

	</form>
</font></h4></center>
	
<h3>
		<input name="button" type="button" id="button" onClick="MM_goToURL('parent','../index.php');return document.MM_returnValue" value="หน้าหลัก">
		<input name="button" type="button" id="button" onClick="MM_goToURL('parent','login.php');return document.MM_returnValue" value="ล๊อกอิน">
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