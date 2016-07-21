<?php
	session_start ();
	if (isset ($_SESSION['user_id'])) {
		$user_name = $_SESSION["user_name"];
	}
	else {
		header("Location: http://localhost/pgp/index.php?err=10");
	}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Admin Panel</title>
		<meta name="description" content="Creative Link Effects: Subtle and modern effects for links or menu items" />
		<meta name="keywords" content="link effect, css transition, style, inspiration, css3, menu item, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="logout.php"><span>Log Out</span></a></span>
			</div>
			<header>
				<h1>Hi <?php echo $user_name; ?></h1><p>This is admin panel you can edit the settings here</p>
				
			</header>
			<section class="color-1">
				<nav class="cl-effect-2">
					<a href="register.php?err=10"><span data-hover="Add Staff Info">Add Staff Info</span></a>
					<a href="delete_user_form.php?err=10"><span data-hover="Remove Staff Info">Remove Staff Info</span></a>
					<a href="add_vehicle.php?err=10"><span data-hover="Add Vehicle Info">Add Vehicle Info</span></a>
					<a href="delete_vehicle_form.php?err=10"><span data-hover="Remove Vehicle Info">Remove Vehicle Info</span></a>
					<a href="#"><span data-hover="Update Vehicle Info">Update Vehicle Info</span></a>
					<a href="#"><span data-hover="Update Staff Info">Update Staff Info</span></a>
					<a href="view.php"><span data-hover="View Info">View Info</span></a>
					<a href="view_bill.php"><span data-hover="View Bills">View Bills</span></a>
				</nav>
			</section>
			
		</div><!-- /container -->
	</body>
</html>
