
<?php
session_start();
require('tdelete.php');
error_reporting(0);
//
$conn=mysqli_connect("localhost","root","","travelguide");
 $id = $_GET["id"];
 $query="DELETE FROM temples where name='$id'";
$data=mysqli_query($conn,$query);
if($data)
{   echo $id;
	echo "<font color='green'>record deleted sucessfully";
	header("refresh:1;url=tdelete.php");
}
else
{
	echo"<font color='red'>sorry,delete process failed";
}
?>