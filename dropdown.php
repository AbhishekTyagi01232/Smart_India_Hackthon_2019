<?php
$dbserver = "localhost";
$dbusername ="root";
$dbpassword = "";
$dbname = "drop";
$conn = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	$sql = "SELECT `demail`, `dname`, `dcode` FROM `dropdown`";
	$result = mysqli_query($conn,$sql);

	echo "<select name='drop'>";

	while($rows = mysqli_num_rows($result))
	{
		echo "<option value='".$rows['dname']."'>".$rows['dname']."</option>";
	}
	echo "</select>";
}
?>
