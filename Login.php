<?php
	/*connect to the database for giving query and fetching results*/
	$con=mysqli_connect("localhost","id4639390_psp","onvesh","id4639390_onveshdb");
	
	/*get the data from the html form by using the field names*/
	$username=$_POST["email"];
	$password=$_POST["password"];
	
	/*hash the password given by user for verification*/
	$userpass = password_hash($password,PASSWORD_DEFAULT);
	/*query to find the email and password from database*/
    $res1 = mysqli_query($con, "SELECT password FROM event_head WHERE email='$username'");
	if (mysqli_num_rows($res1) > 0){
		/*convert query result to array*/
		$row = mysqli_fetch_assoc($res1);
	
		/*convert array to string*/
		$string_pass = implode('', $row);
		
		/*IF true echo 'success',ELSE echo 'not found'*/
		
		//if(password_verify($password,$string_pass)) {
			
		if($string_pass==$password){
			//start the session for the particular user
			session_start();
			$res1 = mysqli_query($con, "SELECT type FROM event_head WHERE email='$username'");
			$row = mysqli_fetch_assoc($res1);
			$_SESSION['type']=$row["type"];
			$_SESSION['loggedin']=true;
			include 'nav_login.html';
		} 
	}
	else {
		include 'login.html';
		echo 'Oops! It looks like your username and/or password are incorrect. Please try again.';
		
    }
	echo (mysqli_error($con));
?>
