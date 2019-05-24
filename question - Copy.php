<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>Untitled Document</title>
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
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
---------------------------------
<p>แบบทดสอบ</p>
<p>ข้อที่ทำแล้ว</p>
<p>&nbsp;</p>
<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

   $serverName = "localhost";
   $userName = "id9599673_root";
   $userPassword = "x]vf4yp1";
   $dbName = "id9599673_project2019";
  
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);


	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
	}
	else
	{
//		echo "Database Connected.";
	}
	
	mysqli_set_charset($conn, "utf8");
	
//	mysqli_close($conn);
?>
---------------------------------
<div class='section-block about-block' >
						<div class='container-fluid' >
							
							<div class='intro-text' >
								<h1>
									<strong class='color' >คำถามข้อที่
									<?php
										echo $question_num=$_GET["question"];
										$sql = "SELECT * FROM question WHERE id LIKE '%$question_num%'";
										$query = mysqli_query($conn,$sql);
										$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
										?> </p>
									</strong>
								</h1>
<h2>
	<?php echo $result["question"];?>
<!--	<p>ตัวเลือก  <br>-->  
	<br><br><br>
	<label>
    <input type="radio" name="room" value=<?php echo $result["answer1"];?> id="room_0">
  <?php echo $result["answer1"];?></label>

  <label>
    <input type="radio" name="room" value=<?php echo $result["answer2"];?> id="room_1">
    <?php echo $result["answer2"];?></label>
</p>
</h2>
<?php
$questionnext=$question_num+1; if ($questionnext == '81') $questionnext=80;
$questionprev=$question_num-1; if ($questionprev == '0') $questionprev=1;
$next = "question.php?question=".$questionnext;
$prev = "question.php?question=".$questionprev;
?>


<div class='color'>
<p>
  <input name="button" type="button" id="button" onClick="MM_goToURL('parent','<?php echo $prev;?>');return document.MM_returnValue" value="ย้อนหลัง">
  <input name="button" type="button" id="button" onClick="MM_goToURL('parent','<?php echo $next;?>');return document.MM_returnValue" value="ข้อถัดไป">
</p>
<p>
  <input name="button2" type="button" id="button2" onClick="MM_goToURL('parent','index.html');return document.MM_returnValue" value="กลับหน้าหลัก">
</p>
</div>

							</div>
						</div>
</div>

</body>
</html>
