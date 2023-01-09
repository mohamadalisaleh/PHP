<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SkyNet</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylee.css" >
</head>
<?php
$con = mysqli_connect("localhost","root","")or die("ERROR CONNECTION");
mysqli_select_db($con,"user");
if(isset($_POST['sub'])){
	
	$email=$_POST['email'];
	$phone=$_POST['phone_number'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$_SESSION['email']=$email;
	if($password == $confirmpassword){
		$password = md5($password);
	$q1="insert into reg values('$email',$phone,'$password','$confirmpassword');";
	mysqli_query($con,$q1);
	echo'<div class="alert alert-success" role="alert">Well done! You successfully read this important alert message.
</div>';
}else{
	echo'<div class="alert alert-danger" role="alert">Oh snap! Change a few things up and try submitting again
</div>';
}

}

?>
<body>
<div class="box">
<h2>Register</h2>
<form method="post">
<div class="inputbox">
<label>Email</label>
<input type="text" name="email" required="" placeholder="email">
</div>
<div class="inputbox">
<label>Phone Number</label>
<input type="text" name="phone_number" required="" placeholder="phone number">
</div>
<div class="inputbox">
<label>password</label>
<input type="password" name="password" required="" placeholder="password"> 
</div>
<div class="inputbox">
<label>confirm password</label>
<input type="password" name="confirmpassword" required="" placeholder="confirm password">
</div>
<input type="submit" name="sub" value="Submit">
<br><br />
<a href="Login.php">Login</a>
</form>
</div>
</body>
</html>
