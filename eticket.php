<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<?php
include("connection.php");
error_reporting(0);

?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="eticketcss.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="select.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>

        <img class="logo"src="logo1.png"/>
		
		<a href="bookings.php"><img class="userlogo" src="userlogo.png"/></a>
		
		<?php
		$query="SELECT fname,lname from registration where email='{$_SESSION['email']}'";
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				
			while($row = mysqli_fetch_assoc($result)) {
			echo "<a href='bookings.php' class='hyperlink'><p class='usertext'>". $row['fname']."&nbsp".$row['lname']."</p></a>";
			}
				}
		?>
			<a href="logout.php" class="hyperlink"><p class="logouttext">Logout</p></a>
	
		<image class="image" src="bg.jpg"></image>
 <div class="main">
        <div class="register">
            <h2>E-Ticket Form</h2>
			<form id="register" method="post">
            <label>From:</label><br />
			<select name="splace" id="splace" required>
			<option disabled selected>-- Starting Place --</option>
			<?php
			$sql = "SELECT `Starting Place` FROM train";
			$result = mysqli_query($conn , $sql);
			while($row = mysqli_fetch_array($result)){
			echo "<option value='". $row['Starting Place'] ."'>" .$row['Starting Place'] ."</option>";
			}
			?>
			</select> <br/>
			<label>To:</label><br />
			<select name="dplace" id="dplace">
			<option disabled selected>-- Destination Place --</option>
			</select> 
			<br/><br />
			<label>No. of seats:</label><br/>
            <input type="number" name="seats" id="name" min="1" max="20" required /><br/><br/>
			<label>Select day:</label><br/>
			<input name="day" type="date" id="name" required />
		    <?php
			$id=uniqid();
			echo "<input type='hidden' value='".$id."' name='id' id='name' />
			<br/><br/>
			<input type='submit' value='Submit' name='submit' id='submit' /> <br/>";
				include("connection.php");
				error_reporting(0);
				if($_SERVER['REQUEST_METHOD'] == "POST")
				{
						$_SESSION['id']=$_POST['id'];
						$splace=$_POST['splace'];
						$dplace=$_POST['dplace'];
						$_SESSION['seats']=$_POST['seats'];
						$day=$_POST['day'];
						
				$query="INSERT INTO eticket (useremail,ID,splace,dplace,seats,selectedday) VALUES ('{$_SESSION['email']}','{$_SESSION['id']}','$splace', '$dplace','{$_SESSION['seats']}','$day')";
				
				if (mysqli_query($conn, $query)) {

				  header("location:ticket.php");
					} else {
				  echo "<label style='color:red;'>Booking failed!</label>";
					}

				}
				
				mysqli_close($conn);
				?>
           </form>
        
    </div>
</div>
		<!--Footer-->
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