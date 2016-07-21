<!DOCTYPE html>
<html>
<head>
<style>
.tb table {
    width: 100%;
    border-collapse: collapse;
}

.tb table, td, th {
    border: 1px solid black;
    padding: 5px;
}

.tb th {text-align: left;}
</style>
</head>
<body>

<?php
require('db_connection.php');
$q = $_GET['q'];

$sql="SELECT * FROM branch WHERE branch_name = '".$q."'";
$result = $conn->query($sql);

echo "<table class='tb'>
<tr>
<th>Branch Code</th>
<th>Branch Name</th>
<th>Branch Detail</th>
</tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['branch_code'] . "</td>";
    echo "<td>" . $row['branch_name'] . "</td>";
    echo "<td>" . $row['branch_details'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
