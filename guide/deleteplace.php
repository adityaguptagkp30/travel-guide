
<?php 
// session_start();
require('../connection.php');
require('adminpanel.php');

if (isset($_SESSION['admin']))
  {

	echo 'Welcome '.$_SESSION['admin'];
	echo '<a href="update.php">add PLACE</a>';
	$query="SELECT * FROM place ";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total!=0)
{
	?>
	<table>
	<tr>
	<th>place</th>
	<th colspan=2></th>
	</tr>
	
<?php
	while($result =mysqli_fetch_assoc($run_query))
{
	echo'<tr>
	          <td>'.$result["place"].'</td>
	          <td><a href="editp.php?place='.$result["place"].'&& id='.$result["id"]. '">EDIT</a></td>
			  <td><a href="deletep.php?id='.$result["id"].'">DELETE</a></td>
	   </tr>';
	
	
}
}
  }
	else{
		header('Location:../index.php');
        }

	?>
