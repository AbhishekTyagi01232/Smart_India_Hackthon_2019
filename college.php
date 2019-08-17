<?php
$dbserver = "localhost";
$dbusername ="root";
$dbpassword = "";
$dbname = "project";
$conn = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
	
      
      $uname = $_POST['uname'];
      $ucode = $_POST['ucode'];
      $cname = $_POST['cname'];
      $ccode = $_POST['ccode'];
      
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $address = $_POST['address'];


        
      
      $query = "INSERT INTO `college`(`coemail`, `couniversityname`, `couniversitycode`, `coname`, `cocode`, `copass`, `coaddress`) VALUES ('$email','$uname','$ucode','$cname','$ccode','$password','$address')";

	$result = mysqli_query($conn,$query);
		
		if ($result == TRUE) {
			 header("location:thankyou.html");
      //echo "data inserted";
    }
    	else{

    		echo "error";
    	}
 }