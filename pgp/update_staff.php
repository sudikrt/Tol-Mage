<?php
session_start ();
$err = $_GET['err'];
$err_msg = "";
if($err!="") {
	switch($err) {
		case 0: $err_msg = "Incomplete form";
			break;
		case 1: $err_msg = "Passwords donot match";
			break;
		case 2: $err_msg = "Already registered or try different username";
			break;
		case 3: $err_msg = "Sql Error try again";
			break;
		default:$err_msg = "";
			break;
	}
}
?>
<html>
<head>
	<title>Create User</title>
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
			<h1>Create User</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form method = "POST" action = "reg_submit.php">
						<input type="text" class="text" value="NAME    " name = "name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME    ';}" >

						<input type="text" class="text" value="EMAIL   " name = "email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL    ';}" >
						<input type="text" class="text" value="User Id    " name = "user_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USER ID    ';}" >
						
						<input type="password" value="PASSWORD" name = "password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD    ';}">

						<input type="password" value="RE-PASS" name = "re-pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'RE-PASS    ';}">
						<div class="submit">
							<input type="submit" value="Create User" >
						</div>	
					<span> <center></span id='err_submit' style='color:red; font-size:12px;'><?php echo $err_msg; ?> </center></span>
					<p><a href="admin_page.php">Cancel</a></p>
				</form>
			</div>
		</div>
</body>
</html>
