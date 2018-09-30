<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","web");

$email=$_SESSION["email"];

$query1="select * from reg where email='$email'";
    $result=mysqli_query($conn, $query1);
if($result)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $a=$row["verification"];
        
    }
}

$query="update reg set verification='1' where email='$email'";
    $data=mysqli_query($conn, $query);

if($a==2)
{
    if($data)
    
	{
    
	echo "<font color='green'>account verified sucessfully.<a href='user_panel.php'>click here to login";
	}
	else
		echo "<font color='red'>account verification unsucessfull CONTACT ADMIN OR TRY REGISTER AGAIN.<a href='user_registeration.php'>CLICK TO REGISTER AGAIN";
    
}
else
    echo "OPPS! Sorry the link has been expired";
    ?>