<?php
   session_start();
      
    
    ?>
<html>
<head>
	<title>TRAVEL GUIDE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body{
		background: url(./campaign-bg.jpg);
	background-position: right;
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:fixed;
	background-size: cover;
	color:black;
	height: 100vh;
	}
	a{
		text-decoration: none;
		display: inline-block;
		padding: 2px;
        box-sizing: border-box;

	}
</style>
</head>
<body>
	<div class="navbar">
		<div class="title"><h3>GUIDE PANEL</h3> </div>

		<div class="nav-link"><a href="#">
			<?php if(isset($_SESSION['admin']))
			  {
				echo "<h1>Welcome: admin</h1>";
              }
               // <input type="text" placeholder="place" >
              

			  else
			  {
			  	header('Location:index.php');
			  }
			?>
		</a></div>
		<div class="nav-link logIn"><a href="../logout1.php"><h3>Log Out</h3></a> </div>
		<form action="adminpanel.php" method="post">
		<a href="update.php">add PLACE</a>
		<a href="deleteplace.php">delete PLACE</a>
		<a href="edithotels.php">HOTELS</a>
		<a href="edittemples.php">TEMPLES</a>
		<a href="viewplaces.php">VIEW PLACES</a>
		</form>
	</div>
</body>
</html>