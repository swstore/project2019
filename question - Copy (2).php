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

<?php require 'connect.php'; ?>
		
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
					
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									<h2><font color="white">คำถามข้อที่
									<?php
										echo $question_num=$_GET["question"];
										$sql = "SELECT * FROM question WHERE id LIKE '%$question_num%'";
										$query = mysqli_query($conn,$sql);
										$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
										?>
									</h2>
									<h2>
									<p>
									<?php echo $result["question"];?>
									</h2>
									<h2>
									<br><br>
									
									<input type="radio" name="answer" value=<?php echo $result["answer1"];?> id="answer_1">
									<?php echo $result["answer1"];?>

									<input type="radio" name="answer" value=<?php echo $result["answer2"];?> id="answer_2">
									<?php echo $result["answer2"];?>
									</p>
									</font>
									</h2>
									<div class='intro-btns' >

									<?php
$questionnext=$question_num+1; if ($questionnext == '81') $questionnext=80;
$questionprev=$question_num-1; if ($questionprev == '0') $questionprev=1;
$next = "question.php?question=".$questionnext;
$prev = "question.php?question=".$questionprev;
?>

<div class='color'>
<p>
  <input name="button" type="button" id="button" onClick="MM_goToURL('parent','<?php echo $prev;?>');return document.MM_returnValue" value="ย้อนหลัง">
<&nbsp><&nbsp>
  <input name="button" type="button" id="button" onClick="MM_goToURL('parent','<?php echo $next;?>');return document.MM_returnValue" value="ข้อถัดไป">
</p>
</div>	
<br><br>								
										<a href='index.html' class='btn-custom section-toggle' data-section='questionnair' >
											กลับหน้าหลัก
										</a>
										
									</div>
									
								</div>
							</div>
							
						</div>
						
					</div>
				
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