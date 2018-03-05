<?php
	include 'navigation.html';
?>
<!DOCTYPE html>
<html>
<head>
<title>E-Ticket</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- //for-mobile-apps -->
<link href="css/ticket_style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="content">
	<h1>Event Registration E-Ticket</h1>
	<form action="dbupdatefinal.php" method="POST">
	<div class="main">
			<div class="image">
			<?php
				switch($_SESSION['event_name']){
				case "counter strike":	
					echo "<img src='imgs/cs.jpg'></img>";
					$members=5;
					break;
				case "code it":
					echo "<img src='imgs/codeit.jpg'></img>";
					$members=1;
					break;
				case "click it":
					echo "<img src='imgs/clickit.jpg'></img>";
					$members=1;
					break;
				case "box cricket":
					echo "<img src='imgs/BOX.jpg'></img>";
					$members=5;
					break;
				case "bread board":	
					echo "<img src='imgs/bb.jpg'></img>";
					$members=2;
					break;
				case "fifa":
					echo "<img src='imgs/fifa.jpg'></img>";
					$members=5;
					break;
				case "masterchef":
					echo "<img src='imgs/mcf.jpg'></img>";
					$members=3;
					break;
				case "Mr & Mrs":
					echo "<img src='imgs/mr_ms.jpg'></img>";
					$members=1;
					break;
				case "rink football":
					echo "<img src='imgs/rinkf.jpg'></img>";
					$members=5;
					break;
				case "robo race":
					echo "<img src='imgs/rr.jpg'></img>";
					$members=1;
					break;
				case "talent hunt":
					echo "<img src='imgs/talenth.jpg'></img>";
					$members=1;
					break;
				case "minute":
					echo "<img src='imgs/min.jpg'></img>";
					$members=1;
					break;
				}
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
			?>
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Name </li>
					<li>Unique Code</li>
					<li>Price</li>
					<li>No of Members</li>
				</ul>
				<ul class="book-right">
				<?php
					echo "<li>:".$_SESSION['uname']. "</li>";
					echo "<li>:".$_SESSION['ucode']. "</li>";
					echo "<li>:".$_SESSION['price']. "</li>";
					echo "<li>:".$members. "</li>";
				?>
				</ul>
				<div class="clear"></div>
				
			</div>
			<div style="clear:both"></div>
	    </div>

	</form>
	</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
