<?php
require('connection.php');
 session_start();
 error_reporting(0);
 if(isset($_SESSION['user']))
 {
   echo $_SESSION['user'];
   echo '<br><a href="userpanel.php">HOME</a><br>';
  echo' <form action="comment.php" method="post">
  <input type="text" name="comment" placeholder="ADD COMMENTS HERE">
  <input type="submit" name="submit" >
 
     ';
     if(isset($_POST['submit']))
     {       $comment=$_POST['comment'];
             $a=$_SESSION['user'];
              $sql="SELECT * FROM users WHERE email='$a'";
              $result=mysqli_query($conn,$sql);
              if (mysqli_num_rows($result) > 0)  
            {
   	    while($row = mysqli_fetch_assoc($result))
              {  $id    = $row["id"];
                 echo $id;
               }
           }
              
              $sql="INSERT INTO comments(id,comment) VALUES('$id','$comment')";
              $result=mysqli_query($conn,$sql);
               $sql="SELECT * FROM comments WHERE id='$id'";
              $result=mysqli_query($conn,$sql);
              if (mysqli_num_rows($result) > 0)  
            {
   	    while($row = mysqli_fetch_assoc($result))
              {  $id    = $row["comment"];
                 echo '<br>';
                 echo $id;
               }
           }
             
             
 }
}
else
{
	header('Location:index.php');
}
?>