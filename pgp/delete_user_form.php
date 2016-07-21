<?php
$err = $_GET['err'];
$err_msg = "";
if($err!="") {
	switch($err) {
		case 0: $err_msg = "Enter the user_id";
			break;
		case 1: $err_msg = "User not exists";
			break;
		case 2: $err_msg = "Sql Error try again";
			break;
		default:$err_msg = "";
			break;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Remove Staff</title>
		<meta charset="utf-8">
		<link href="css/style3.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>Remove Staff</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form method = "POST" action = "delete_user.php">
						<input type="text" class="text" value="USER ID" name = "user_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USER ID';}" >
						<input type="submit" value="Delete Staff" >				
					<span> <center></span id='err_submit' style='color:red; font-size:12px;'><?php echo $err_msg; ?> </center></span>
						<p><a href="admin_page.php">Cancel</a></p>
					</div>	
				</form>
			</div>
		</div>
			 <!-----//end-main---->
		 		
</body>
</html>
