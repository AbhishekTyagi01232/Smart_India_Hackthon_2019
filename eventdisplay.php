<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$dbserver = "localhost";
$dbusername ="root";
$dbpassword = "";
$dbname = "events";
$conn = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
$query = "SELECT * FROM events"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['eventcode'] . "</td><td>" . $row['ename'] .. "</td><td>" . $row['eloc'] .. "</td><td>" . $row['sdate'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
}
?>
</body>
</html>