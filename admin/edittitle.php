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
					$userid = $_SESSION['userid'];
//					if ($userid != ''){
						if(1){
							$file="./title.txt";
							$fp = fopen($file, "r+");
							if (!$fp) {echo "File Title error";}
//							while (!feof($fp)) {
//        				$file = fgets($fp, 4096);
//        				echo "Title=".$file."<br>";
//    					}
							$title = fgets($fp, 4096);
							$content = fgets($fp, 4096);
							$content = str_replace (array("\r\n", "\n", "\r"), '', $content)
?>
<div class="header">
	<h2>แก้ไข หน้าแรก</h2>
</div>

	<form method="post" action="edittitle-done.php">

		<div class="input-group">
		<label>Title :</label>
		<br>
				<input type="text" name="title" value="<?php echo $title; ?>">
		<br>
		<br>
		<label>Content :</label>
		<br>
		<textarea style="font-size: 14pt" cols="35" rows="4" name="content"><?php echo $content; ?></textarea>
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
