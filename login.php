<?php
$conn=mysqli_connect("localhost","root","","web");
?>
<html>
<head></head>
<body>
<?php
if(isset($_POST['login'])){
extract($_POST);
$query="select * from reg where email='$_POST[email]' AND password='$_POST[password]'";
$run_query=mysqli_query($conn,$query);
if($run_query){
if(mysqli_num_rows($run_query)>0){
$_SESSION['email']=$email;
$_SESSION['password']=$password;
header("Location:w.php");
  }
else
{
echo"<div class='alert alert-warning'><strong>warning!</strong>login not sucessfull...</div>";
}
}
}
?>
<center><h1>*****login for tourists*****</h1></center>
<div class="form">
<form action="login.php" method="POST">
<center>
<table>
<tr>
<th></th>
<th>#login form#</th>
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" placeholder="emailid " required=""></td> 
</tr>
<tr>
<td> password</td>
<td><input type="password" name="password"placeholder="password" required=""></td> 
</tr>
<tr>
<td></td>
<td><input type="submit" value="login" name="login"></td> 
</tr>
</table>
</center>
</form>
</div>
</body>
</html>

