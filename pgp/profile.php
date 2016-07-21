<?php
	require('db_connection.php');
	session_start ();
	
	$err = $_GET['err'];
	$err_msg = "";
	if($err!="") {
		switch($err) {
			case 0: $err_msg = "Incomplete form";
				break;
			case 1: $err_msg = "Passwords donot match";
				break;
			case 3: $err_msg = "Sql Error try again";
				break;
			case 4: $err_msg = "Updated Successfully";
				break;
			default:$err_msg = "";
				break;
		}
	}

	if (isset ($_SESSION['user_id'])) {
		$user_name = $_SESSION["user_name"];

		$sql = "SELECT * FROM user_detail WHERE user_id='".$user_name."'";
		$result = $conn->query($sql);
		$res = $result->fetch_assoc();	
			
	}
	else {
		header("Location: index.php?err=0");
	}
?>
<htm>
<head>
	<title>Profile</title>
	
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		

</head>
<body class="color-8">
	
	<center>
		<h1>Update Your Profile</h1>
	<pre>
		<form method = "post" action = "update_profile.php">
		User Id		:	<input type="text" name = "user_id" readonly value = "<?php echo $user_name;?>">

		Name 		:	<input type="text" name = "name" value = "<?php echo $res['name']; ?>">

		Email		:	<input type="text" name = "email" value = "<?php echo $res['email']; ?>" >
	
		Password	:	<input type="password" name = "pass">

		Re-Password	:	<input type="password" name = "re-pass">

			<input type="submit" value = "Update">
		</form>
	</pre>
	<span> <center></span id='err_submit' style='color:red; font-size:12px;'><?php echo $err_msg; ?> </center></span>
	</center>
</body>
</html>

	
