<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","travelguide");

?>
<html>
<head></head>
<body>

<form action="" method="GET">
<?php $name= $_GET['name']; 
      $email=$_GET['email'];
      $sql="SELECT id FROM users WHERE email='$email'";
      $result=mysqli_query($conn,$sql);
      while($result =mysqli_fetch_assoc($result))
      {
      	$id=$result['id'];
      }


      $sql="SELECT * FROM comments WHERE id='$id'";
      $result=mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0)  
      {
      while($row =mysqli_fetch_assoc($result))
{	echo "<br>";
	echo $row['comment'];

	   }      }
	   else
	   {
	   	echo "NO COMMENTS FOUND";
	   }
	         
?>




</body>
</html>
