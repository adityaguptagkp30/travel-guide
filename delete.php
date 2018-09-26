<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","web");
$email=$_GET['email'];
$query="delete from reg where email='$email'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<font color='green'>record deleted sucessfully";

}
else
{
	echo"<font color='red'>sorry,delete process failed";
}
?>