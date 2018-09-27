<html>
<head>
</head>
<?php
error_reporting(0);
session_start();
if($_SESSION["email"]==true)
{

echo"<h1>Welcome To Travel Guide</h1>";
echo"<h2>We Are Happy To Help You</h2>";
echo"<h3>welcome to our guide</h3>";

	echo"hello"." ".$_SESSION["email"];
	echo "<form action='user_logout.php' method='POST'>";
echo"<button type='submit' name='submit'>log out</button>";
echo '</form>';

}
else
{
	header('Location:user_login.php');

	}


?>

</html>


