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
	
      
      $state = $_POST['state'];
      $pincode = $_POST['pincode'];
      $phone_no = $_POST['phone_no'];
      $room = $_POST['room'];
      $time = $_POST['time'];
      $hallname = $_POST['hallname'];
      
      $query = "INSERT INTO hallbooking VALUES ('$state','$pincode','$phone_no','$room','$time','$hallname')";

      //$cust = "INSERT INTO customer VALUES ('$pname','$email')";
      
	$result = mysqli_query($conn,$query);
  /*$cust = mysqli_query($conn,$query);
  if ($cust == false) {
   echo "you are false";
  }
  */
		
		if ($result == TRUE) {
    

			header("location:payment.html");
    }
    	else{

    		echo "error";
    	}
 }