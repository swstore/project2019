<?php 
	session_start();
	ob_start();
	//edit2
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

		<script type="text/javascript">
		function MM_goToURL() { //v3.0
		  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
		  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
		}
		</script>

	</head>
	<body>
		<!--=====================================================
			Connect Database
		=====================================================-->
<?php require 'connect.php'; ?>

		<!--=====================================================
			Update DataBase
		=====================================================-->
<?php
error_reporting(0);
ini_set('display_errors', 1);
//get old data
//$userid=$_GET["userid"];
//echo "UserID=".$userid = $_SESSION['userid'];
$userid = $_SESSION['userid'];
//if ($userid == '') {header("location: pleaselogin.php");}
$question_num=$_GET["question"];
if($question_num==""){$question_num="1";}
//$answer=$_GET["answer"];
$answer=$_POST["answer"];
$sql = "SELECT * FROM answer WHERE (userid = $userid) AND (questionnumber = $question_num)";
$query = mysqli_query($conn,$sql);
if ($answer == '') {
//	echo "answer = NULL<br>";
}ELSE {//echo "answer = NotNULL<br>";
}
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
//print_r($result);
//echo $result["answer"];
$oldanswer = $result["answer"];
//echo "<br>Old Answer = ".$oldanswer;
//if ($oldanswer == 'yes') {echo "yes";}

//echo "<hr>";
//echo "New Answer = ".$answer;
//echo "<br>";
$oldquestion_num = $question_num - 1;
//echo "Question to Update = ".$oldquestion_num;

//echo "<hr>";
//ถ้ามีคำตอบ ของข้อที่ทำมาแล้วให้ update หรือ add
if ($answer != '') {
 	$sql = "SELECT * FROM answer WHERE (userid = $userid) AND (questionnumber = $oldquestion_num)";
	$query = mysqli_query($conn,$sql);
	$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
	$updateanswer = $result["answer"];
//echo "<br>";
//print_r($result);
	//if old answer = null = ไม่มีค่าเดิมให้ เพิ่ม
	if ($updateanswer == '') {
//		echo "<br>updateanswer = NULL = insert<br>";
		//Insert database
		$sql = "INSERT INTO answer (userid, questionnumber, answer)
		VALUES ('".$userid."','".$oldquestion_num."','".$answer."')";

		$query = mysqli_query($conn,$sql);

		if($query) {
//			echo "Record add successfully";
		}
	}ELSE {
//		echo "<br>updateanswer = NotNULL = Update<br>";

		//if old answer = NotNull = ค่าเดิมให้  Update

		$sql = "UPDATE answer SET
			answer = '".$answer."'
			WHERE (userid = '".$userid."') AND (questionnumber = '".$oldquestion_num."')";

		$query = mysqli_query($conn,$sql);

		if($query) {
//			echo "Record update successfully";
		}
	}
}

?>
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

			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >

				<!--=====================================================
					Main Section
				=====================================================-->
				<section id='intro' class='section section-main active' >
				<?php if ($userid == ''){
				$_SESSION['prev']="question.php";?>
				<center><br><br><br><br><br><br><h2><font color="white">กรุณาล๊อกอินก่อนใช้งาน</font><br><br>
				<input type="button" onClick="MM_goToURL('parent','index.php');return document.MM_returnValue" value="Home">
				<input type="button" onClick="MM_goToURL('parent','registration/login.php');return document.MM_returnValue" value="Login">
				</h2></center>
				<?php
				}ELSE{?>
					<div align="right">
					 <?php
					$sql = "SELECT * FROM users WHERE userid = $userid";
					$query = mysqli_query($conn,$sql);
					$resultuser=mysqli_fetch_array($query,MYSQLI_ASSOC);
					$username = $resultuser["username"];
					?>
<!--					<h5><br><font color="white"><?php echo "ผู้ใช้งาน = ".$username;?></font>&nbsp&nbsp&nbsp</h5>
-->					</div>

					<div class='container-fluid' >

						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									<h2><font color="white"><?php if($question_num != '81') echo "คำถามข้อที่  ".$question_num; ELSE echo "คำถามหมดแล้ว";?> </h2>
									<h3>
									<?php
										$sql = "SELECT * FROM question WHERE id = $question_num";
										$query = mysqli_query($conn,$sql);
										$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
										echo $result["question"];
									?>
									</h3>
									<h3>
									<br>
									<?php
									$questionnext=$question_num+1; if ($questionnext == '82') $questionnext=81;
									$questionprev=$question_num-1; if ($questionprev == '0') $questionprev=1;
									$next = "question.php?"."&question=".$questionnext;
									$prev = "question.php?"."&question=".$questionprev;
									?>
									<?php //if ($oldanswer == 'Yes') {echo "checkedtest";}?>
									<form action=<?php echo $next;?> method="post" name="form1">
									<input <?php if ($oldanswer == 'Yes') {echo "checked";}?> type="radio" name="answer" value=<?php echo $result["answer1"];?> id="answer_1">
									<?php echo $result["answer1"];?>

									<input <?php if ($oldanswer == 'No') {echo "checked";}?> type="radio" name="answer" value=<?php echo $result["answer2"];?> id="answer_2">
									<?php echo $result["answer2"];?>
									</font>
									<br><br>
									<input name="button" type="button" id="button" onClick="MM_goToURL('parent','<?php echo $prev;?>');return document.MM_returnValue" value="ย้อนหลัง">
									<input name="btnSubmit" type="submit" value="ถัดไป">

									</h3>
									<div class='intro-btns' >
									<br>
									<?php 	if($_SESSION['prev'] == "question.php"){
												$_SESSION['prev']="index.php";
											}
											//echo $_SESSION['prev'];
									?>
										<a href='<?php echo $_SESSION['prev'];?>' class='btn-custom section-toggle' data-section='questionnair' >
											<h5>กลับ</h5>
										</a>

									</div>

								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</section>

		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>

	</body>
</html>