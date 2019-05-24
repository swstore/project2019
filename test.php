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
		
</head>
	<body>
<?php

$qa=array();
$userid = $_SESSION['userid'];
$_SESSION['prev']="test.php";
if ($userid != ''){
					echo "userid = ".$userid;
					echo "<br>";
					$sql = "SELECT * FROM answer WHERE userid LIKE '%$userid%'";
					$query = mysqli_query($conn,$sql);
					while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
						//print_r($result);
						//echo "question:".$result[questionnumber]."Answer :".$result[answer];
						$qa[$result[questionnumber]]=$result[answer];
						//echo "<br>";
					}
//	print_r($qa);
//	echo "<br>";

	for($i=1;$i<=80;$i++){
		if($qa[$i]==""){
			echo "_ ";
		}ELSE{
			echo $qa[$i]." ";
		}
	}
	echo "<hr>";
	$j=0;
	$row=array();
	for($i=1;$i<=80;$i++){
		//ข้อที่ยังไม่ได้ทำ
		if($qa[$i]==""){
			$k=$i; if($k < 10){$k = "0".$k;}
			//$row[$j].='<span style="color: red;" />'.$k." ".'</span>';
			$row[$j].='<a href="question.php?question='.$i.'"><span style="color: red;" />'.$k." ".'</span></a>';
		}
		//ข้อที่ทำแล้ว
		ELSE{
			$k=$i; if($k < 10){$k = "0".$k;}
			$row[$j].='<span style="color: blue;" />'.$k." ".'</span>';
			//echo $qa[$i]." ";
		}
		if($i % 20 == 0){
			echo "<br>";
			$j++;
		}
		echo " ";
	}
	echo "<hr>";
	echo $row[0];
	echo "<br>";
	echo $row[1];
	echo "<br>";
	echo $row[2];
	echo "<br>";
	echo $row[3];
	
}
?>
	</body>
</html>