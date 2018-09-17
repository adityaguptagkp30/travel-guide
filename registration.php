<<<<<<< HEAD
<?php
$conn=mysqli_connect("localhost","root","","web");
?>
<html>
<head></head>
<body>
<?php
if(isset($_POST['submit']))
{
	
$firstname=$_POST['firstname'];    
$email=$_POST['email'];     
$hometown=$_POST['hometown'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$password=md5($password);     
$query="INSERT INTO reg(firstname,email,hometown,gender,password)VALUES('$firstname','$email','$hometown','$gender','$password')";
$run=mysqli_query($conn,$query);
if($run){
echo"data insert sucessful";
}
else{
echo"error:".mysqli_error($conn);
}
}
?>
<center><h1>*****travel guide for those who love travelling*****</h1></center>
<div class="form">
<form action="registration.php" method="POST">
<center>
<table>
<tr>
<th></th>
<th>#registration form#</th>
</tr>
<tr>
<td>first name</td>
<td><input type="text" name="firstname" placeholder="firstname" required=""></td> 
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" placeholder="emailid " required=""></td> 
</tr>
<tr>
<td>hometown</td>
<td><input type="text" name="hometown" placeholder="hometown" required=""></td> 
</tr>
<tr>
<td>gender</td>
<td><input type="text" name="gender"placeholder="sex" required=""></td> 
</tr>

<tr>
<td> password</td>
<td><input type="password" name="password"placeholder="hidden password" required=""></td> 
</tr>

<tr>
<td></td>
<td><input type="submit" value="submit" name="submit"></td> 
</tr>
</table>
</center>
</form>
</div>
</body>
</html>
=======
<?php
$conn=mysqli_connect("localhost","root","","web");
?>
<html>
<head></head>
<body>
<?php
if(isset($_POST['submit']))
{
	
$firstname=$_POST['firstname'];    
$email=$_POST['email'];     
$hometown=$_POST['hometown'];
$gender=$_POST['gender'];
$password=$_POST['password'];     
$query="INSERT INTO reg(firstname,email,hometown,gender,password)VALUES('$firstname','$email','$hometown','$gender','$password')";
$run=mysqli_query($conn,$query);
if($run){
echo"data insert sucessful";
}
else{
echo"error:".mysqli_error($conn);
}
}
?>
<center><h1>*****travel guide for those who love travelling*****</h1></center>
<div class="form">
<form action="registration.php" method="POST">
<center>
<table>
<tr>
<th></th>
<th>#registration form#</th>
</tr>
<tr>
<td>first name</td>
<td><input type="text" name="firstname" placeholder="firstname" required=""></td> 
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" placeholder="emailid " required=""></td> 
</tr>
<tr>
<td>hometown</td>
<td><input type="text" name="hometown" placeholder="hometown" required=""></td> 
</tr>
<tr>
<td>gender</td>
<td><input type="text" name="gender"placeholder="sex" required=""></td> 
</tr>

<tr>
<td> password</td>
<td><input type="password" name="password"placeholder="hidden password" required=""></td> 
</tr>

<tr>
<td></td>
<td><input type="submit" value="submit" name="submit"></td> 
</tr>
</table>
</center>
</form>
</div>
</body>
</html>
>>>>>>> 9123b5ba4fccf9f02f601a5dfc9e5ab3929ba46f
