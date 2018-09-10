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
$password=$_POST['password'];     
$teamname=$_POST['teamname'];
$budget=$_POST['budget'];
$query="insert into reg(firstname,email,password,teamname,budget)values('$firstname','$email','$password','$teamname','$budget')";
$run=mysqli_query($conn,$query);
if($run){
echo"data insert sucessful";
}
else{
echo"error:".mysqli_error($conn);
}
}
?>
<center><h1>*****registration for ipl players*****</h1></center>
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
<td> password</td>
<td><input type="pass" name="password"placeholder="password" required=""></td> 
</tr>
<tr>
<td>teamname</td>
<td><input type="text" name="teamname"placeholder="teamname" required=""></td> 
</tr>
<tr>
<td>budget</td>
<td><input type="text" name="budget"placeholder="budget" required=""></td> 
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
