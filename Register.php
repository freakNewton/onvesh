<?php
session_start();
$con=mysqli_connect("localhost","id4639390_psp","onvesh","id4639390_onveshdb");
$id=$_POST["Event"];
$name=$_POST["name"];
$enrollment=$_POST["enrollment"];
$phone=$_POST["phone"];
$_SESSION['branch']=$_POST["Branch"];
$_SESSION['year']=$_POST["Year"];


$query_name=mysqli_query($con, "SELECT * FROM register WHERE userFullName like '$name' AND userEnroll='$enrollment';");

if (mysqli_num_rows($query_name) > 0){
	$row1 = mysqli_fetch_assoc($query_name);
	$_SESSION['uname'] = $row1['userFullName'];
	$_SESSION['enr1'] = $row1["userEnroll"];
	$_SESSION['phone'] = $row1["userMobile"];
		switch($id){
		case "cs":
			$ename="counter strike";
			$_SESSION['event_name']="counter strike";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));
			$_SESSION['price']=100;
				include 'e_ticket.php';
		break;
		case "ci":
		$ename="code it";
			$_SESSION['event_name']="code it";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));
			$_SESSION['price']=90;
				include 'e_ticket.php';
		break;
		case "clkit":
		$ename="click it";
			$_SESSION['event_name']="click it";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));
			$_SESSION['price']=80;
				include 'e_ticket.php';
		break;
		case "bc":
		$ename="box cricket";
			$_SESSION['event_name']="box cricket";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));
			$_SESSION['price']=70;
				include 'e_ticket.php';
		break;
		case "bb":
		$ename="bread board";
			$_SESSION['event_name']="bread board";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));
			$_SESSION['price']=60;
				include 'e_ticket.php';
		break;
		case "fifa":
		$ename="fifa";
			$_SESSION['event_name']="fifa";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));			
			$_SESSION['price']=50;
				include 'e_ticket.php';
		break;
		case "mc":
		$ename="masterchef";
			$_SESSION['event_name']="masterchef";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));			
			$_SESSION['price']=40;
				include 'e_ticket.php';
		break;
		case "mrs":
		$ename="Mr & Mrs";
			$_SESSION['event_name']="Mr & Mrs";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));			
			$_SESSION['price']=30;
				include 'e_ticket.php';
		break;
		case "rf":
		$ename="rink football";
			$_SESSION['event_name']="rink football";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));			
			$_SESSION['price']=20;
				include 'e_ticket.php';
		break;
		case "rr":
		$ename="robo race";
			$_SESSION['event_name']="robo race";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));			
			$_SESSION['price']=10;
				include 'e_ticket.php';
		break;
		case "th":
		$ename="talent hunt";
			$_SESSION['event_name']="talent hunt";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));			
			$_SESSION['price']=110;
				include 'e_ticket.php';
		break;
		case "min":
		$ename="minute";
			$_SESSION['event_name']="minute";
			$check=mysqli_query($con,"select * from event_reg where enrollment='$enrollment' and name like '$name' and event_name='$ename'");
			if(mysqli_num_rows($check) > 0){
				include 'navigation.html';
				echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
				echo "<p style='text-align:center;color:red;font-size:40px;'>".'You are already registered'."</p>";
				break;
			}
			$bytes=7;
			$_SESSION['ucode']=bin2hex(openssl_random_pseudo_bytes($bytes));			
			$_SESSION['price']=120;
				include 'e_ticket.php';
		break;
		case "op":
			echo "select the options";
		default:
			 
			echo "<p style='text-align:center;color:red;font-size:40px;'>".'Incorrect Information filled!'."</p>";
		}
}
else{
	include 'navigation.html';
			echo "<p style='text-align:center;color:green;font-size:40px;'>".'Sorry, '.$name."</p>";
			echo "<p style='text-align:center;color:red;font-size:40px;'>".'you cannot register!'."</p>";
}
?>
