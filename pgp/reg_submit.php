<?php
require('db_connection.php');

	$first_name = $_POST["name"];
	$email = $_POST["email"];
	$user_id = $_POST["user_id"];
	$password = $_POST["password"];
	$re_pass = $_POST['re-pass'];

	
	if($first_name=="" || $password=="" || $re_pass == "" || $user_id == "" || $email == "" ) {
		header('location:register.php?err=0');
	}
	else if ($first_name=="NAME" || $password=="PASSWORD" || $re_pass == "RE-PASS" || $user_id == "User Id" || $email == "EMAIL" ) {
		header('location:register.php?err=0');
	}
	else if($password!=$re_pass) {
			header('location:register.php?err=1');
	}
	else {
		$sql = "SELECT null FROM user_detail WHERE user_id='".$user_id."'";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		if($count>0)
			header('location:register.php?err=2');
		else {
			//$pass = md5("5".$pass."@"); 
			//$sql = "INSERT INTO stud_data (usr_name,usr_roll,usr_pass) VALUES('".$user."','".$enroll."','".$pass."')";
			//$conn->query($sql);
			//echo "Registered Successfully, <a href='index.php'>Login</a>";
		
			$sql = sprintf ("insert into user_detail (name, email, user_id, password) values ('%s','%s','%s','%s')", $first_name,
			$email, $user_id, $password);
	
			if ($conn->query($sql) == TRUE) {
				header('location:admin_page.php');
			} else {
				echo "Error:".$sql."<br/>".$conn->error;
				header('location:register.php?err=3');
			}
		}
	}		
?>
