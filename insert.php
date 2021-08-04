
<?php
include("connection.php");
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$age=$_POST['age'];
		$cnic=$_POST['cnic'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
$query="INSERT INTO registration (fname, lname, age,cnic,gender,phone,email,pass) VALUES ('$fname', '$lname','$age','$cnic','$gender','$phone', '$email','$pass')";

if (mysqli_query($conn, $query)) {
				  echo "<label style='color:green;'>Registration successful!</label>";
					}
					else {
				  echo "<label style='color:red;'>Error: "  . mysqli_error($conn)."</label>";
					}

				}
				mysqli_close($conn);

?>
