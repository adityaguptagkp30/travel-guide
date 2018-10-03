<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","web");

?>
<html>
<head></head>
<body>
    <?php
    if($_SESSION["email"]==true)
{
//FETCHING A PARTICULAR DETAIL WITH WHOSE SESSION USER IS LOGIN
    if($conn)
{	
echo"<h3>connection ok </h3>"	;	
$query="select * from reg ";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total!=0)
{
	?>
	<table>
	<tr>
	<th>FIRST NAME</th>
	<th>EMAIL ID</th>
	<th>HOMETOWN</th>
	<th>GENDER</th>
    <th colspan=2>OPERATIONS</th>
	<th>PROFILE PICTURE</th>
        </tr>
	
<?php
	while($result =mysqli_fetch_assoc($run_query))
{
        if($result['email']==$_SESSION["email"])
	echo"<tr>
	          <td>".$result['firstname']."</td>
	          <td>".$result['email']."</td>
	          <td>".$result['hometown']."</td>
	          <td>".$result['gender']."</td>
            
			  <td><a href='profileUpdate.php?firstname=$result[firstname]& email=$result[email]& hometown=$result[hometown]& gender=$result[gender]& password=$result[password]'>EDIT</a></td>
			  <td><a href='deactivate.php?firstname=$result[firstname]& email=$result[email]& hometown=$result[hometown]& gender=$result[gender]& password=$result[password]'>DEACTIVATE</a></td>
              <td><img src='userimages/.".$result['imageSource']."' height='100' width='100'</td>
        
	   </tr>";
	
	
}
}
}	
else
	
	echo"<h3>OOPPS! database connection FAILED because</h3>".mysqli_connect_error();
	
    
    ?>
    
    
    
<form action="" method="post" enctype="multipart/form-data">
firstname<input type ="text" name="firstname" value="<?php echo $_GET['firstname']; ?>"/> <br><br>
     
email<input type ="text" name="email" value="<?php  echo $_GET['email']; ?>"/> <br><br>
hometown<input type ="text" name="hometown" value="<?php echo  $_GET['hometown']; ?>"/> <br><br>
gender<input type ="text" name="gender" value="<?php echo $_GET['gender']; ?>"/> <br><br>
    
     profile picture update  <input type="file" name="uploadfile" value=""/><br><br><br>
    
<input type="submit" name="submit" value="UPDATE"/>
</form>
<?php
if($_POST['submit'])
{
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$hometown=$_POST['hometown'];
	$gender=$_POST['gender'];
    $filename= $_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="userimages/.$filename";
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='100' width='100'/>";
	$query="update reg set firstname='$firstname',hometown='$hometown',gender='$gender',imageSource='$filename' where email='$email'";
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
        header('Location:user_login.php');
	?>


</body>
</html>
