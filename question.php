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

		<link rel='stylesheet' type='text/css' href='css/button.css' >
		<link rel='stylesheet' type='text/css' href='css/radiotogglestyle.css' >

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
$userid = $_SESSION['userid'];
$questiongroup=$_SESSION['questiongroup'];
$questiongroup = str_replace(' ', '-', $questiongroup); // Replaces all spaces with hyphens.
$questiongroup = preg_replace('/[^A-Za-z0-9\-]/', '', $questiongroup); // Removes special chars
$numberofquestion=$_SESSION['numberofquestion'];
$numberofanswer=$_SESSION['numberofanswer'];

$question_num=$_GET["question"];
if($question_num=="0"){
	$alldone = "1";
	$qa=array();
	$sql = "SELECT * FROM answer WHERE (userid = $userid) AND (questiongroup = $questiongroup)";
	$query = mysqli_query($conn,$sql);
	while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
		//print_r($result);
		$qa[$result[questionnumber]]=$result[answer];
	}
	for($num="1"; $num<=$numberofquestion; $num++){
		if($qa[$num]=="") {
			$alldone="0";
			break;
		}
	}
	//echo "<br>Alldone=".$alldone;
	if($alldone=="1"){
		{header("location: result.php");}
	}ELSE{
		$question_num="$num";
		$url="question.php?"."&question=".$num;
		header("location: $url");
	}
}

//echo "Alldone=".$alldone;

$answer=$_POST["answer"];
$sql = "SELECT * FROM answer WHERE (userid = $userid) AND (questiongroup = $questiongroup) AND (questionnumber = $question_num)";
$query = mysqli_query($conn,$sql);
if ($answer == '') {
//	echo "answer = NULL<br>";
}ELSE {//echo "answer = NotNULL<br>";
}
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
//print_r($result);
$oldanswer = $result["answer"];
//echo "<br>Old Answer = ".$oldanswer;
//echo "New Answer = ".$answer;

switch ($_GET["action"]) {
case "next":
    $oldquestion_num = $question_num - 1;
    break;
case "prev":
    $oldquestion_num = $question_num + 1;
    break;
case "home":
    $oldquestion_num = $question_num;
    break;
}
//echo "Question to Update = ".$oldquestion_num;

//echo "<hr>";
//ถ้ามีคำตอบ ของข้อที่ทำมาแล้วให้ update หรือ add
if ($answer != '') {
 	$sql = "SELECT * FROM answer WHERE (userid = $userid) AND (questiongroup = $questiongroup) AND (questionnumber = $oldquestion_num)";
	$query = mysqli_query($conn,$sql);
	$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
	$updateanswer = $result["answer"];
//print_r($result);
	//if old answer = null = ไม่มีค่าเดิมให้ เพิ่ม
	if ($updateanswer == '') {
		//Insert database
		$sql = "INSERT INTO answer (userid, questiongroup, questionnumber, answer)
		VALUES ('".$userid."','".$questiongroup."','".$oldquestion_num."','".$answer."')";

		$query = mysqli_query($conn,$sql);

		if($query) {
//			echo "Record add successfully";
		}
	}ELSE {
//		echo "<br>updateanswer = NotNULL = Update<br>";

		//if old answer = NotNull = ค่าเดิมให้  Update

		$sql = "UPDATE answer SET
			answer = '".$answer."'
			WHERE (userid = '".$userid."') AND (questiongroup = $questiongroup) AND (questionnumber = '".$oldquestion_num."')";

		$query = mysqli_query($conn,$sql);

		if($query) {
//			echo "Record update successfully";
		}
	}
}

