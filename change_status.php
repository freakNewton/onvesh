<?php
	session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		$con=mysqli_connect("localhost","id4639390_psp","onvesh","id4639390_onveshdb") or die("Unable to connect");
		$ucode=$_SESSION['unique'];
		$id=$_SESSION['type'];
		if($id!="core")
			$query=mysqli_query($con,"update event_reg set played_status=1 where ucode='$ucode'");
		else
			$query=mysqli_query($con,"update event_reg set paid_status=1 where ucode='$ucode'");
		if($query){
			include 'nav_login.html';
			
		}
		else
			echo (mysqli_error($con));
	}
	else
		include 'login.html';
?>
