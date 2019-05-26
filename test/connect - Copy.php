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