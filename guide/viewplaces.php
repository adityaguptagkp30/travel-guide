
<?php
   session_start();
   require('adminpanel.php');
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
    $i=0;
    while($row = mysqli_fetch_assoc($result)) 
    { $_SESSION['id']=$row["place"];
    	$a[$i]=$row["place"];
    	 $_SESSION['place'][$i]=$a[$i];
    echo '	<form action="" method="POST">';
   echo '<input type="submit" value="'.$a[$i].'" name="mybutton">';
  echo '</form>';

 if (isset($_POST["mybutton"]))
   { 
       $_SESSION['name']=$_POST["mybutton"];
       header('Location:placess.php');
   }
  

      $i++;

    	// echo '<div style="height:400px;width:40%;float:left;border:2px solid black;margin:2%;">';
     //    echo  " <h1>  " . $row["name"]. "</h1><br><h3> " . $row["address"]. "</h3><br><br>";
     //     echo '<img style="position:relative;" src="images/'.$a.'.jpg" width="100%" height="300px" />';
     //    echo '</div>';
     }
   //    if (isset($_POST["mybutton"]))
   // {
   //     $_SESSION['name']=$_POST["mybutton"];
   //     header('Location:placess.php');
   // }
   } else 
   {
    echo "0 results";
   }


 ?>
