<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	


	<form  method="POST" action="logCheck.php">
	<fieldset>
		<legend><h1>REGISTRATION</h1></legend>
	Id<br/><input type="number" name="uid" value=""/><br/>
	Password<br/><input type="password" name="password" value=""/><br/>
	Confirm Password<br/><input type="password" name="" value=""/><br/>
	Name<br/><input type="text" name="" value="" size="10" /><br/>
	User Type<br/><br/><input type="radio" name="" value="">User 
				<input type="radio" name="" value="">Admin<br/><br/>
				<input type="submit" name="" value="Sign Up"><a href="signin.php">   Sign In</a>
				
	
	
	
	
	</fieldset>
	
	</form>
</body>
</html>