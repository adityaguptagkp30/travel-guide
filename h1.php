<?php
  session_start();
  require('connection.php');
  include('place1.php');
  //include('info.php');
  if(isset($_SESSION['user'])||isset($_SESSION['admin']))
  {
	echo "<h1>Welcome: ".$_SESSION['user']."</h1>";

  }
  else
  {
  	header('Location:index.php');
  }
  $a=$_SESSION['id'];

   echo "WELCOME<br>";
   $sql = "SELECT * FROM hotels where id=$a";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0)  
   {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        {
     //      $id=$row["name"];
    	// $a=$row["image"];
    	echo '<a style="height:200px;width:40%;float:left;border:2px solid black;margin:2%;" href="hinfo.php?id=' . $row["image"] . '"><div style="height:200px;width:100%;float:left;border:2px solid black;margin:2%;">';
        echo  " <h1>  " . $row["name"]. "</h1><br><h3> " . $row["address"]. "</h3><br><br>";
       $image = $row['image']; 
        // echo $a;
        // echo '<img style="position:relative;" src="guide/uploads/'.$a.'" width="100%" height="200px" />';
        echo '</div></a>';
        }

    } 
    else 
    {
    echo "0 results";
    }


 ?>