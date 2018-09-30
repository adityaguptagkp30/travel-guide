<?php 
// session_start();
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "EDIT MALLS";
  	echo'<a href=mallinsert.php>ADD MALLS</a>';
  	echo'<a href=malldelete.php>DELETE MALLS</a>';
}
else
{ header('Location:../index.php');
}
 ?>


