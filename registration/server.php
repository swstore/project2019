<?php 
	session_start();
	ob_start();
?>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php	
	// variable declaration
	$userid = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'id9599673_root', 'x]vf4yp1', 'id9599673_project2019');
	mysqli_set_charset($db, "utf8");

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$userid = mysqli_real_escape_string($db, $_POST['userid']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$surname = mysqli_real_escape_string($db, $_POST['surname']);
		$class = mysqli_real_escape_string($db, $_POST['class']);
		$room = mysqli_real_escape_string($db, $_POST['room']);
		$number = mysqli_real_escape_string($db, $_POST['number']);
		$year = mysqli_real_escape_string($db, $_POST['year']);
		$current = mysqli_real_escape_string($db, $_POST['current']);
		$expect = mysqli_real_escape_string($db, $_POST['expect']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($userid)) { array_push($errors, "userid is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "กรุณาใส่พาสเวิร์ด"); }

		if ($password_1 != $password_2) {
			array_push($errors, "พาสเวิร์ด ไม่ตรงกัน");
		}

		// check no userid aready
			$query = "SELECT * FROM users WHERE userid='$userid' ";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				array_push($errors, "รหัสนี้ถูกลงทะเบียนแล้ว");
			}else {
//				array_push($errors, "รหัสนักเรียนหรือพาสเวิร์ดผิด");
			}
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (userid, username, surname, class, room, number, year, current, expect, email, password) 
					  VALUES('".$userid."', '".$username."', '".$surname."', '".$class."', '".$room."', '".$number."', '".$year."', '".$current."', '".$expect."', '".$email."', '".$password."')";
			mysqli_query($db, $query);

			$_SESSION['userid'] = $userid;
			$_SESSION['success'] = "success";
//			header('location: index.php');
			header('location: ../index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$userid = mysqli_real_escape_string($db, $_POST['userid']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($userid)) {
			array_push($errors, "ต้องใส่รหัสนักเรียน");
		}
		if (empty($password)) {
			array_push($errors, "ต้องใส่พาสเวิร์ด");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE userid='$userid' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$t=time();
				//echo(date("Y-m-d",$t));
				$sql = "UPDATE users SET 
				logontime = '".$t."'
				WHERE userid = '".$userid."' ";
		
				$query = mysqli_query($db,$sql);

				if($query) {
					//echo "Record update successfully";
				}
				
				$_SESSION['logontime'] = $t;
				$_SESSION['userid'] = $userid;
				$_SESSION['success'] = "success";
//get number of question
				$file="../admin/admin.txt";
					$fp = fopen($file, "r+");
					if (!$fp) {echo "File Title error";}
					while (!feof($fp)) {
        				$file = fgets($fp);
						if (substr($file, 0, 13)=="questiongroup"){
							$num=explode("=",$file);
							$_SESSION['questiongroup'] = $num[1];
						}
						if (substr($file, 0, 16)=="numberofquestion"){
							$num=explode("=",$file);
							$_SESSION['numberofquestion'] = $num[1]; 
						}
						if (substr($file, 0, 14)=="numberofanswer"){
							$num=explode("=",$file);
							$_SESSION['numberofanswer'] = $num[1]; 
						}
        			}

//				header('location: index.php');
//				header('location: begin.php');
//				header("location: ../index.php");
//				header("Location: http://$host$uri/$extra");
				$prev=$_SESSION['prev'];
				header("location: ../$prev");
			}else {
				array_push($errors, "รหัสนักเรียนหรือพาสเวิร์ดผิด");
			}
		}
	}

		// Edit Profile USER
		if (isset($_POST['edit_user'])) {
		// receive all input values from the form
//		$userid = mysqli_real_escape_string($db, $_POST['userid']);
		$userid = $_SESSION['userid'];
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$surname = mysqli_real_escape_string($db, $_POST['surname']);
		$class = mysqli_real_escape_string($db, $_POST['class']);
		$room = mysqli_real_escape_string($db, $_POST['room']);
		$number = mysqli_real_escape_string($db, $_POST['number']);
		$year = mysqli_real_escape_string($db, $_POST['year']);
		$current = mysqli_real_escape_string($db, $_POST['current']);
		$expect = mysqli_real_escape_string($db, $_POST['expect']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_0 = mysqli_real_escape_string($db, $_POST['password_0']);

		// form validation: ensure that the form is correctly filled
		if (empty($userid)) { array_push($errors, "userid is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }

		$sql = "SELECT * FROM users WHERE userid LIKE '%$userid%'";
			$query = mysqli_query($conn,$sql);
			$resultuser=mysqli_fetch_array($query,MYSQLI_ASSOC);
			$password_old = $resultuser["password"];
			
			$password_check = md5($password_0);
		if ($password_old != $password_check) {
			array_push($errors, "พาสเวิร์ด ไม่ถูกต้อง");
		}
		
//		if ($password_1 != $password_2) {
//			array_push($errors, "พาสเวิร์ด ไม่ตรงกัน");
//		}

		// check no userid aready
			$query = "SELECT * FROM users WHERE userid='$userid' ";
			$results = mysqli_query($db, $query);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
//			$query = "INSERT INTO users (userid, username, surname, class, room, number, year, current, expect, email, password) 
//					  VALUES('".$userid."', '".$username."', '".$surname."', '".$class."', '".$room."', '".$number."', '".$year."', '".$current."', '".$expect."', '".$email."', '".$password."')";
//			mysqli_query($db, $query);

			$sql = "UPDATE users SET 
			username = '".$username."' ,
			surname = '".$surname."' ,
			class = '".$class."' ,
			number = '".$number."' ,
			year = '".$year."' ,
			current = '".$current."' ,
			expect = '".$expect."' ,
			email = '".$email."'
			WHERE userid = '".$userid."' ";

			$query = mysqli_query($db,$sql);

			if($query) {
				echo "Record update successfully";
			}
	
			$_SESSION['userid'] = $userid;
			$_SESSION['success'] = "success";
//			header('location: index.php');
			header('location: editprofile_done.php');
		}

	}
	
			// Change Password
		if (isset($_POST['change_password'])) {
		// receive all input values from the form
//		$userid = mysqli_real_escape_string($db, $_POST['userid']);
		$userid = $_SESSION['userid'];
		$password_0 = mysqli_real_escape_string($db, $_POST['password_0']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($password_0)) { array_push($errors, "กรุณาใส่พาสเวิร์ดเดิม"); }
		if (empty($password_1)) { array_push($errors, "กรุณาใส่พาสเวิร์ดใหม่"); }
		if (empty($password_2)) { array_push($errors, "กรุณาใส่พาสเวิร์ดใหม่"); }
		
		$sql = "SELECT * FROM users WHERE userid LIKE '%$userid%'";
			$query = mysqli_query($db,$sql);
			$resultuser=mysqli_fetch_array($query,MYSQLI_ASSOC);
			$password_old = $resultuser["password"];
			
			$password_check = md5($password_0);
		if ($password_old != $password_check) {
			array_push($errors, "พาสเวิร์ดเดิม ไม่ถูกต้อง");
		}
		
		if ($password_1 != $password_2) {
			array_push($errors, "พาสเวิร์ด ไม่ตรงกัน");
		}

		$query = "SELECT * FROM users WHERE userid='$userid' ";
		$results = mysqli_query($db, $query);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
//			$query = "INSERT INTO users (userid, username, surname, class, room, number, year, current, expect, email, password) 
//					  VALUES('".$userid."', '".$username."', '".$surname."', '".$class."', '".$room."', '".$number."', '".$year."', '".$current."', '".$expect."', '".$email."', '".$password."')";
//			mysqli_query($db, $query);

			$sql = "UPDATE users SET 
			password = '".$password."'
			WHERE userid = '".$userid."' ";

			$query = mysqli_query($db,$sql);

			if($query) {
//				echo "Update New Password successfully";
			}
	
			$_SESSION['userid'] = $userid;
			$_SESSION['success'] = "success";
//			header('location: index.php');
			header('location: change_password_done.php');
		}

	}
?>
