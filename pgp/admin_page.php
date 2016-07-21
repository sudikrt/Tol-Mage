<?php
	session_start ();
	if (isset ($_SESSION['user_id'])) {
		$user_name = $_SESSION["user_name"];
	}
	else {
		header("Location: index.php?err=10");
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

		
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-rotate.css" />
		<script src="js/modernizr.custom.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script>
		jQuery(function ($) {
		    $('#accordion ').hover(function () {
			$(this).find('ul').stop(true, true).slideDown()
		    }, function () {
			$(this).find('ul').stop(true, true).slideUp()
		    }).find('ul').hide()

		})

		</script>
	</head>
	<body >
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
				
				<div id="block">
					<table>
					<tr>
					<td>
					<div class="accordian" id="accordion">
					<span>
						    <label id="accordion"> <a href="#" class="history_heading" rel="history_heading"><span data-hover="Staff ">Staff</span></a></label>
							<ul>
							    <li><a href="register.php?err=10">Add Staff</a>
							    </li>
							    <li><a href="delete_user_form.php?err=10">Remove Staff</a>
							    </li>
							</ul>
					</span>
					</div>
					</td>
					<td>
					<div class="accordian" id="accordion">
					<span>
						   <label id="accordion"> <a href="#" class="history_heading" rel="history_heading"><span data-hover="Vehicle Info">Vehicle </span></a></label>
							<ul>
							    <li><a href="add_vehicle.php?err=10">Add Vehicle</a>
							    </li>
							    <li><a href="delete_vehicle_form.php?err=10">Remove Vehicle</a>
							    </li>
							</ul>
					</span>
					</div>
					</td>
					<td>
					<div class="accordian" id="accordion">
					<span>
						    <label id="accordion"> <a href="#" class="history_heading" rel="history_heading"><span data-hover="Branches">Branches</span></a></label>
							<ul>
							    <li><a href="add_branch.php?err=10">Add Branch</a>
							    </li>
							    <li><a href="delete_branch_form.php?err=10">Remove Branch</a>
							    </li>
							</ul>
					</span>
					</div>
					</td>
					<td>
					<div class="accordian" id="accordion">
					<span>
						    <label id="accordion"> <a href="#" class="history_heading" rel="history_heading"><span data-hover="Views">Views</span></a></label>
							<ul>
							    <li><a href="view.php">View Info</a>
							    </li>
							    <li><a href="view_bill.php">View Bill</a>
							    </li>
							</ul>
					</span>
					</div>
					</td>
				</div>
					
					<style>
						table {
    							width: 100%;
    							border-collapse: collapse;
						}
						#block { align:center:}
						ul {
							width: 75%;
							font-style: italic;
	
						}
						.accordian ul li{
						list-style:none;
						font-family:Lucida Console;

						}
						.accordian ul li a{
						text-decoration:none;
						font-family:Lucida Console;

						}
						.accordian ul li ul {

						}
						.accordian1,{
							display:inline;
						}
					</style>
				</nav>
			</section>			
		</div><!-- /container -->
	</body>
</html>
