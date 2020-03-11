<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	


	<form  method="POST" action="regcheck.php">
	<fieldset>
		<legend><h1>REGISTRATION</h1></legend>
	Id<br/><input type="number" name="uid" value="" required><br/>
	Password<br/><input type="password" name="password" value="" required><br/>
	Confirm Password<br/><input type="password" name="cpassword" value="" required><br/>
	Name<br/><input type="text" name="uname" value="" size="10" required><br/>
	User Type<br/><br/><input type="radio" name="utype" value="" required>User 
				<input type="radio" name="" value="">Admin<br/><br/>
				<input type="submit" name="submit" value="Sign Up"><a href="signin.php">   Sign In</a>
				
	
	
	
	
	</fieldset>
	
	</form>
</body>
</html>