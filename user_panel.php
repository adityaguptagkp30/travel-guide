<html>
<head>
</head>
<?php
error_reporting(0);
session_start();
if($_SESSION["email"]==true)
{
echo "<a href='profileUpdate.php'> click here to update profile </a>";
echo"<h1>Welcome To Travel Guide</h1>";
echo"<h2>We Are Happy To Help You</h2>";
echo"<h3>welcome to our guide</h3>";

function show_count()
{
	$filename='count.txt';
	$handle=fopen($filename,'r');
	$current=fread($handle,filesize($filename));
	echo $current;
	fclose($handle);
}
    
    show_count();
    
    echo"\t user have till now used travel guide <br/>";

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


