<?php  session_start();?>
<?php    
if(!isset($_SESSION['email']))
 { 
   header('location: Login.php');   
}
?>
<!DOCTYPE html>
<html>
<header>

<script src="JavaScript/jquery-2.1.4.min.js"></script>
<script src="JavaScript/index_page.js"></script>

<header/>
<title>SkyNet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
 
</nav>


<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>SkyNet</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>

  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">More <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
<a class="w3-bar-item w3-button" href="view.php"  role="button" data-toggle="tooltip" data-placement="right">View</a>
<a class="w3-bar-item w3-button" href="adv1.php"  role="button" data-toggle="tooltip" data-placement="right">Advertisement</a>
<a class="w3-bar-item w3-button" href="update_pass.php"  role="button" data-toggle="tooltip" data-placement="right">Setting</a>
<a class="w3-bar-item w3-button" href="Login.php"  role="button" data-toggle="tooltip" data-placement="right">Logout</a>
    </div>
  </div>
 </div>

  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>

  </div>
</div>
</br>

<!-- Image Header -->
<span class="w3-display-container w3-animate-opacity">
<img  src="net.jpg" alt="boat" height="870" style="width:100%;min-height:350px;max-height:635px;"></span>
<div class="w3-display-container w3-animate-opacity">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    
  </div>
</div>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">

</br></br></br></br>
<div class="w3-row"><br>
<div class="w3-third">
  <img src="abo.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Mohammad Ali Saleh</h3>
  <p>Computer Science</p>
   <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Jenin,PS</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> +972503921081</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> alisalehmohamad028@gmail.com</p>
</div>

<div class="w3-third">
  <img src="ibrahim.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ibrahim Dar Mosa</h3>
  <p>Computer Science</p>
   <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Jenin,PS</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> +970595195269</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> mosa1997.2@gmail.com</p>
</div>


<div class="w3-third">
  <img  src="amjd.jpg"  alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Dr.Amjed Rattrout</h3>
  <p>Supervisor</p>
   <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Jenin,PS</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> +970599714227</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> amjad.rattrout@aaup.edu</p>
</div>

</div>
</div>

</br></br>
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Arab American University</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Jenin,PS</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> +00970-4-2418888</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> info@aaup.edu</p>
    </div>
   
  </div>
</div>
</div>

<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
 
  <p>Powered by AAUP Team</p>

</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
