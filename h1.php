<?php
  session_start();
  error_reporting(0);
  require('connection.php');
  //include('place1.php');
  //include('info.php');
  if(isset($_SESSION['user']))
  {
	echo "<h1>Welcome: ".$_SESSION['user']."</h1>";

  }
  else
  {
  	header('Location:index.php');
  }
  $a=$_SESSION['id'];

   echo "<center><h1>HOTELS</h1></center><br>";
   $sql = "SELECT * FROM hotels where id=$a";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0)  
   {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        {
     //      $id=$row["name"];
    	// $a=$row["image"];
    	echo '<div style="width:100%;height:300px;"><a style="height:300px;width:48%;float:left;border:2px solid black;" href="hinfo.php?id=' . $row["image"] . '"><div style="height:300px;width:100%;float:left;border:2px solid black;">';
        echo  " <center><h1>  " . $row["name"]. "</h1></center><br><br>";
       $image = $row['image']; 
        // echo $a;
       echo '<img style="position:relative;float:right;" src="guide/uploads/'.$image.'" width="100%" height="60%" />';
        // echo '<img style="position:relative;" src="guide/uploads/'.$a.'" width="100%" height="200px" />';
        echo '</div></a></div>';
        }

    } 
    else 
    {
    echo "<center><h2><font color='red'>OOPs No Hotels Found</h2></center>";
    }


 ?>