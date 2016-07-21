<?php
require('db_connection.php');
$q = $_GET['q'];

$sql = "SELECT * FROM vehicle WHERE type = '".$q."'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
echo $row['price'];
?>
