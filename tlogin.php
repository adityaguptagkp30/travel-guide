<?php
 require('login1.php');
 error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<title>PAGE2</title>
	<style type="text/css">
		
		body{
			background-image: url(IMG2.jpg);
			background-size: cover;
			margin: 0px;
		}
		.alba h1{
		font-family: 'Montserrat', sans-serif;
		font-size: 100px;
		color: white;
		margin: 0px;
		padding: 370px 0px 0px 50px;
		}

		.alba h4{
		font-family: 'Montserrat', sans-serif;
		font-size: 50px;
		color: white;
		margin: 0px;
		padding: 0px 0px 10px 210px;
		}

.container {
	position: absolute;
    padding: 16px;
    width:30%;
    border-radius: 30px;
    box-shadow: 5px 10px 8px #7CA5B8;
    margin-left: 810px;
    bottom: 8%;
    background-color: white;
    opacity: 0.9;
}
.container h1{

font-family: Arial, Helvetica, sans-serif;

}

.container p{

    font-family: Arial, Helvetica, sans-serif;
}

.container label{
    font-family: Arial, Helvetica, sans-serif;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.loginbtn {
    background-color: #14DCCF;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.loginbtn:hover {
    opacity: 1;
}

.registerbtn {
    background-color: #14DCCF;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}
/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
    width: 20%;
    float: right;
}


	</style>
</head>
<body>
	<div class="alba">
	 <h1>ALBATROSS</h1>
	 <h4>...the Travel Guide</h4>
	</div>
 			

					<form action="tlogin.php" method="post">
   <div class="container">
    <h1>Login</h1>
    <p>Kindly enter your login details.</p>
    <hr>
<?php        if (isset($_SESSION['user'])) {
    header('Location:userpanel.php');
}              if (isset($_SESSION['admin'])) {
    header('Location:guide/adminpanel.php');
}
				if(!empty($response))
				{
					echo "<div class='form-group'><span>".$response."</span> </div>";
				}
			?>
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <input type="submit" name="login" class="loginbtn" value="Login">
    <cenetr><a class="registerbtn" href="index.php" style="position: relative;width: 90%;
    padding: 16px 20px;
    margin-left: 0px;
    margin-top: 4px;
    text-align: center;
    text-decoration: none;
    color: white;
    display: inline-block;"> New to ALBATROSS? Sign Up.</a></cenetr>
  </div>
  </div>
</form>
</body>


</body>
</html>