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
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
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
				$_SESSION['userid'] = $userid;
				$_SESSION['success'] = "success";
//				header('location: index.php');
//				header('location: begin.php');
				header("location: ../index.php");
			}else {
				array_push($errors, "รหัสนักเรียนหรือพาสเวิร์ดผิด");
			}
		}
	}

?>
