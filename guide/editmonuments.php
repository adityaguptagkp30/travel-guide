<?php 
// session_start();
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "EDIT MONUMENTS";
  	echo'<a href=moninsert.php>ADD MONUMENTS</a>';
  	echo'<a href=mondelete.php>DELETE MONUMENTS</a>';
}
else
{ header('Location:../index.php');
}
 ?>


