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
	echo "error";
}

$user = $_POST['user'];
if($user == 1){
	 $myusername = $_POST['email'];
      $mypassword = $_POST['pass'];
     
      $sql = "SELECT * FROM coordinator WHERE cemail ='$myusername' and cpass ='$mypassword'";
     
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result);
	


	
        if($rows==1){
         header("location:coordinatordashboard.html");
         }else{
	echo '<script>

	alert("you are not valid user");
	
	</script>';

	}
}

elseif ($user == 2) {
	 $myusername = $_POST['email'];
      $mypassword = $_POST['pass'];
     
      $sql = "SELECT * FROM speaker WHERE spemail ='$myusername' and sppass ='$mypassword'";
     
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result);
	


	
        if($rows==1){
         header("location:expertdashboard.html");
         }else{
	echo '<script>

	alert("you are not valid user");
	
	</script>';

	}
}


elseif ($user == 3) {
	 $myusername = $_POST['email'];
      $mypassword = $_POST['pass'];
     
      $sql = "SELECT * FROM school WHERE semail ='$myusername' and spassword ='$mypassword'";
     
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result);
	


	
        if($rows==1){
         header("location:instituedashboard.html");
         }else{
	echo '<script>

	alert("you are not valid user");
	
	</script>';

	}
}


elseif ($user == 4) {
	 $myusername = $_POST['email'];
      $mypassword = $_POST['pass'];
     
      $sql = "SELECT * FROM college WHERE coemail ='$myusername' and copass ='$mypassword'";
     
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result);
	


	
        if($rows==1){
         header("location:instituedashboard.html");
         }else{
	echo '<script>

	alert("you are not valid user");
	
	</script>';

	}
}

elseif ($user == 5) {
	 $myusername = $_POST['email'];
      $mypassword = $_POST['pass'];
     
      $sql = "SELECT * FROM industries WHERE iemail ='$myusername' and ipass ='$mypassword'";
     
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_num_rows($result);
	


	
        if($rows==1){
         header("location:coordinatordashboard.html");
         }else{
	echo '<script>

	alert("you are not valid user");
	
	</script>';

	}
}

else{
	echo "Error";
}

      
	

