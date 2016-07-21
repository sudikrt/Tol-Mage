<?php
require('db_connection.php');

	$vehicle_type = $_POST["vehicle_type"];
	$price = $_POST["price"];
	$description = $_POST["description"];
	
	if($vehicle_type=="" || $price=="" || $description == "" ) {
		header('location:add_vehicle.php?err=0');
	}
	else if($vehicle_type=="Vehicle Type" || $price=="Price" || $description == "Description......" ) {
		header('location:add_vehicle.php?err=0');
	}
	else {
		$sql = "SELECT null FROM vehicle WHERE type='".$vehicle_type."'";
		$result = $conn->query($sql);
		$count = $result->num_rows;
		if($count>0)
			header('location:add_vehicle.php?err=1');
		else {
		
			$sql = sprintf ("insert into vehicle (type, price, description) values ('%s', %f, '%s')", $vehicle_type,
			$price, $description);
	
			if ($conn->query($sql) == TRUE) {
				header('location:admin_page.php');
			} else {
				echo "Error:".$sql."<br/>".$conn->error;
				header('location:add_vehicle.php?err=2');
			}
		}
	}		
?>
