<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","web");
$email=$_GET['email'];
$query="delete from reg where email='$email'";
$data=mysqli_query($conn,$query);
if($data)
{
	
    echo "<font color='green'>record deleted sucessfully.<a href='user_login.php'>CLICK HERE TO GO TO LOGIN PAGE";

}
else
{
	echo "<font color='red'>record delete not sucessful.<a href='user_login.php'>ERROR OCCURED CLICK TO LOGIN AGAIN";
}
session_destroy();
header('location:user_login.php');


?>