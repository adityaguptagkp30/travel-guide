<html>
<style>
td{
	padding:10px;
}
</style>
<?php
error_reporting(0);
session_start();
if($_SESSION["email"]==true)
{

echo"<h1>Welcome To Travel Guide</h1>";
echo"<h2>YOU ARE A ADMIN YOU CAN DO ANYTHING WITH DATABASE</h2>";


	echo"hello"." ".$_SESSION["email"];
	$conn=mysqli_connect("localhost","root","","web");
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
	<th>PASSWORD</th>
	<th colspan=2>OPERATIONS</th>
	</tr>
	
<?php
	while($result =mysqli_fetch_assoc($run_query))
{
	echo"<tr>
	          <td>".$result['firstname']."</td>
	          <td>".$result['email']."</td>
	          <td>".$result['hometown']."</td>
	          <td>".$result['gender']."</td>
	          <td>".$result['password']."</td>
			  <td><a href='update.php?firstname=$result[firstname]& email=$result[email]& hometown=$result[hometown]& gender=$result[gender]& password=$result[password]'>EDIT</a></td>
			  <td><a href='delete.php'>DELETE</a></td>
	   </tr>";
	
	
}
}
}	
else
	
	echo"<h3>OOPPS! database connection FAILED because</h3>".mysqli_connect_error();
	
	echo "<form action='admin_logout.php' method='POST'>";
echo"<button type='submit' name='submit'>log out</button>";
echo '</form>';

}
else
{
	header('Location:admin_login.php');

	}


?>

</table>
</html>


