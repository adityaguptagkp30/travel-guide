<?php
$conn=mysqli_connect("localhost","root","","web");
?>
<html>
<head></head>
<body>
<?php
if(isset($_POST['submit']))
{
	
$firstname=$_POST['firstname'];    
$email=$_POST['email'];     
$hometown=$_POST['hometown'];
$gender=$_POST['gender'];
$password=$_POST['password'];  
$password=md5($password);   
$query="INSERT INTO reg(firstname,email,hometown,gender,password)VALUES('$firstname','$email','$hometown','$gender','$password')";
$run=mysqli_query($conn,$query);
if($run){
    require './phpm/helo.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 4;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shivanshu5416jaiswal@gmail.com';                 // SMTP username
$mail->Password = 'shiv1357';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('shivanshu5416jaiswal@gmail.com', 'TRAVEl');
$mail->addAddress($email);     // Add a recipient              // Name is optional
//$mail->addReplyTo(EMAIL);
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent please verify your email:';
    echo $email;
}
echo"data insert sucessful";
    
}
else{
echo"error:".mysqli_error($conn);
}
}
?>
<center><h1>*****travel guide for those who love travelling*****</h1></center>
<center><h3>If already registered</h3><a href="login.php"> <img src="images/user_login.jpg"></a></center>
<div class="form">
<form action="user_registration.php" method="POST">
<center>
<table>
<tr>
<th></th>
<th>#registration form#</th>
</tr>
<tr>
<td>first name</td>
<td><input type="text" name="firstname" placeholder="firstname" required=""></td> 
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" placeholder="emailid " required=""></td> 
</tr>
<tr>
<td>hometown</td>
<td><input type="text" name="hometown" placeholder="hometown" required=""></td> 
</tr>
<tr>
<td>gender</td>
<td><input type="text" name="gender"placeholder="sex" required=""></td> 
</tr>

<tr>
<td> password</td>
<td><input type="password" name="password"placeholder="hidden password" required=""></td> 
</tr>

<tr>
<td></td>
<td><input type="submit" value="submit" name="submit"></td> 
</tr>
</table>
</center>
</form>
</div>
</body>
</html>
