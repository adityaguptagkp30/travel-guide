<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","travelguide");

?>
<html>
<head></head>
<body>
    <?php
    if($_SESSION["user"]==true)
{
//FETCHING A PARTICULAR DETAIL WITH WHOSE SESSION USER IS LOGIN
    if($conn)
{	
echo"<h3>connection ok </h3>"	;	
$query="select * from users ";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total!=0)
{
	?>
	<table>
	<tr>
	<th>FIRST NAME</th>
	<th>EMAIL ID</th>
	<th>PASSWORD</th>
	<th colspan=2>OPERATIONS</th>
	<th>PROFILE PIC</th>
	</tr>
	
<?php
	while($result =mysqli_fetch_assoc($run_query))
{
        if($result['email']==$_SESSION["user"])
	echo"<tr>
	          <td>".$result['name']."</td>
	          <td>".$result['email']."</td>
	          <td>".$result['password']."</td>
			  <td><a href='profileUpdate.php?name=$result[name]& email=$result[email]& password=$result[password]'>EDIT</a></td>
			  <td><a href='deactivate.php?name=$result[name]& email=$result[email]& password=$result[password]'>DEACTIVATE</a></td>
	          <td><img src='icon/.".$result['imageSource']."' height='100' width='100'></td>
	   </tr>";
	
	
}
}
}	
else
	
	echo"<h3>OOPPS! database connection FAILED because</h3>".mysqli_connect_error();
	
    
    ?>
    
    
    
<form action="" method="post" enctype="multipart/form-data">
firstname<input type ="text" name="name" value="<?php echo $_GET['name']; ?>"/> <br><br>
email<input type ="text" name="email" value="<?php  echo $_GET['email']; ?>"/> <br><br>
profile picture update  <input type="file" name="uploadfile" value=""/><br><br><br>
<input type="submit" name="submit" value="UPDATE"/>
</form>
<?php
if($_POST['submit'])
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	   $filename= $_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="icon/.$filename";
move_uploaded_file($tempname,$folder);
echo "<br><img src='$folder' height='100' width='100'/><br><br>";

	$query="UPDATE users SET name='$name',imageSource='$filename' WHERE email='$email'";
	$data=mysqli_query($conn, $query);
	if($data)
	{
	echo "<font color='green'>record update sucessful.<a href='profileUpdate.php'>CHECK UPDATE";
	}
	else
		echo "<font color='red'>record update not sucessful.<a href='profileUpdate.php'>CHECK UPDATE";
	}
else
{
	echo "<font color='blue'>Click on update button to save the changes";
}
    }
    else
        header('Location:tlogin.php');
	?>


</body>
</html>
