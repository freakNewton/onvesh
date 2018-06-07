<?php
	session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	include 'table_header.html';
	$name =$_POST['name'];
	$ucode=$_POST['ucode'];
	$con=mysqli_connect("localhost","id4639390_psp","onvesh","id4639390_onveshdb") or die("Unable to connect");
	//include 'table_header.html';
	$id=$_SESSION['type'];
	
	if($id!="core")
		echo"<table style=width: 95%;margin: 2em;>
		<thead>
		  <tr>
			<th>Enrollment No</th>
			<th>Name</th>
			<th>Unique Code</th>
			<th>Phone No</th>
			<th>Branch</th>
			<th>Year</th>
		  </tr>
		</thead>
		<tbody>";
	else
		echo"<table style=width: 95%;margin: 2em;>
		<thead>
		  <tr>
			<th>Enrollment No</th>
			<th>Name</th>
			<th>Unique Code</th>
			<th>Event</th>
			<th>Phone No</th>
			<th>Branch</th>
			<th>Year</th>
		  </tr>
		</thead>
		<tbody>";

		
			$_SESSION['unique']=$ucode;
			switch($id){
				case "core":
					if(isset($name)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE name like'$name'");
						while( $row = mysqli_fetch_assoc( $result ) ){
							echo
							"<tr>
							  <td data-label='Enrollment'>{$row['enrollment']}</td>
							  <td data-label='Name'>{$row['name']}</td>
							  <td data-label='Unique Code'>{$row['ucode']}</td>
							  <td data-label='Unique Code'>{$row['event_name']}</td>
							  <td data-label='Phone No'>{$row['phone_no']}</td>
							  <td data-label='Branch'>{$row['branch']}</td>
							  <td data-label='Year'>{$row['year']}</td> 
							</tr>";
						}
					}
					else if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE ucode='$ucode'");
						while( $row = mysqli_fetch_assoc( $result ) ){
							echo
							"<tr>
							  <td data-label='Enrollment'>{$row['enrollment']}</td>
							  <td data-label='Name'>{$row['name']}</td>
							  <td data-label='Unique Code'>{$row['ucode']}</td>
							  <td data-label='Unique Code'>{$row['event_name']}</td>
							  <td data-label='Phone No'>{$row['phone_no']}</td>
							  <td data-label='Branch'>{$row['branch']}</td>
							  <td data-label='Year'>{$row['year']}</td> 
							</tr>";
						}
					}	
					break;	
				case "cs":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like 'counter strike' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						if($row['played_status']==1)  
							echo
							"<tr style=background-color:rgba(0,255,0,0.7);>
							  <td data-label='Enrollment'>{$row['enrollment']}</td>
							  <td data-label='Name'>{$row['name']}</td>
							  <td data-label='Unique Code'>{$row['ucode']}</td>
							  <td data-label='Phone No'>{$row['phone_no']}</td>
							  <td data-label='Branch'>{$row['branch']}</td>
							  <td data-label='Year'>{$row['year']}</td> 
							</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'counter strike' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
							echo
							"<tr>
							  <td data-label='Enrollment'>{$row['enrollment']}</td>
							  <td data-label='Name'>{$row['name']}</td>
							  <td data-label='Unique Code'>{$row['ucode']}</td>
							  <td data-label='Phone No'>{$row['phone_no']}</td>
							  <td data-label='Branch'>{$row['branch']}</td>
							  <td data-label='Year'>{$row['year']}</td> 
							</tr>";
						}
					}
				break;
			case "ci":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'code it' AND paid_status=1 and name like '$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'code it' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
			case "clkit":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'click it' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'click it' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
			case "bc":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'box cricket' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'box cricket' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
			case "bb":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'bread board' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'bread board' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
			case "fifa":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'fifa' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'fifa' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
			break;
			case "mc":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'masterchef' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'masterchef' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
				case "mrs":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'Mr & Mrs' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'Mr & Mrs' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
				case "rf":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'rink football' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'rink football' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
				case "rr":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'robo race' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'robo race' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
				case "th":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'talent hunt' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'talent hunt' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
				case "min":
					if(isset($name)){
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'minute' AND paid_status=1 and name like'$name'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
					if(isset($ucode)){
						$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name like'minute' AND paid_status=1 and ucode='$ucode'");
					  while( $row = mysqli_fetch_assoc( $result ) ){
						echo
						"<tr>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						</tr>";
					  }
					}
				break;
			}
			
	}
	else
	include 'login.html';
?>
    </tbody>
    </table>
    <form action='change_status.php' method='POST'>
        <center><button>change status</button></center>
    </form>
    </body>

    </html>
