<?php
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
  	else
  	{
       if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) 
       {
       $response='INVALID EMAIL';
       }
  	   $query="SELECT `email` FROM `users` WHERE `email`='$email'";
  		 $result=mysqli_query($conn,$query);
  		
  	   if(mysqli_num_rows($result) > 0)
            {
                $response = 'Email already registered';
            }
            else
            {
                $password = md5($password);
                //write the query for inserting data into databse
                $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
               //execute the query using mysqli_connect() function which returns true on success
                if( mysqli_query($conn, $query) )
                {
                    $correct_response = 'Registration successfull...';
                    header("refresh:2;url=tlogin.php");
                }
                else
                {
                    $response = 'Something went wrong';
                }
        
            }
         
      }
    }
?>