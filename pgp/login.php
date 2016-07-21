<?php
	include_once ('db_connection.php');
	
	$login_name = $_POST['username'];
	$password = $_POST['password'];
	$combo_b = $_POST['combo_b'];
		
	$sql = sprintf ("select user_id, password from user_detail where user_id ='%s' and password = '%s'", $login_name, $password);
	
	$result = $conn->query ($sql);
	if ($result) {
		if ($result->num_rows == 1) {
			session_start();
			while ($row = $result->fetch_assoc()) {
				$_SESSION["user_id"] = $row["user_id"];
				$_SESSION["user_name"] = $login_name;
				$_SESSION["password"] = md5($password);
			}
			$_SESSION['combo_b'] = $combo_b;
			if ($login_name == "admin") {	
				header("Location: admin_page.php");
			}
			else {
				header("Location: home.php");
			}
		}
		else
		{
			header("Location: index.php?err=0");
		}
	}
	else {
		header("Location: index.php?err=2");
	}
?>
