<!DOCTYPE html>
<?php
include("connection.php");
error_reporting(0);
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta  name="viewport" content="width=device-width , initial-scale=1" charset="utf-8" />
    <title>Train Reservation System</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="homecss.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	
	
</head>

<body>
 <!-- Navigation bar -->   
<div class="topnav" id="myTopnav">
  <a href="AboutUs.html" >About</a>
  <a href="login.php">E-Tickets</a>
  <a href="registration.php">Sign up</a>
  <a href="index.php"class="active">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
  </a>
  
</div>
<script type="text/javascript" src="nav.js"></script>
    <!-- background image -->
    <image class="image" src="bg.jpg" ></image>
      
    <!-- logo --> 
    <img class="logo"src="logo1.png"/>
	
    
    <div id="flip">
    
     <p class="glow">Train Details</p>
    </div>
          
    <div id="panel" style="overflow:auto;">
 
		 <script  type="text/javascript" src="slidetoggle.js"></script>
		 <input type="text" id="myInput" onkeyup="myFunction2()" placeholder="Search by Train Name" title="Type in a name">
											<!-- Table --> 
				<?php
				include("tablephp.php");
				?>
	</div>
	<!-- Search Function --> 	
	<script type="text/javascript" src="search.js"> </script> 
  <!--Map -->
    <p class="text"><strong>VIEW STATIONS/ROUTES ON MAP</strong></p>
        <image src="pakistan.jpeg" class="map"data-aos="flip-right"/>
		<div class="details" data-aos="slide-right">
		        <image src="boarding.jpg" class="boarding" />
				<p><h1><strong>Boarding the train</strong></h1>
				Some trains have information written in English on their exteriors, but many trains only have information in Urdu. If you’re unsure about which train to get on, just ask. A station employee, security person, or friendly local will be sure to help you get on the right train.

				At major stations, trains will stop for an extended period of time (anywhere from 20 minutes to an hour). Just keep an ear open for the train whistle, signaling it’s time to go.

				At minor stations, however, the train will only stop for a few minutes, enough time to unload old passengers and bring on the new.</p>
		</div><br/>
		<div class="details" data-aos="slide-right">
		        <image src="safety.jpg" class="boarding" />
				<p><h1><strong>Safety on the train</strong></h1>
				Guards/train superintendents are equipped with first aid boxes. The front line staffs are also trained to administer first aid to sick persons. In case of any medical emergency, passenger can approach the travelling ticket examiner/train superintendent who will try to arrange relief through on board facilities and try to locate doctors among passengers of train, mentioned Indian Railways.
				</p>
				</div><br/>
				<div class="details" data-aos="slide-right">
		        <image src="food.jpg" class="boarding" />
				<p><h1><strong>Food services in train</strong></h1>
				 Catering is also arranged in trains where this facility is not available. Passengers can contact the train conductors/coach attendants or other authorised catering staff of Railway for availing the catering service. Most important stations also have vegetarian and non-vegetarian refreshment rooms and light refreshment.
				 You can purchase snacks and soft drinks as well.There is a water dispenser in each carriage.
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
					<a href="https://www.facebook.com/" ><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
					<a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>

  <script type="text/javascript" src="animation.js"></script>
</body>
</html>