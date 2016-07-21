<?php
	require('db_connection.php');
	
	$user_id = $_POST["branch_code"];

	if($user_id == "") {
		header('location:delete_branch_form.php?err=0');
	}
	else {
		$sql = "SELECT null FROM branch WHERE branch_code='".$user_id."'";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		if($count>0) {
			$sql = "delete FROM branch WHERE branch_code='".$user_id."'";
			if( ($conn -> query($sql)) == TRUE) {
				header ('location:admin_page.php');
			} else {
				header('location:delete_branch_form.php?err=1');
			}
		}
		else {
			header ('location:delete_branch_form.php?err=1');
		}
	}
?>