if($_GET["action"]=="home"){
	if($_SESSION['prev'] == "question.php"){
		$_SESSION['prev']="index.php";
	}
	$p1=$_SESSION['prev'];
	header("Location: $p1");
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
<!--					<h5><br><font color="white"><?php echo "ผู้ใช้งาน : ".$username;?></font>&nbsp&nbsp&nbsp</h5>
-->					</div>

					<div class='container-fluid' >

						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									<h8><font color=#330066><?php if($question_num != ($_SESSION['numberofquestion']+1)) echo "ข้อที่  ".$question_num; ELSE echo "คำถามหมดแล้ว";?> </font></h8>
									<br><br><br>
									<h2><font color=#333399>
									<?php
										$sql = "SELECT * FROM question WHERE number = $question_num AND questiongroup = $questiongroup";
										$query = mysqli_query($conn,$sql);
										$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
										echo $result["question"];
										//echo "<br>old answer = ".$oldanswer;
									?>
									</font></h2>
									
									<h3>
									
									<?php
									$questionnext=$question_num+1; if ($questionnext == '82') $questionnext=81;
									$questionprev=$question_num-1; if ($questionprev == '0') $questionprev=1;
									$next = "question.php?"."&question=".$questionnext."&action=next";
									$prev = "question.php?"."&question=".$questionprev."&action=prev";
									$home = "question.php?"."&question=".$question_num."&action=home";
									?>
									<?php //if ($oldanswer == 'Yes') {echo "checkedtest";}?>
									<form method="post" name="form1">

									<?php 
									if($questiongroup==2){ ?>
										<center>
										<label>
										<input <?php if ($oldanswer == "ไม่ใช่เลย") {echo "checked";}?> type="radio" name="answer" value="ไม่ใช่เลย" class="img-checker">
										<img src=img/01.jpg width="80%" height="80%" >
										</label>
				
										<label>
										<input <?php if ($oldanswer == "ไม่แน่ใจ") {echo "checked";}?> type="radio" name="answer" value="ไม่แน่ใจ" class="img-checker">
										<img src=img/02.jpg width="80%" height="80%" >
										</label>
				
										<label>
										<input <?php if ($oldanswer == "ค่อนข้างใช่") {echo "checked";}?> type="radio" name="answer" value="ค่อนข้างใช่" class="img-checker">
										<img src=img/03.jpg width="80%" height="80%" >
										</label>
				
										<label>
										<input <?php if ($oldanswer == "ใช่ที่สุด") {echo "checked";}?> type="radio" name="answer" value="ใช่ที่สุด" class="img-checker">
										<img src=img/04.jpg width="80%" height="80%" >
										</label>
										</center>
									<?php 
									}ELSE if($questiongroup==1){ ?>
										<center>
										<label>
										<input <?php if ($oldanswer == "ใช่") {echo "checked";}?> type="radio" name="answer" value="ใช่" class="img-checker">
										<img src=img/yes.jpg width="80%" height="80%" >
										</label>
				
										<label>
										<input <?php if ($oldanswer == "ไม่ใช่") {echo "checked";}?> type="radio" name="answer" value="ไม่ใช่" class="img-checker">
										<img src=img/no.jpg width="80%" height="80%" >
										</label>
									<?php 
									}
									?>

									
<!--								<?php
									for($count="1"; $count<=$numberofanswer; $count++){
										$answer="answer".$count;
									?>
										<input <?php if ($oldanswer == $result[$answer]) {echo "checked";}?> type="radio" name="answer" value=<?php echo $result[$answer];?> id=<?php echo $result[$answer];?>>
										<?php echo $result[$answer];?>
									<?php
									}
									?>
									
-->

<!--										<div class="toggle"><font color = black>
										<input <?php if ($oldanswer == "ไม่ใช่เลย") {echo "checked";}?> type="radio" name="answer" value="ไม่ใช่เลย" id="sizeWeight" />
										<label for="sizeWeight">ไม่ใช่เลย</label>
										<input <?php if ($oldanswer == "ไม่แน่ใจ") {echo "checked";}?> type="radio" name="answer" value="ไม่แน่ใจ" id="sizeDimensions" />
										<label for="sizeDimensions">ไม่แน่ใจ</label>
										<input <?php if ($oldanswer == "ค่อนข้างใช่") {echo "checked";}?> type="radio" name="answer" value="ค่อนข้างใช่" id="sizeDimensions2" />
										<label for="sizeDimensions2">ค่อนข้างใช่</label>
										<input <?php if ($oldanswer == "ใช่ที่สุด") {echo "checked";}?> type="radio" name="answer" value="ใช่ที่สุด" id="sizeDimensions3" />
										<label for="sizeDimensions3">ใช่ที่สุด</label>
										</font>
										</div>
-->										
<!--									<input <?php if ($oldanswer == 'Yes') {echo "checked";}?> type="radio" name="answer" value=<?php echo $result["answer1"];?> id="answer_1">
									<?php echo $result["answer1"];?>

									<input <?php if ($oldanswer == 'No') {echo "checked";}?> type="radio" name="answer" value=<?php echo $result["answer2"];?> id="answer_2">
									<?php echo $result["answer2"];?>
-->									</font>
									<br>
	<!--								<input name="button" type="button" id="button" onClick="MM_goToURL('parent','<?php echo $prev;?>');return document.MM_returnValue" value="ย้อนหลัง">
									<input name="btnSubmit" type="submit" value="ถัดไป">
-->
									<input type="button" value="ย้อนหลัง" onClick="this.form.action='<?php echo $prev;?>'; submit()">
									<input type="button" value="ถัดไป" onClick="this.form.action='<?php echo $next;?>'; submit()">

									<br>
									<br>
									<?php 	if($_SESSION['prev'] == "question.php"){
												$_SESSION['prev']="index.php";
											}
											//echo $_SESSION['prev'];
									?>
									<input type="button" value="กลับ" onClick="this.form.action='<?php echo $home;?>'; submit()">
<!--										<a href='<?php echo $_SESSION['prev'];?>' class='btn-custom section-toggle' data-section='questionnair' >
											<h5>กลับ</h5>
								
-->										</a>

									</h3>

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
