<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<style>
			body {
				font-family: sans-serif;
			}
			/*
			ให้ element ที่มี class img-checker ถูกซ่อนไว้
			*/
			.img-checker {
				display: none;
			}
			/*
			ให้ <img> ที่ตามหลัง element ที่มี class img-checker แสดงผลแบบจาง
			และใช้ cursor รูปมือเมื่อผู้ใช้เอาเมาส์ไปชี้
			*/
			.img-checker + img {
				opacity: 0.5;
				cursor: pointer;
			}
			/*
			ให้ <img> ที่ตามหลัง element ที่มี class img-checker กลับมาแสดงผลแบบปกติ
			เมื่อ element ที่มี class img-checker มีสถานะเป็น checked
			*/
			.img-checker:checked + img {
				opacity: 1.0;
			}
		</style>
		<link rel='stylesheet' type='text/css' href='../css/button.css' >
		<link rel='stylesheet' type='text/css' href='../css/radiotogglestyle.css' >
		
				<script type="text/javascript">
		function MM_goToURL() { //v3.0
		  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
		  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
		}
		</script>
		
	</head>
	<body>
	
<!--		<?php $oldanswer = "ไม่แน่ใจ"; ?>
		<div class="toggle"><font color = black>
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
										
		<h3>Radios</h3>
		<center>
		<form>
			<label>
				<input type="radio" name="test" value="All" class="img-checker">
				<img src=../img/01.jpg>
			</label>
			<label>
				<input type="radio" name="test" value="PHP" class="img-checker">
				<img src=../img/02.jpg>
			</label>
			<label>
				<input type="radio" name="test" value="ASP" class="img-checker">
				<img src=../img/03.jpg>
			</label>
			<label>
				<input type="radio" name="test" value=".NET" class="img-checker">
				<img src=../img/04.jpg>
			</label>
			<label>
				<input type="radio" name="test" value="ASP" class="img-checker">
				<img src=../img/yes.jpg>
			</label>
			<label>
				<input type="radio" name="test" value=".NET" class="img-checker">
				<img src=../img/no.jpg>
			</label>
			<br>
			<br>
			<input type="button" onclick="alert(this.form.elements.test.value);" value="Check Value">
		</form>
		</center>
	</body>
</html>