<!DOCTYPE html>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta  name="viewport" content="width=device-width , initial-scale=1" charset="utf-8" />
 <meta charset="utf-8" />
    <title>Registration/Sign in</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="signincss.css">
</head>
<body>
<!-- Navigation bar -->    
<div class="topnav" id="myTopnav">
  <a href="AboutUs.html" >About</a>
  <a href="login.php">E-Tickets</a>
  <a href="registration.php"class="active">Sign up</a>
  <a href="index.php">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
  </a>
  
</div>
<!-- logo -->
<img class="logo"src="logo1.png"/>

<script type="text/javascript" src="nav.js"> </script>
       <!-- Background image -->
        <image class="image" src="bg.jpg" ></image>
     <!-- REGISTRATION FORM --> 
     <div class="main">
    
	<div class="register">
    <h2>Registration Form</h2>
    <form id="register"  method="POST" autocomplete="off">
        <label>Fisrt Name:</label><br />
        <input type="text" name="fname" id="name" placeholder="Enter your first name" required /> <br /><br />

        <label>Last Name:</label><br />
        <input type="text" name="lname" id="name" placeholder="Enter your last name"required  /> <br /><br />
        <label>Age:</label><br />
        <input type="number" name="age" id="name" placeholder="Enter your age" min="18" max="200" required /> <br /><br />
        <label>CNIC:</label><br />
        <input type="tel" name="cnic" id="name" placeholder="xxxxx-xxxxxxx-x" pattern="[0-9][0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9][0-9][0-9][0-9]-[0-9]" required /> <br /><br />
        <label>Gender:</label><br /> &nbsp; &nbsp; &nbsp;
        <input type="radio" name="gender" id="male" value="Male" required /> &nbsp Male &nbsp;
        <input type="radio" name="gender" id="female" value="Female" /> &nbsp;
        <span id="female">Female</span> &nbsp;
        <input type="radio" name="gender" id="other" value="Other" /> &nbsp;
        <span id="other">Other</span> &nbsp;
        <br /><br />
        <label>Phone:</label><br />
        <input type="tel" name="phone" id="name" placeholder="Enter your mobile number" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required /> <br /><br />
        <label>Email:</label><br />
        <input type="email" name="email" id="name"placeholder="Enter your email address" required  /> <br /><br />
        <label>Password:</label><br />
        <input type="password" name="pass" id="name"placeholder="Enter your password" max="20" required /> <br /><br />
        <input type="reset" value="Reset" name="reset" id="reset" />
        <input type="submit" value="Submit" name="submit" id="submit" /> <br /><br />
        
         <label> <a href="login.php " class="text">Sign in </a>  If you are already registered <br/></label>
        
		 <?php
		 include("insert.php");
		
		 ?>
		
		 </form>
		</div>
		  </div>
		<!-- Footer -->

		<footer class="footer-distributed">

			<div class="footer-left">
          <img src="logo.png">
				<h3>Pakistan Railways</h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					|
					<a href="registration.php">Registration</a>
					|
					<a href="login.php">E-tickets</a>
					|
					<a href="AboutUs.html">About</a>
				</p>

				<p class="footer-company-name">© Copyright 2009-19 Directorate of Information Technology Pakistan Railways. All Rights Reserved.</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Red Zone,Islamabad Capital Territory, Pakistan</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 22-27782183</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:contact@railways.gov.pk">contact@railways.gov.pk</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					 The Ministry of Railways (MoR) is a Cabinet-level Ministry of Government of Pakistan, tasked and primarily responsible for planning, administrating, and establishing the passengers locomotive services, regulating the railway companies, industries and associated organization. Overall, the control of Pakistan Railways (PR), policy and development of railway network are also managed and administrated by Ministry of Railways.
            </p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
					<a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>

</body>
</html>
 