<?php
$conn=mysqli_connect("localhost","root","","web");
?>
<html>
<head></head>
<body>
<?php
if(isset($_POST['submit'])&&($check==0))
{
	
$firstname=$_POST['firstname'];    
$email=$_POST['email']; 
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
        echo "\n *****valid email***** \n";
    
        else
            
            echo "\n *****invalid email***** \n";
$hometown=$_POST['hometown'];
$gender=$_POST['gender'];
$password=$_POST['password'];  
$password=md5($password);   
$query="INSERT INTO reg(firstname,email,hometown,gender,password)VALUES('$firstname','$email','$hometown','$gender','$password')";
$run=mysqli_query($conn,$query);
if($run){
    require './phpm/helo.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 2;                               // Enable verbose debug output
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
    echo "Message could not be sent.";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    
    echo "\n Message has been sent please verify your email:";
    echo $email;
} 
echo"\n data insert sucessful";
    
}
else{
echo"error:".mysqli_error($conn);
}
}
?>
<center><h1>*****travel guide for those who love travelling*****</h1></center>
<center><h3>If already registered</h3><a href="login.php"> <img src="images/user_login.jpg"></a></center>
<script>
    function validateForm() {
        var $check=0;
    var x1 = document.forms["myForm"]["password"].value;
        var x2 = document.forms["myForm"]["firstname"].value;
        var x3 = document.forms["myForm"]["email"].value;
        var x4 = document.forms["myForm"]["hometown"].value;
        var x5 = document.forms["myForm"]["gender"].value;
        
    if (x1 == "" && x2 == "" && x3 == "" && x4 == "" && x5 == "") {
        alert("all must be filled out");
        $check=1;
        return false;
    
    }
}
    </script>
    <div class="form">
<form name="myForm" action="user_registration.php" onsubmit="return validateForm()"  method="POST">
<center>
<table>
<tr>
<th></th>
<th>#registration form#</th>
</tr>
<tr>
<td>first name</td>
<td><input type="text" name="firstname" placeholder="firstname" ></td> 
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" placeholder="emailid " ></td> 
    
    
</tr>
<tr>
<td>hometown</td>
<td><input type="text" name="hometown" placeholder="hometown" ></td> 
</tr>
<tr>
<td>gender</td>
<td><input type="text" name="gender"placeholder="sex" ></td> 
</tr>

<tr>
<td> password</td>
<td><input type="password" name="password"placeholder="hidden password" ></td> 
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
