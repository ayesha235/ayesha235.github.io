<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Roboto Mono' rel='stylesheet'>
		<link rel="stylesheet" href="bookingcss.css">
</head>
<body>
	<a href="eticket.php" class="hyperlink"><p class="back"><span>&#8656;</span>Back</p></a>
	<image class="image" src="bg.jpg"/>
	<h1 class="heading"><em>History</em></h1>
	 <div class="box">
		<?php
			include("connection.php");
			error_reporting(0);
			$query="SELECT fname,lname,cnic,phone,email,gender from registration where email='{$_SESSION['email']}'";
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				
			while($row = mysqli_fetch_assoc($result)) {
			echo "<h3 class='heading'><p >Name = " . $row['fname']. "  " . $row['lname']. "&nbsp&nbsp&nbsp" ."CNIC = ".$row['cnic']
			." &nbsp&nbsp&nbsp&nbsp"."<br/><br/>"
			."Phone Number = ".$row['phone']."&nbsp&nbsp &nbsp"."Email = ".$row['email']."&nbsp&nbsp &nbsp"."Gender = ".$row['gender']."<br/><br/></p><hr></h3>";
			break;
				}
			}
			
			$query="SELECT id,details,splace,dplace,seats,selectedday from eticket where useremail='{$_SESSION['email']}'";
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				
			while($row = mysqli_fetch_assoc($result)) {
			echo 
			"<div ><p class='text'>Dated = ".$row['details']."&nbsp &nbsp  &nbsp"."Code = ".$row['id']." &nbsp &nbsp &nbsp &nbsp"."Starting place = " . $row['splace']."&nbsp&nbsp &nbsp"."Destination Place = ".$row['dplace']."<br/><br/>".
			"Seats booked = ".$row['seats']." &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp "."Day = ".$row['selectedday']."</p><br/><br/>";
		  }
			}
		
		
			else
			{
				echo mysqli_error($conn);
			}
			
		?>
		<hr>
		</div>
		</div>
	</div>

</body>
</html>