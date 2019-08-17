<?php
//send_mail.php

if(isset($_POST['Send']))
{
 require 'PHPMailer/PHPMailerAutoload.php';
 $output = '';

  $subject=$_POST['subject'];

  $Discription=$_POST['Discription'];
  
//print_r($_POST['customer_email']);
//echo "Send mail  ----";
 foreach($_POST['customer_email'] as $row)
 {

  $email = $row;
  //echo $email."</br>";
  $mail = new PHPMailer;
  $mail->IsSMTP();        //Sets Mailer to send message using SMTP
  $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
  $mail->Port = '587';        //Sets the default SMTP server port
  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = 'myprojectsih19@gmail.com';     //Sets SMTP username
  $mail->Password = 'SIH@2019';     //Sets SMTP password
  $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->From = 'myprojectsih19@gmail.com';   //Sets the From email address for the message
  $mail->FromName = 'SIH2019';     //Sets the From name of the message
  $mail->AddAddress($email, "Name"); //Adds a "To" address
  $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);       //Sets message type to HTML
  $mail->Subject = $subject; //Sets the Subject of the message
  //An HTML or plain text message body
  $mail->Body = $Discription;

  $mail->AltBody = '';

  $result = $mail->Send();      //Send an Email. Return true on success or false on error

 }
 if($result == true)
 {
  header("location:thankyou.html");
 }
 else
 {
  echo "  -----------  error";
 }
}

?>
