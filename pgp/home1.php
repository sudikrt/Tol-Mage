<?php
	require('db_connection.php');
	session_start ();
	
	$err = $_GET['err'];
	$err_msg = "";
	if($err!="") {
		switch($err) {
			case 0: $err_msg = "Incomplete form";
				break;
			case 3: $err_msg = "Sql Error try again";
				break;
			default:$err_msg = "";
				break;
		}
	}

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
	<script>
	function showPrice(str) {
    		if (str == "") {
			document.getElementById("v_price").value = "";
			return;
	    	} 
		else {
			if (window.XMLHttpRequest) {
			    // code for IE7+, Firefox, Chrome, Opera, Safari
			    xmlhttp = new XMLHttpRequest();
			} else {
			    // code for IE6, IE5
			    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
			    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("v_price").value = xmlhttp.responseText;
				}
			};
			xmlhttp.open("POST","getPrice.php?q="+str,true);
			xmlhttp.send();
    		}
}
</script>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
		
		
</head>
<body class="color-8">
	<?php 
		$sql = "SELECT * FROM vehicle";
		$result = $conn->query($sql);

	?>
	<center>
		<h1> Toll Collect </h1>
	<form method = "POST" action = "bill.php">
	
	<pre>
		Name		:	<input type = "text" name = "c_name">
		
		Vehicle No	:	<input type = "text" name = "v_no">
		
		Type		:	<select name='v_type'  onchange='showPrice(this.value)'>
					<option value="">Select a the Vehicle type</option>
					<?php
						while ($query_disp = $result->fetch_assoc()) {
	
							echo '<option value="'.$query_disp['type'].'">'.$query_disp['type'].'</option>';	
						}

					?>
					</select>

		Price/Toll	:	<input type = "text" name = "v_price" id = "v_price" readonly>

		Branch-Code	:	<input type = "text" name = "b_name" value = "<?php echo $combo_b; ?>" readonly >

				<input type = "submit" value = "Submit">
		
		<span> <center></span id='err_submit' style='color:red; font-size:12px;'><?php echo $err_msg; ?> </center></span>
	</pre>
	</center>
	
</body>
</html>
