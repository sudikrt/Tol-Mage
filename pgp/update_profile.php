<?php
require('db_connection.php');

	$name = $_POST["name"];
	$email = $_POST["email"];
	$user_id = $_POST["user_id"];
	$password = $_POST["pass"];
	$re_pass = $_POST["re-pass"];
	
	if($name=="" || $password=="" || $re_pass == "" || $user_id == "" || $email == "" ) {
		header('location:profile.php?err=0');
	}
	
	else if($password!=$re_pass) {
			header('location:profile.php?err=1');
	}
	else {
		$sql = sprintf ("update user_detail set name = '". $name."', password = '".$password."', email='".$email."' where user_id='".$user_id."'");
	
			if ($conn->query($sql) == TRUE) {
				header('location:profile.php?err=4');
			} else {
				echo "Error:".$sql."<br/>".$conn->error;
				header('location:profile.php?err=3');
			}
	}		
?>
