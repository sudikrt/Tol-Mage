
<?php
session_start ();
require('db_connection.php');
$err = $_GET['err'];
$err_msg = "";
if($err!="") {
	switch($err) {
		case 0: $err_msg = "Incorrect Username/password";
			break;
		case 1: $err_msg = "Sql Error try again";
			break;
		default:$err_msg = "";
			break;
	}
}
		$sql = "SELECT branch_code FROM branch";
		$result = $conn->query($sql);
//session_destroy ();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<meta charset="utf-8">
	<link href="css/style3.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-border.css" />-->
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	
	 <div class="main">
		<div class="login-form">
			<h1>Member Login</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form method = "POST" action = "login.php">
				<style>	
					select {
						width:100%;
						margin-bottom:10px;
					}
				</style>
				<select name='combo_b'>	
				<?php 
					$sql = "SELECT branch_code FROM branch";
					$result = $conn->query($sql);					
					while ($query_disp = $result->fetch_assoc()) {
					print '<option value="'.$query_disp['branch_code'].'">'.$query_disp['branch_code'].'</option>';	
				}
				?>
				</select>
						<input type="text" class="text" value="USERNAME" name = "username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
						<input type="password" value="Password" name = "password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						<div class="submit">
							<input type="submit" value="LOGIN" >
					</div>	
					
					<span> 
						<center>
							</span id='err_submit' style='color:red; font-size:12px;'><?php echo $err_msg; ?> 
						</center>
					</span>
					<span> 
						<center><span font-size:12px;'><a href="index.html">Go Back</a></span> 
						</center>
					</span>				
				</form>
			</div>
		</div>
			 <!-----//end-main---->
		 	
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
		</script>	
</body>
</html>
