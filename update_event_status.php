<?php
	session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		$con = mysqli_connect("localhost","root","12345","onvesh")or die("Unable to connect");
		$enrollment=$_SESSION['enr_value'];
		$ename=$_SESSION['ename'];
		$dbupdate=mysqli_query($con,"update event_reg set played_status=1 where enrollment=$enrollment and event_name='$ename';");
		
		if($dbupdate)
			include 'nav_login.html';
		else{
			echo (mysqli_error($con));
			echo "error";
		}
	}
	else
		include 'login.html';
?>