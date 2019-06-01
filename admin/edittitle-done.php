<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Registration system PHP and MySQL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(1){
	//$title = mysqli_real_escape_string($db, $_POST['title']);
	//$content = mysqli_real_escape_string($db, $_POST['content']);


	echo $title = $_POST['title'];
	echo "<br>";
	echo $content = $_POST['content'];

		$file="./title.txt";
		$fp = fopen($file, "w");
		if (!$fp) {echo "File Title error";}
		fwrite($fp, $title."\r\n");
		fwrite($fp, $content);
		fclose($fp);
	?>
	<div class="header">
		<h2>แก้ไขข้อมูลเรียบร้อย</h2>
	</div>

	<div align="center">
		<p>
			<a href="../index.php">กลับหน้าหลัก</a
		</p>
	</div>

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
