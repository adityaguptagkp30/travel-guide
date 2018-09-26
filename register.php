<?php
 error_reporting(0);
  include_once('connection.php');
  session_start();
  if(isset($_SESSION['user']))
  {
  	header('Location:userpanel.php');

  }
  else if(isset($_SESSION['admin']))
  {
    header('Location:adminpanel.php');

  }
  $response='';
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
  	$name=$_POST['name'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];
  	$response='';
  	$correct_response='';
  	if(empty($name) || empty($email) || empty($password))
  	{
  		$response='Fields cant be empty';
  	}
  	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $response = 'Invalid email format'; 
    }
    else
    {
  	   $query="SELECT `email` FROM `users` WHERE `email`='$email'";
  		 $result=mysqli_query($conn,$query);
  		//check if email is already registered
  	        if(mysqli_num_rows($result) > 0)
            {
                $response = 'Email already registered';
            }
       // if new email is being registered     
            else
            {
                $password = md5($password);
                //write the query for inserting data into databse
                $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
               //execute the query using mysqli_connect() function which returns true on success
                if( mysqli_query($conn, $query) )
                {    
                     
require './phpm/helo.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shivanshu5416jaiswal@gmail.com';                 // SMTP username
$mail->Password = 'shiv1357';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('shivanshu5416jaiswal@gmail.com', 'TRAVEl');
$mail->addAddress($email);     // Add a recipient              // Name is optional
//$mail->addReplyTo(EMAIL);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent please verify your email:';
    echo $email;
}


                    $correct_response = 'Registration successfull...';
                    // to take to login page within 2 sec
                    //header("refresh:2;url=tlogin.php");
                }
                else
                {
                    $response = 'Something went wrong';
                }
        
            }
         
      }
    }
?>