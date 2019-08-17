<?php
include 'db.php';
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
	
      
      $sname = $_POST['sname'];
      $scode = $_POST['scode'];
      $school_board = $_POST['school_board'];
      
      $email = $_POST['email'];
      
      $password = $_POST['pass'];
      $address1 = $_POST['address'];
      //$active = $_POST['active'];
      //$status = $_POST['status'];


     $email1=mysqli_real_escape_string($conn,$email); 
      $active=md5($email1.time()); // encrypted email+timestamp
      //echo "$active";
      $query = "INSERT INTO `school`(`semail`, `sname`, `scode`, `sboard`, `spassword`, `saddress`,`active`) VALUES ('$email','$sname','$scode','$school_board','$password','$address1','$active')";

    include 'send_mail1.php';
    $to = $email;
   
    $subject = 'email verification';
   
    $body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation.php?code='.$active.'">'.$base_url.'activation.php?code='.$active.'</a>';
    echo "$body";
    
    Send_Mail($to,$subject,$body);

	$result = mysqli_query($conn,$query);
  //echo "$result";
		
		if ($result == TRUE) {
		 header("location:thankyou.html");
      //echo "data inserted";
    }
    	
 }