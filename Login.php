<?php  session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document</title>

</head>
<?php
$con = mysqli_connect("localhost","root","")or die("ERROR CONNECTION");
mysqli_select_db($con,"db3");
if(isset($_POST['sub'])){
	
	$email=$_POST['email'];
	$password=$_POST['password'];

	$q1="select email,confirmpassword from reg where email='$email' and confirmpassword= '$password';";
	$q2=mysqli_query($con,$q1);
	if($q2['email']== $email && $q2['confirmpassword']== $password){
		header("location: http://www.google.com");
		}else{
		echo "Inavalid password or username";
	}
}
	?>
<body>
<div class="box">
<h2>Login</h2>
<form method="post">
<div class="inputbox">
<label>Email</label>
<input type="text" name="email" required="" placeholder="Email">
</div>
<div class="inputbox">
<label>password</label>
<input type="password" name="password" required="" placeholder="Password">
</div>
<input type="submit" name="sub" value="Submit">
</form>
</div>
</body>
</html>