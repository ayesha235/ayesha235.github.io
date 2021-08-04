<?php
		if($_SERVER['REQUEST_METHOD'] == "POST")
		$query2="SELECT * from registration";
		$result=mysqli_query($conn,$query2);
		$user_data = mysqli_fetch_assoc($result)
		if($userdata['email']==$email){
			echo "Already registered on this email address";
		}
		else{
			echo"Registration successful";
		}
		mysqli_close($conn);
		?>