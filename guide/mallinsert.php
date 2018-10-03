<?php 
require('editmalls.php');
  if (isset($_SESSION['admin'])) 
  {
  		    echo'<form action="mallinsert.php" method="post" enctype="multipart/form-data">';
          echo '<table style="margin-left:auto;margin-right:auto;">';
           echo '<tr><td><input type="text" name="place" placeholder="place" required=""></td></tr>';
            echo '<tr><td><input type="text" name="name" placeholder="name" required=""></td></tr>';
            echo '<tr><td><input type="text" name="address" placeholder="address" required=""></td></tr>';
            echo '<tr><td><input type="text" name="contact" placeholder="contact" required=""></td></tr>';
            echo '<tr><td><textarea name="about" placeholder="ABOUT" rows="10" cols="30"></textarea></td></tr>';
            echo '<tr><td> <input type="file" name="file" ></td></tr>';
            echo '<tr><td><input type="submit" name="submit" value="submit"></td></tr></table>';
            echo'</form>';
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
              $place=$_POST['place'];
              $name1=$_POST['name'];
              $address=$_POST['address'];
              $contact=$_POST['contact'];
              $about=$_POST['about']; 
                $name=$_FILES['file']['name'];
               $tmp_name=$_FILES['file']['tmp_name'];
              $sql = "SELECT `id` FROM `malls` where `place`='$place'";
              $resul = mysqli_query($conn, $sql);




if (mysqli_num_rows($resul) > 0) 
                {
               $row = mysqli_fetch_assoc($resul);
                 $id=$row["id"];
//echo $id;
                 $sql="SELECT * FROM malls where id='$id' AND name='$name1' AND address='$address'";
                 $result=mysqli_query($conn,$sql);

                // output data of each row
                  if(mysqli_num_rows($result)>0)
                  {
                  echo "ALREADY EXIST";
                  }
                  else
                  {

                   $sql="INSERT INTO malls (id,name,address,contact,image,about) VALUES('$id','$name1','$address','$contact','$name','$about');";
                   $result=mysqli_query($conn,$sql);
                    $location='uploads/';
                          if(move_uploaded_file($tmp_name,$location.$name))
                       { 
      
                            echo "UPLOADEd";
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
                  $sql="INSERT INTO malls (id,name,address,contact,image,about) VALUES('$id','$name1','$address','$contact','$name','$about');";
                  $result=mysqli_query($conn,$sql);
                   $location='uploads/';
                          if(move_uploaded_file($tmp_name,$location.$name))
                       { 
      
                            echo "UPLOADEd";
                          }
               

             
                }

                     }   }
        else
        {
            	header('Location:../index.php');
        }
?>
