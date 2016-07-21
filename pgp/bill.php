<?php
	require('db_connection.php');
	session_start ();
	
	
	if (isset ($_SESSION['user_id'])) {
		$u_id = $_SESSION["user_name"];
		
	}
	else {
		header("Location: pgp/index.php?err=0");
	}
	
	$c_name = $_POST["c_name"];
	$v_no = $_POST["v_no"];
	$b_name = $_POST["b_name"];
	$v_price = $_POST['v_price'];
	$v_type = $_POST['v_type'];
	$id = "";
	$date = date("Y-m-d");

	if($c_name=="" || $v_no=="" || $v_price=="") {
		header('location:home1.php?err=0');
	}
	else {
	$sql = "insert into bill (u_id, branch_code, c_name, v_no, v_type, v_price, v_date) values ('".$u_id."', '".$b_name."', '".$c_name."', '".$v_no."', '".$v_type."', '".$v_price."', '".$date."')";
	
			if ($conn->query($sql) == TRUE) {
				$sql = "SELECT * FROM bill";
				$result = $conn->query($sql);
				while ($row = $result->fetch_assoc()) {
					$id=$row ['id'];					
				}

$row = $result->fetch_assoc();
			} else {
				echo "Error:".$sql."<br/>".$conn->error;
				header('location:home1.php?err=3');
			}
	}
?>
<html>
	<head>
		<title>Bill</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
	</head>
	<body class="color-8">
		<center>
		<style>
			table {
				width: 100%;
    				border-collapse: collapse;
				border-style:dotted;
				border-width:medium;
				padding:.1in;
				margin-top:1in;
			}
			td, th {
    				border: 1px solid black;
    				padding: 5px;
			}
		</style>
		<table cellspacing=3 border=1 cellpadding=3>
			<tr>
				<th colspan=4>
					<h1>Toll-Mage</h1>
				</th>
			</tr>
			<tr>
				<td align=center colspan=4>
					E-Receipt
				</td>
			</tr>
			<tr>
				<td>Reiept No.:</td>
				<td align=right><?php echo $id; ?></td>
				<td>Date. :</td>
				<td align=right><?php echo $date ?></td>
			</tr>
			<tr>
				<td colspan=2>Name :</td>
				<td colspan = 2 align=right><?php echo $c_name; ?></td>
			</tr>
			<tr>
				<td colspan=2>Vehicle No. :</td>
				<td colspan = 2 align=right><?php echo $v_no ; ?></td>
			</tr>
			<tr>
				<td colspan=2>Vehicle type :</td>
				<td colspan = 2 align=right><?php echo $v_type; ?></td>
			</tr>
			<tr>
				<td colspan=2>Price :</td>
				<td colspan = 2 align=right><?php echo $v_price; ?></td>
			</tr>
			<tr>
				<td colspan=2>Branch Code :</td>
				<td colspan = 2 align=right><?php echo $b_name; ?></td>
			</tr>
			<tr >
				<tr>
				<td colspan=4 align=right><?php echo '('.$u_id.')'; ?></td>
				</tr>
				<tr rowspan=2>
				<td align=right colspan=4>Authorized Signature</td>
				</td>
				</tr>
							
			</tr>
		</table>
		</br>
		</br>
		<button onclick="printThis()">Print this receipt</button>
		<a href="home1.php?err=10"><button>Cancel</button></a>
		</center>
		
		<script>
			function printThis() {
    				window.print();
			}
		</script>
	</body>
</html>
