<?php

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

	

	<form class="myform" action="index.php" method="post">
		<label><b>First:</label><br>
		<input type="text" class="inputvalues" placeholder="Type your First Name"/><br>

		<label><b>Last:</label><br>
		<input type="text" class="inputvalues" placeholder="Type your Last Name"/><br>

		<label><b>E-Mail:</label><br>
		<input type="email" class="inputvalues" placeholder="Type your E-Mail Address"/><br>

		<label><b>Phone Number:</label><br>
		<input type="number" class="inputvalues" placeholder="Type your Phone Number"/><br>

		<label><b>Birthday:</label><br>
		<input type="date" class="inputvalues" placeholder="Type your Birthday"/><br>

		<label><b>Gender:</label><br>
		<input type="radio" name="gender" value="m"> Male<br>
		<input type="radio" name="gender" value="f"> Female<br>


		<input type="submit" id="signup_btn" value="Sign Up"/><br>
		<input type="button" id="back_btn" value="Back"/>
	</form>
</div>

</body>
</html>