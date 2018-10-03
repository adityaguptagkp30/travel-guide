
<?php
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","travelguide");
?>
<html>
<head></head>
<body>

	
<form action="" method="GET">
	<input type ="text" name="name" value="<?php 
  
	$name=$_GET['name']; echo $id; ?>"> <br><br>
<input type ="text" name="" value="<?php 
  
	$address=$_GET['address']; echo $address; ?>"> <br><br>
<input type="submit" name="submit" value="UPDATE"/>
</form>
<?php
if($_GET['submit'])
{   $name=$_GET['name'];
	$address=$_GET['address'];
	$query="UPDATE hotels SET name='$name' WHERE name='$name' AND address='$address'";
	$data=mysqli_query($conn, $query);
	if($data)
	{
	echo "<font color='green'>record update sucessful.";
	header("refresh:1;url=hdelete.php");
	}
	else
		echo "<font color='red'>record update not sucessful.<a href='deleteplace.php'>CHECK UPDATE";
	}
else
{
}
	?>


</body>
</html>