<?php 
	session_start();
	ob_start();
	require '../connect.php';
	error_reporting(0);
	ini_set('display_errors', 1);
	error_reporting(0);
	ini_set('display_errors', 1);
	$_SESSION['prev']="editquestion.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Registration system PHP and MySQL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>
<body>
<?php
					$userid = $_SESSION['userid'];
//					if ($userid != ''){
					$sql = "SELECT * FROM `question` WHERE `set` = '1'";
					$query = mysqli_query($conn,$sql);
					if(!$query) {echo "Database Error";}
					$question=array();
					$count="1";
					while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
						//print_r($result);
						$question[$count]=$result[question];
						$answerA[$count]=$result[answer1];
						$answerB[$count]=$result[answer2];
						$answerC[$count]=$result[answer3];
						$answerD[$count]=$result[answer4];
						$count++;
					}
					//echo "data=".$result;
		
					?>
<!--					<div align="left">
					<h5><br>&nbsp&nbsp&nbsp&nbsp<font color="black"><?php echo "ผู้ใช้งาน = ".$username; ?></font></h5>
					</div>
-->
	<div class="header">
		<h2>แก้ไขคำถาม</h2>
	</div>
	
	<form method="post" action="editprofile_confirm.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
		<label>คำถามชุดที่ : <?php echo $userid; ?></label>
		<?php

		echo "count = ".$count;
		echo "<br>";
		
		for($num=1; $num<$count; $num++){
/*						echo "question".$num."=".$question[$num];
						echo "<br>";
						echo "answer A =".$answerA[$num];
						echo "<br>";
						echo "answer B =".$answerB[$num];
						echo "<br>";
						echo "answer C =".$answerC[$num];
						echo "<br>";
						echo "answer D =".$answerD[$num];
						echo "<br>";
*/		?>
			<div class="input-group">
			<label>ข้อที่ <?php echo $num?></label>
			<input type="text" name="username" value="<?php echo $question[$num]; ?>">
		</div>
		<?php			}
			echo "answer D =";
					
		?>
			
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
			<button type="submit" class="btn" name="edit_user">แก้ไข</button>
		</div>
		<p>
			<br><a href="login.php">ล๊อกอิน</a> หรือ <a href="../index.php">กลับหน้าหลัก</a>
		</p>
	</form>
	
	<?php //}ELSE{ ?>
		<div class="header">
			<h2>กรุณาล๊อกอินก่อน</h2>
		</div>
		<div align="center">
			<p>
				<a href="login.php">ล๊อกอิน</a>  หรือ <a href="../index.php">กลับหน้าหลัก</a
			</p>
		</div>
					<?php //} ?>
					
</body>
</html>