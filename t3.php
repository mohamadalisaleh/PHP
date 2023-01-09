<?php  session_start();?>

<html>
<body>
<?php
if(isset($_SESSION['email']))
{
	session_unset($_SESSION['email']);
 	header('location: Login.php');
}

?>
</body>
</html>