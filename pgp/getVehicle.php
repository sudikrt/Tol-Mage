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

$sql="SELECT * FROM vehicle WHERE type = '".$q."'";
$result = $conn->query($sql);

echo "<table class='tb'>
<tr>
<th>Vehicle_Type</th>
<th>Price</th>
<th>Description</th>
</tr>";
$row = $result->fetch_assoc();
echo "<tr>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "</tr>";
//while() {
    
//}
echo "</table>";
?>
</body>
</html>
