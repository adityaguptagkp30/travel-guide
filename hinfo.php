<?php
include('connection.php');
 session_start();
 $id = $_GET["id"];
 $sql = "SELECT * FROM hotels where image='$id'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result)>0)  
   {
   	while($row = mysqli_fetch_assoc($result)) 
   	{
   		echo '<h1>'.$row["name"].'</h1>';
   		 echo '<img style="position:relative;" src="guide/uploads/'.$id.'" width="50%" height="400px" />';
   		 echo '<h2>'.$row["about"].'</h2>';
   	}
   }



?>