<?php
	require('db_connection.php');
	session_start ();
	if (isset ($_SESSION['user_id'])) {
		$user_name = $_SESSION["user_name"];
		$combo_b = $_SESSION['combo_b'];
	}
	else {
		header("Location: index.php?err=0");
	}
?>
<html>
<head>
	<title>Home</title>
	<style type = "text/css">
		iframe,table {
			height:100%;
			width:100%;
		}
		.one{
			width=10%;
		}	
		html, body { 	height: 100%;
				padding: 5px;
				margin: 5px;
		}
		div {
			position: auto;
		}
		#iframe1 {
			width: 100%;
			float:right;
			height: 100%;
		}

		#iframe2 {
			width: 20%;
			float:left;
			height: 99%;
		}
		
		#div1 {	width: 100%;
			height: 10%;
			font-size: 25pt;
			text-align:center;
			top: 0;
			left: 0;
			background:orange;
		}
		#div2 {
			width : 10%;
			background: #AAA;
		}
	</style>
</head>
<body class="color-8">
	<div id = "div1">
	<?php echo "Welcome ". $user_name ?>
	</div>
	<table>
		<tr>	
			<td class="one">
				<a href="profile.php?err=10" target="iframe1">Profile</a> </br>
				<a href="home1.php?err=10" target="iframe1">Bill</a> </br>
				<a href="logout.php">Log out</a>
			</td>
			<td >
				<iframe id = "iframe1" name = "iframe1" src="profile.php?err=10" frameborder = "1"  align = "right">
		 		 <p>Your browser does not support iframes.</p>
				</iframe>	
			</td>
			
		</tr>	
	<table>
	
	
</body>
</html>
