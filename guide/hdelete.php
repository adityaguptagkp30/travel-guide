<?php 
// session_start();
require('../connection.php');
require('edithotels.php');

if (isset($_SESSION['admin']))
  {

  $query="SELECT * FROM hotels ";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total!=0)
{
  
  echo'<table style="margin-left:auto; margin-right:auto;" >
  <tr>
  <th>place id</th>
  <th>name</th>
  <th>address</th>
  <th>contact</th>
  <th ></th>
  </tr>';
  

  while($result =mysqli_fetch_assoc($run_query))
{
  echo'<tr><center>
            <td>'.$result["id"].'</td>
             <td>'.$result["name"].'</td>
               <td>'.$result["address"].'</td>
                 <td>'.$result["contact"].'</td> 
        <td><a href="hdeletep.php?id='.$result["name"].'&& address='.$result["address"].'">DELETE</a></td>';
       // echo' <td><a href="hupdate.php?name='.$result["name"].'&& address='.$result["address"].'">UPDATE</a></td>';
  echo ' </center> </tr>';
  
  
}
echo '</table>';

}
  }
  else{
    header('Location:../index.php');
        }

  ?>
