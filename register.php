<?php
	require 'DBConfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#bdc3c7">

<div id="main-wrapper">
		<center><h2>Registration Form</h2></center> 

	

	<form class="myform" action="register.php" method="post">
		<label><b>First:</label><br>
		<input name="firstname" type="text" class="inputvalues" placeholder="Type your First Name" required/><br>

		<label><b>Last:</label><br>
		<input name="lastname" type="text" class="inputvalues" placeholder="Type your Last Name" required/><br>

		<label><b>E-Mail:</label><br>
		<input name="useremail" type="email" class="inputvalues" placeholder="Type your E-Mail Address" required/><br>

		<label><b>Phone Number:</label><br>
		<input name="phnumber" type="number" class="inputvalues" placeholder="Type your Phone Number" required/><br>

		<label><b>Birthday:</label><br>
		<input name="birthday" type="date" class="inputvalues" placeholder="Type your Birthday" required/><br>

		<label><b>Gender:</label><br>
		<input type="radio" name="gender" value="m" > Male<br>
		<input type="radio" name="gender" value="f" > Female<br>


		<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
		<input type="button" id="back_btn" value="Back"/>
	</form>

	<?php
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$useremail = $_POST['useremail'];
			$phnumber = $_POST['phnumber'];
			$birthday = $_POST['birthday'];
			$gender = $_POST['gender'];

			global $db;
			$query="SELECT * FROM UsersAccount 
				   	 WHERE Email=:useremail";

			$query_run=$db->query($query);
			$num_rows = $query_run->fetchColumn();
			if($num_rows > 0)
			{
				//there is already a user with the same username
				echo '<script type="text/javascript"> alert("Email is already being used. Try another email.") </script>';
			}
			else {
				$query = "INSERT INTO UsersAccount
						  VALUES('$firstname','$lastname','$useremail','$phnumber','$birthday','$gender')";
				$query_run=$db->prepare($query);
				if($query_run == false)
				{
					echo '<script type="text/javascript"> alert("User Registered. Go to Login Page") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error!") </script>';
				}
			}

		}
	?>
</div>

</body>
</html>