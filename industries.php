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
	
      
      $iname = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $address = $_POST['address'];
      $industry_type = $_POST['industry'];


        
      
      $query = "INSERT INTO `industries`(`iemail`, `iname`, `iphone`, `ipass`, `iaddress`, `itype`) VALUES ('$email','$iname','$phone','$password','$address','$industry_type')";

	$result = mysqli_query($conn,$query);
		
		if ($result == TRUE) {
			  header("location:thankyou.html");
      //echo "data inserted";
    }
    	else{

    		echo "error";
    	}
 }