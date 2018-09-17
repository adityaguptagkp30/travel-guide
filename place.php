<?php

 include_once('connection.php');
 $place=$_POST['place'];
 $query="SELECT `place` FROM `place` WHERE `place`='$place'";
 		$result=mysqli_query($conn,$query);
 		if(mysqli_num_rows($result)>0)
 		{
 			$row=mysqli_fetch_assoc($result);
 			$_SESSION['place']=$row['place'];
 			header('Location:place1.php');

 		}

?>