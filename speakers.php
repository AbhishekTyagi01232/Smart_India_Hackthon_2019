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
	
      
      $sname = $_POST['name'];
      $sdob = $_POST['dob'];
      $sphone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $event_code = $_POST['event_code'];
      $address = $_POST['address'];
      $qualification = $_POST['hqualification'];
      $s_experience = $_POST['experience'];
      $topic = $_POST['topic'];
      $gender = $_POST['gender'];
      $handicapped = $_POST['handicapped'];



        
      
      $query = "INSERT INTO `speaker`(`spemail`, `spname`, `spdob`, `spphone`, `sppass`, `spaddress`, `spqualification`, `spspeakerexp`, `sptopic`, `spgender`, `sphandicapped`, `specode`) VALUES ('$email','$sname','$sdob','$sphone','$password','$address','$qualification','$s_experience','$topic','$gender','$handicapped','$event_code')";

	$result = mysqli_query($conn,$query);
		
		if ($result == TRUE) {
			 header("location:thankyou.html");
      //echo "data inserted";
    }
    	else{

    		echo "error";
    	}
 }