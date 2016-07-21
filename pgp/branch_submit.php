<?php
require('db_connection.php');

	$vehicle_type = $_POST["branch_code"];
	$price = $_POST["branch_name"];
	$description = $_POST["description"];
	
	if($vehicle_type=="" || $price=="" || $description == "" ) {
		header('location:add_vehicle.php?err=0');
	}
	else if($vehicle_type=="Branch Code" || $price=="Branch Name" || $description == "Description......" ) {
		header('location:add_branch.php?err=0');
	}
	else {
		$sql = "SELECT null FROM branch WHERE type='".$vehicle_type."'";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		if($count>0)
			header('location:add_branch.php?err=1');
		else {
		
			$sql = sprintf ("insert into branch (branch_code, branch_name, branch_details) values ('%s', '%s', '%s')", $vehicle_type,
			$price, $description);
	
			if ($conn->query($sql) == TRUE) {
				header('location:admin_page.php');
			} else {
				echo "Error:".$sql."<br/>".$conn->error;
				header('location:add_branch.php?err=2');
			}
		}
	}		
?>
