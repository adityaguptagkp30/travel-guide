<?php 
// session_start();
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "<center>EDIT HOTELS";
  	echo'<a href=hinsert.php>ADD HOTELS</a>';
  	echo'<a href=hdelete.php>DELETE HOTEL</a></center>';
}
else
{ header('Location:../index.php');
}
 ?>


