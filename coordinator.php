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
	
      
      $cname = $_POST['name'];
      $dob = $_POST['dob'];
      $phone = $_POST['phone_no'];
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $address = $_POST['address'];
      $s_event = $_POST['event_code'];
      $college_name = $_POST['cname'];
      $exprience = $_POST['exp'];
      $gen = $_POST['gender'];
      
      
      
      $query = "INSERT INTO `coordinator`(`cemail`, `cname`, `cdob`, `cphone`, `cpass`, `caddress`, `ceventcode`, `cinstitutename`, `cexp`, `cgender`) VALUES ('$email','$cname','$dob','$phone','$password','$address','$s_event','$college_name','$exprience','$gen')";
      
	$result = mysqli_query($conn,$query);
		
		if ($result == TRUE) {
            header("location:thankyou.html");
    }
    	else{

    		echo "error";
    	}
 }