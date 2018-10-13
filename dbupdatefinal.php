<?php
	session_start();
	$con=mysqli_connect("localhost","id","password","dbname");
	$enrollment=$_SESSION['enr1'];
	$name=$_SESSION['uname'];
	$unique=$_SESSION['ucode'];
	$phone=$_SESSION['phone'];
	$branch=$_SESSION['branch'];
	$year=$_SESSION['year'];
	$ename=$_SESSION['event_name'];
	$paid=0;
	$played=0;
	
	$query_update=mysqli_query($con,"INSERT into event_reg (enrollment,name,ucode,phone_no,branch,year,event_name,paid_status,played_status) values ($enrollment,'$name','$unique',$phone,'$branch','$year','$ename',$paid,$played);");
	
	if($query_update){
		$_SESSION=array();
		include 'index.html';
	}
	else{
		echo (mysqli_error($con));
		echo "error occured!!plzz try again later";
	}
?>
