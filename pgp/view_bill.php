<?php
	require('db_connection.php');
?>
<html>
<head>
	<title>View</title>
	<script>
	function showByUser(str) {
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
			xmlhttp.open("POST","sortByUser.php?q="+str,true);
			xmlhttp.send();
    		}
	}
	
	function showByBranch(str) {	
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
			xmlhttp.open("POST","sortByBranch.php?q="+str,true);
			xmlhttp.send();
    		}
	}

	function showByVehicle(str) {
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
			xmlhttp.open("POST","sortByVehicle.php?q="+str,true);
			xmlhttp.send();
    		}
	}
	function showByDate(str) {
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
			xmlhttp.open("POST","sortByDate.php?q="+str,true);
			xmlhttp.send();
    		}
	}
</script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
</head>
<body class="color-8">
	
	<center>
	<table border="1px" cellpadding=10>
		<tr>
			<th>Sort By User Info:</th>
			<th>Sort By Branch Info:</th>
			<th>Sort By Vehicle Info:</th>
			<th>Sort By Date:	</th>
		</tr>
		<tr>
			<td>
				<?php 
					$sql = "SELECT * FROM user_detail";
					$result = $conn->query($sql);
				?>		
				<select name='user_type'  onchange='showByUser(this.value)'>
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
				<select name='branch_type'  onchange='showByBranch(this.value)'>
					<option value="">Select a Branch</option>
					<?php
						while ($query_disp = $result->fetch_assoc()) {
							echo '<option value="'.$query_disp['branch_code'].'">'.$query_disp['branch_code'].'</option>';	
						}
					?>
				</select>
			</td>
			<td>
				<?php 
					$sql = "SELECT * FROM vehicle";
					$result = $conn->query($sql);
				?>		
				<select name='vehicle_type'  onchange='showByVehicle(this.value)'>
					<option value="">Select a Vehicle</option>
					<?php
						while ($query_disp = $result->fetch_assoc()) {
							echo '<option value="'.$query_disp['type'].'">'.$query_disp['type'].'</option>';	
						}
					?>
				</select>
			</td>
			<td>
				<input type="text" id="datepicker" onchange='showByDate(this.value)' readonly>
			</td>
		</tr>
	</table>
	
	</br>
	</br>
	<div id="txtHint"><b></b></div>
	</center>
	
</body>
</html>
