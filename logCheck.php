<?php
	session_start();
	
	 if(isset($_REQUEST['submitubmit'])){
		$uid = $_REQUEST['uid'];
		$password =  $_REQUEST['password'];
		
		
$myfile = fopen("user.txt", "w") or die("Unable to open file!");
$txt = ('$user.txt','a');
fwrite($txt, "anyhing");
$txtx = $password;
fwrite($myfile, $txtx);
fclose($myfile);
	 }else{
		//echo "invalid request! please login first!";
		header("location: login.php");
	}
?>