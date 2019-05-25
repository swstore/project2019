<?php 
	session_start();
	ob_start();
?>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php
echo "ทดสอบ<br>";
echo $userid = $_SESSION['userid'];
?>