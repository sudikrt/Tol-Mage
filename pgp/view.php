<?php
	require('db_connection.php');
?>
<html>
<head>
	<title>View</title>
	<script>
	function showUser(str) {
    		if (str == "") {
			document.getElementById("txtHint").value = "";
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
				document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("POST","getStaff.php?q="+str,true);
			xmlhttp.send();
    		}
	}
	
	function showBranch(str) {	
    		if (str == "") {
			document.getElementById("txtHint").innerHTML = "";
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
				document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("POST","getBranch.php?q="+str,true);
			xmlhttp.send();
    		}
	}

	function showVehicle(str) {
    		if (str == "") {
			document.getElementById("vehicle_type").innerHTML = "";
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
				document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("POST","getVehicle.php?q="+str,true);
			xmlhttp.send();
    		}
	}
</script>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-rotate.css" />
</head>
<body class="color-8">
	<div class="container">
	<center>
	<table border="1px" cellpadding=10>
		<tr>
			<th>User Info:</th>
			<th>Branch Info:</th>
			<th>Vehicle Info:</th>
		</tr>
		<tr>
			<td>
				<?php 
					$sql = "SELECT * FROM user_detail";
					$result = $conn->query($sql);
				?>		
				<select name='user_type'  onchange='showUser(this.value)'>
					<option value="">Select a staff</option>
					<?php
						while ($query_disp = $result->fetch_assoc()) {
							echo '<option value="'.$query_disp['user_id'].'">'.$query_disp['user_id'].'</option>';	
						}
					?>
				</select>
			</td>
			<td>
				<?php 
					$sql = "SELECT * FROM branch";
					$result = $conn->query($sql);
				?>		
				<select name='branch_type'  onchange='showBranch(this.value)'>
					<option value="">Select a Branch</option>
					<?php
						while ($query_disp = $result->fetch_assoc()) {
							echo '<option value="'.$query_disp['branch_name'].'">'.$query_disp['branch_name'].'</option>';	
						}
					?>
				</select>
			</td>
			<td>
				<?php 
					$sql = "SELECT * FROM vehicle";
					$result = $conn->query($sql);
				?>		
				<select name='vehicle_type'  onchange='showVehicle(this.value)'>
					<option value="">Select a Vehicle</option>
					<?php
						while ($query_disp = $result->fetch_assoc()) {
							echo '<option value="'.$query_disp['type'].'">'.$query_disp['type'].'</option>';	
						}
					?>
				</select>
			</td>
		</tr>
	</table>
	</br>
	</br>
	<div id="txtHint"><b></b></div>
	
</div></body>
</html>
