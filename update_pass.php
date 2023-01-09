
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style> 
input[type=text] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px;
  border-radius: 4px;
}
input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px;
  border-radius: 4px;
}
</style>
<style>
.submit {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.submit1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.submit1:hover {
  background-color: #4CAF50;
  color: white;
}

.submit2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.submit2:hover {
  background-color: #008CBA;
  color: white;
}

.submit3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.submit3:hover {
  background-color: #f44336;
  color: white;
}

.submit4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.submit4:hover {background-color: #e7e7e7;}

.submit5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.submit5:hover {
  background-color: #555555;
  color: white;
}
</style>
<?php


$con = mysqli_connect("localhost","root","")or die("ERROR CONNECTION");
mysqli_select_db($con,"user");
if(isset($_POST['sub'])){
	
	$email = $_POST['email'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
		if($password == $confirmpassword){
		$password = md5($password);
	$q1 = "update reg 
	set password = '$password' , confirmpassword = '$confirmpassword'
	where email = '$email'";
	
	mysqli_query($con,$q1);
}
}
?>
</head>
<body background="yyy.jpg" >
<title>SkyNet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<nav  class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style=" display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
 
</nav>



 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>SkyNet</a>

    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">More <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block"> 
        <a href="t3.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
       
    </div>

  </div>
 </div>
	

    <center>
<form method="post">
<br><br>
<div class="container">
<h3><span class="label label-default">Email</span></h3><input type="text" name="email" />
<h3><span class="label label-default">New Password</span></h3><input type="password" name="password" />
<h3><span class="label label-default">Confirm</span></h3><input type="password" name="confirmpassword" />


</div>

<input type="submit" class="submit submit1" name="sub" value="insert">
</form>
</center>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>