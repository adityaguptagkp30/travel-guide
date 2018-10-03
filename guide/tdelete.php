<?php 
// session_start();
require('../connection.php');
require('edittemples.php');

if (isset($_SESSION['admin']))
  {

 
  $query="SELECT * FROM temples ";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total!=0)
{
  ?>
  <table style="margin-left:auto; margin-right:auto;">
  <tr>
  <th>place id</th>
  <th>name</th>
  <th>address</th>
  <th>contact</th>
  <th ></th>
  </tr>
  
<?php
  while($result =mysqli_fetch_assoc($run_query))
{
  echo'<tr>
            <td>'.$result["id"].'</td>
             <td>'.$result["name"].'</td>
               <td>'.$result["address"].'</td>
                 <td>'.$result["contact"].'</td> 
        <td><a href="tdeletep.php?id='.$result["name"].'">DELETE</a></td>
     </tr>';
  
  
}
}
  }
  else{
    header('Location:../index.php');
        }

  ?>
