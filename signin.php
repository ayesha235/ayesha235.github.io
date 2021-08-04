<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
		{
		//something was posted
		$username = $_POST['email'];
		$password = $_POST['pass'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from registration where email = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['pass'] === $password)
					{
						$_SESSION['email'] = $user_data['email'];
						echo  $_SESSION['email'];
						header("location:eticket.php");
						
						
					}
				}
			}
			
			echo "<label style='color:red;'>wrong username or password!</label>";
		}else
		{
			echo "<label style='color:red;'>wrong username or password!</label>";
		}
	}
	?>
