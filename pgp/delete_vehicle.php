<?php
	require('db_connection.php');
	
	$type = $_POST["vehicle_type"];

	if($type == "") {
		header('location:delete_vehicle_form.php?err=0');
	}
	else {
		$sql = "SELECT null FROM vehicle WHERE type='".$type."'";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		if($count>0) {
			$sql = "delete FROM vehicle WHERE type='".$type."'";
			if( ($conn -> query($sql)) == TRUE) {
				header ('location:admin_page.php');
			} else {
				header('location:delete_vehicle_form.php?err=2');
			}
		}
		else {
			header ('location:delete_vehicle_form.php?err=1');
		}
	}
?>
