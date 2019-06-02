<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>My first styled page</title>
  <link rel="stylesheet" type="text/css" href="radiotogglestyle.css">
</head>

<body>
<form method="post" action="test13.php">
<fieldset>
	<legend>Is this toggle switch awesome?</legend>
	<div class="toggle">
		<input type="radio" name="sizeBy" value="ไม่ใช่เลย" id="sizeWeight" checked="checked" />
		<label for="sizeWeight">ไม่ใช่เลย</label>
		<input type="radio" name="sizeBy" value="ไม่แน่ใจ" id="sizeDimensions" />
		<label for="sizeDimensions">ไม่แน่ใจ</label>
    <input type="radio" name="sizeBy" value="ค่อนข้างใช่" id="sizeDimensions2" />
		<label for="sizeDimensions2">ค่อนข้างใช่</label>
    <input type="radio" name="sizeBy" value="ใช่ที่สุด" id="sizeDimensions3" />
    <label for="sizeDimensions3">ใช่ที่สุด</label>
	</div>
	<p class="status">Toggle is <span>auto width</span><span>full width</span>.</p>

  <button type="submit" class="btn" name="login_user">Login</button>

</fieldset>
</form>
</body>
</html>
