<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			border:2px solid lightblue;
			width: 500px;
			height:60px;
			padding: 5px;
			margin: 5px auto;
			border-radius: 5px;
			background-color:lightgray;
			color:brown;
		}
	</style>
</head>
<body>
<h2 style="text-align: center;"> Participants LIST</h2>
<?php
$con=mysqli_connect("localhost","root","","participants");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT pname,pemail,paddress,ppno,pecode FROM participants";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf (" <table><tr> <td>%s</td> <td>%s</td> <td> %s </td> <td> %s </td> <td> %s </td></table>\n",$row[0],$row[1],$row[2],$row[3],$row[4]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
</body>
</html>


