
<?php
   session_start();
   require('connection.php');
   if(isset($_SESSION['admin']))
            {
				echo "<h1>Welcome: ".$_SESSION['admin']."</h1>";

			}
			  else
			{
			  	header('Location:index.php');
			}
			
       
   $sql = "SELECT * FROM place";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) 
   {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
    	$a=$row["place"];
    	 $_SESSION['place']=$row['place'];
    	echo '<a href="placess.php"><h1>'.$a .'</h1></a><br>';
    	// echo '<div style="height:400px;width:40%;float:left;border:2px solid black;margin:2%;">';
     //    echo  " <h1>  " . $row["name"]. "</h1><br><h3> " . $row["address"]. "</h3><br><br>";
     //     echo '<img style="position:relative;" src="images/'.$a.'.jpg" width="100%" height="300px" />';
     //    echo '</div>';
     }
   } else 
   {
    echo "0 results";
   }


 ?>
