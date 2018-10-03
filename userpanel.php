<h1>Welcome To Travel Guide</h1>
<h2>We Are Happy To Help You</h2>
welcome to our guide
<html>
<head>
</head>
<?php
session_start();
if($_SESSION["email"]==true)
{
	echo"hello"." ".$_SESSION["email"];
    
}
else{
	header('location:login.php');
}

echo'<a href="logout.php">log out</a>';

?>

</html>


