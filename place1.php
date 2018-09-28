
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
  session_start();
  require('userpanel.php');
  if(!isset($_SESSION['user'])&&!isset($_SESSION['admin']))
   {
 	 header('Location:index.php');
   }
   else if(isset($_SESSION['id']))
   { echo '<br><br>';
     echo "WELCOME TO place ";
     //echo $_SESSION['id'];
      echo $_SESSION['place']; 
      echo'<br><br>';
     echo  '<div class="nav-link"><a href="h1.php">Hotels</a>';
echo'<a href="t1.php">Temples</a></div>';  
   }
   else
   {
    echo "NOT PRESENT";
   }

 // header('Location:userpanel.php');
	?> -

</body>
</html>