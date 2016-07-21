<?php
session_start ();
$err = $_GET['err'];
$err_msg = "";
if($err!="") {
	switch($err) {
		case 0: $err_msg = "Incomplete form";
			break;
		case 1: $err_msg = "Vehicle already registered ";
			break;
		case 2: $err_msg = "Sql Error try again";
			break;
		default:$err_msg = "";
			break;
	}
}
?>
<html>
<head>
	<title>Add Vehicle Info</title>
		<meta charset="utf-8">
		<link href="css/style1.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	<div class="main">
		<div class="login-form">
			<h1>Add Vehicle Info</h1>
					<div class="head"><img src="images/user.png" alt=""/>
					</div>
				<form method = "POST" action = "vehicle_submit.php">
						<input type="text" class="text" value="Vehicle Type" name = "vehicle_type" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Vehicle Type';}" >

						<input type="text" class="text" value="Price   " name = "price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Price   ';}" >
						<textarea class = "text" name = "description"  rows = "5" cols = "46" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description......';}" >Description......</textarea>
						
						<div class="submit">
							<input type="submit" value="Add" >
						</div>	
					<span> <center></span id='err_submit' style='color:red; font-size:12px;'><?php echo $err_msg; ?> </center></span>
					<p><a href="admin_page.php">Cancel</a></p>
				</form>
			</div>
		</div>
</body>
</html>
