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
	
      
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $mobile = $_POST['mobile_no'];
      $email = $_POST['email'];
      
      $gevent = $_POST['event_code'];
      $comment = $_POST['comment'];
      
      $query = "INSERT INTO `grievance`(`gmail`, `fname`, `lname`, `mobile`, `eventcode`, `comment`) VALUES ('$email','$fname','$lname','$mobile','$gevent','$comment')";
      
	$result = mysqli_query($conn,$query);
		
		if ($result == TRUE) {
            header("location:thankyou.html");
    }
    	else{

    		echo "error";
    	}
 }