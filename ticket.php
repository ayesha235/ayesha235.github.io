<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Roboto Mono' rel='stylesheet'>
	<link rel="stylesheet" href="ticketcss.css">
</head>

<body>
	<div class="main"><button onclick="window.print()">Print</button>
	<a href="eticket.php" class="hyperlink"><p class="back"><span>&#8656;</span>Back</p></a>
		<p class="heading"><strong>Pakistan Railways E-Ticket</strong> </p> 

		<image class="image "src="logo1.png">
		<?php
			include("connection.php");
			error_reporting(0);
			$query="SELECT fname,lname,cnic,details,phone,email,gender,id,splace,dplace,seats,selectedday from registration,eticket where email='{$_SESSION['email']}' && useremail='{$_SESSION['email']}' && ID='{$_SESSION['id']}'";
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				
			while($row = mysqli_fetch_assoc($result)) {
			echo "<p class='text'>Name = " . $row['fname']. "  " . $row['lname']. "&nbsp&nbsp&nbsp" ."CNIC = ".$row['cnic']
			." &nbsp&nbsp&nbsp"."Dated = ".$row['details']." &nbsp"."Code = ".$row['id']."<br/><br/>"
			."Phone Number = ".$row['phone']."&nbsp&nbsp &nbsp"."Email = ".$row['email']."&nbsp&nbsp &nbsp"."Gender = ".$row['gender']."<br/><br/></p>".
			"<div class='container'><p class='text2'>Starting place = " . $row['splace']."&nbsp&nbsp &nbsp"."Destination Place = ".$row['dplace']."<br/><br/>".
			"Seats booked = ".$row['seats']." &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp "."Day = ".$row['selectedday']."</p>";
		  }
			}

		$query="SELECT `Train Name`,fare,time from train where `Starting Place`=(SELECT splace from eticket where useremail='{$_SESSION['email']}' && id='{$_SESSION['id']}') && `Destination Place`=(SELECT dplace from eticket where useremail='{$_SESSION['email']}' && id='{$_SESSION['id']}')";
		$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) {
				
				// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$total_fare=$row['fare']*$_SESSION['seats'];
				 echo "<p class='text2'>Train Name = " . $row['Train Name']."&nbsp &nbsp&nbsp "."Time = ".$row['time'].
				 "&nbsp &nbsp &nbsp "."Total Fare in Rupees = ".$total_fare."<br/><br/></p>";
				
					}
			}
			else
			{
				echo mysqli_error($conn);
			}
			
		?>
		</div>
	</div>

</body>
</html>