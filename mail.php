<?php
//index.php
$connect = new PDO("mysql:host=localhost;dbname=project", "root", "");
$query = "SELECT * FROM customer ORDER BY customer_id";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Send Bulk Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/speaker.css">
  <style>
    body{
      background-color:white;
    }
footer .nav-link{
        color: #683594;
        font-size: 18px;
        font-weight: 400;
      }
  .bg-light {
    background-color: #e1e2e2!important;
      }

.btn-primary {
    color: #fff;
    background-color:transparent;
    border-color:transparent;  
}
.navbar-expand-sm {
    justify-content: center;
}
.btn-primary:hover {
    background-color: transparent;
    border-color: transparent;
}
.dropdown-menu.show {
    margin-left: -49px;
}
.container{
  margin-bottom: 32px;
}
.container .btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
</style>
  
 </head>
 <body >
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
         <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> HOME</a>
                </li>
          <li class="nav-item">
            <a class="nav-link"  href="eventlist.html">EVENTS</a>
            
                    </li>
          
                <li class="nav-item">
                  <div class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  INITAITIVE
                      </button>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="https://www.sih.gov.in/">SMART INDIA HAKATHON</a>
                      <a class="dropdown-item" href="https://swayam.gov.in/"> SWAYAM</a>
                      </div>
                  </div>
                      </li>
              
                
          <li class="nav-item">
            <a class="nav-link"   href="bureaus.html" target="_self"> BUREAUS</a>
                    </li>
          
    
                                    </ul>                                                    </nav>
<div class="container">                                         
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      catogries
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="linkmail1.php"> SEND MAIL TO ALL</a>
      <a class="dropdown-item" href="linkmail2.php">  SEND MAIL TO CANTEEN</a>
      <a class="dropdown-item" href="linkmail3.php"> SEND MAIL TO EXPERTS AND  COORDINATORS</a>
    </div>
  </div>
</div>


   <footer>
                        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link" href="#">Terms Of Us</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="complain.html">Grievance</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="feedback.html">Feedback</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                    </li>
                                            </ul>
                                                    </nav> </footer>
 </body>
</html>