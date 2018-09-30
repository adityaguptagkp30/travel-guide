<?php
   session_start();
   
   echo '<br>';
   echo "not present";
   include('userpanel.php');
   header("refresh:1;url=userpanel.php");

?>