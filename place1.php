<?php
  session_start();
  if(!isset($_SESSION['user'])&&!isset($_SESSION['admin']))
   {
 	 header('Location:index.php');
   }
   else
   {
     echo "WELCOME TO place";
     echo $_SESSION['id'];
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 	<?php 
 // header('Location:userpanel.php');
	?> -->
<a href="hotel.php">Hotels</a>
<a href="temples.php">Temples</a>
</body>
</html>