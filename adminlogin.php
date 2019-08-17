<?php
$dbserver = "localhost";
$dbusername ="root";
$dbpassword = "";
$dbname = "project";
$conn = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{


	 $aemail = $_POST['email'];
      $apass = $_POST['pass'];
     
      $sql = "SELECT * FROM admin WHERE email ='$aemail' and password ='$apass'";
     
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result);
	


	
        if($rows==1){
         header("location:admindashboard.html");
         }
         else{
         	echo '<script>
         	alert("you are not valid user")';
         }
}

	 
	

