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

	<SCRIPT LANGUAGE="JavaScript">
<!--
function changeSize(){
document.getElementById('test').size=document.getElementById('test').value.length
}
//-->
</SCRIPT>

</head>
<body>
<?php
					$set="1";
					$userid = $_SESSION['userid'];
//					if ($userid != ''){
						if(1){
					$sql = "SELECT * FROM `question` WHERE `set` = '$set'";
					$query = mysqli_query($conn,$sql);
					if(!$query) {echo "Database Error";}
					$question=array();
					$answer=array();
					$count="1";
					while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
						//print_r($result);
						$question[$count]=$result[question];
						$answer[$count][1]=$result[answer1];
						$answer[$count][2]=$result[answer2];
						$answer[$count][3]=$result[answer3];
						$answer[$count][4]=$result[answer4];
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
		<label>คำถามชุดที่ : <?php echo $set; ?></label>
		<br>
		<?php
		$n="1";
		while($answer[1][$n] != ""){
			echo "คำตอบที่ ".$n;
?>
				<input type="text" value="<?php echo $answer[1][$n]; ?>">
<?php

			$n++;
		}
		echo "<br>";
		echo "<br>";
		echo "<br>";
		for($num=1; $num<$count; $num++){
?>
			<div class="input-group">
			<label>ข้อที่ <?php echo $num?></label>
<!--			<input type="text" id='test' size=1 onKeyup='changeSize();'  name="question" value="<?php echo $question[$num]; ?>">
-->
<textarea style="font-size: 14pt" cols="35" rows="4" name="question"><?php echo $question[$num]; ?></textarea>
		</div>
		<?php			}
		?>
		<?php //echo $resultuser["userid"]; ?>
<!--			<input maxlength="5" type="text" name="userid" value="<?php echo $resultuser["userid"]; ?>">
-->		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="edit_user">แก้ไข</button>
		</div>
		<p>
			<a href="../index.php">กลับหน้าหลัก</a>
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
