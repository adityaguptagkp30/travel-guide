<?php 
error_reporting(0);
require('edithotels.php');
  if (isset($_SESSION['admin'])) 
  {
  		    echo'<center><form action="hinsert.php" method="post" enctype="multipart/form-data">';
          echo '<table>';
           echo '<tr><td><input type="text" name="place" placeholder="place" ></td></tr>';
            echo '<tr><td><input type="text" name="name" placeholder="name" ></td></tr>';
            echo '<tr><td><input type="text" name="address" placeholder="address" ></td></tr>';
            echo '<tr><td><input type="text" name="contact" placeholder="contact" ></td></tr>';
            echo '<tr><td><textarea name="about" placeholder="ABOUT" rows="10" cols="30"></textarea></td></tr>';
            echo '<tr><td> <input type="file" name="file" ></td></tr>';
            echo '<tr><td><input type="submit" name="submit" value="submit"></td></tr></table>';
            echo'</form></center>';
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
              $place=$_POST['place'];
              $name1=$_POST['name'];
              $address=$_POST['address'];
              $contact=$_POST['contact'];
              $about=$_POST['about']; 
                $name=$_FILES['file']['name'];
               $tmp_name=$_FILES['file']['tmp_name'];
               if(empty($place)||empty($name1)||empty($address)||empty($contact)||empty($about)||empty($name))
               {
                $resp="<font color='red'><center>Please fill in all fields</center>";
                echo $resp;
               }
            
else
{          
              $sql = "SELECT `id` FROM `place` where `place`='$place'";
              $resul = mysqli_query($conn, $sql);
                       
          

if (mysqli_num_rows($resul) > 0) 
                {
               $row = mysqli_fetch_assoc($resul);
                 $id=$row["id"];
//echo $id;
                 $sql="SELECT * FROM hotels where id='$id' AND name='$name1' AND address='$address'";
                 $result=mysqli_query($conn,$sql);

                // output data of each row
                  if(mysqli_num_rows($result)>0)
                  {
                  echo "<center>ALREADY EXIST</center>";
                  }
                  else
                  {

                   $sql="INSERT INTO hotels (id,name,address,contact,image,about) VALUES('$id','$name1','$address','$contact','$name','$about');";
                   $result=mysqli_query($conn,$sql);
                    $location='uploads/';
                          if(move_uploaded_file($tmp_name,$location.$name))
                       { 
      
                            echo "<font color='green'><center>INSERTED</center>";
                          }
                  }
             
                }
                else
                {
             


                  $query="INSERT INTO place (place) 
                  VALUES ('$place');";

                $result=mysqli_query($conn,$query);
                $sql = "SELECT `id` FROM `place` where `place`='$place'";
                  $resul = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_assoc($resul);
                  $id=$row["id"];

                  // output data of each row
                  $sql="INSERT INTO hotels (id,name,address,contact,image,about) VALUES('$id','$name1','$address','$contact','$name','$about');";
                  $result=mysqli_query($conn,$sql);
                   $location='uploads/';
                          if(move_uploaded_file($tmp_name,$location.$name))
                       { 
      
                            
                            echo "<font color='green'><center>INSERTED</center>";
                          }
               

             
                }

 }                    }   }
        else
        {
            	header('Location:../index.php');
        }
?>
