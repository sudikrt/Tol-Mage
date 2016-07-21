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

$sql="SELECT * FROM user_detail WHERE user_id = '".$q."'";
$result = $conn->query($sql);

echo "<table class='tb'>
<tr>
<th>Name</th>
<th>E-Mail</th>
<th>User-id</th>
</tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['user_id'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
