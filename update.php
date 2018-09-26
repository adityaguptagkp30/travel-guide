<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","web");

?>
<html>
<head></head>
<body>

<form action="" method="GET">
firstname<input type ="text" name="firstname" value="<?php echo $_GET['firstname']; ?>"/> <br><br>
email<input type ="text" name="email" value="<?php  echo $_GET['email']; ?>"/> <br><br>
hometown<input type ="text" name="hometown" value="<?php echo  $_GET['hometown']; ?>"/> <br><br>
gender<input type ="text" name="gender" value="<?php echo $_GET['gender']; ?>"/> <br><br>
<input type="submit" name="submit" value="UPDATE"/>
</form>
<?php
if($_GET['submit'])
{
	$firstname=$_GET['firstname'];
	$email=$_GET['email'];
	$hometown=$_GET['hometown'];
	$gender=$_GET['gender'];
	$query="update reg set firstname='$firstname',hometown='$hometown',gender='$gender' where email='$email'";
	$data=mysqli_query($conn, $query);
	if($data)
	{
	echo "<font color='green'>record update sucessful.<a href='admin_panel.php'>CHECK UPDATE";
	}
	else
		echo "<font color='red'>record update not sucessful.<a href='admin_panel.php'>CHECK UPDATE";
	}
else
{
	echo "<font color='blue'>Click on update button to save the changes";
}
	?>


</body>
</html>
