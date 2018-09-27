<?php


if(isset($_POST["submit"]))
{ session_start();

	
session_destroy();
header('location:user_login.php');

}
?>