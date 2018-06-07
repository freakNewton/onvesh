<?php
	session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	include 'table_header.html';
	$id=$_SESSION['type'];
	if ($id!="core"){
		echo "<table style='width: 95%;'>
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
	}
	else{
		echo "<table style='width: 95%;'>
		<thead>
		  <tr>
			<th>Enrollment No</th>
			<th>Name</th>
			<th>Unique Code</th>
			<th>Event</th>
			<th>Phone No</th>
			<th>Branch</th>
			<th>Year</th>
			<th>Paid</th>
			<th>Played</th>
		  </tr>
		</thead>
		<tbody>";
	}
		$con=mysqli_connect("localhost","id4639390_psp","onvesh","id4639390_onveshdb") or die("Unable to connect");
			switch($id){
				case "core":
					$result = mysqli_query($con,"SELECT * FROM event_reg");
					while( $row = mysqli_fetch_assoc( $result ) ){
					if($row['paid_status']==1 and $row['played_status']==1)	
						echo
						"<tr style=background-color:rgba(0,255,0,0.7);>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name' >{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Event'>{$row['event_name']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						  <td data-label='paid'>{$row['paid_status']}</td>
						  <td data-label='played'>{$row['played_status']}</td> 					  
						</tr>";
					else if($row['paid_status']==1 and $row['played_status']==0)
						echo
						"<tr style=background-color:rgba(255,255,0,0.7);>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Event'>{$row['event_name']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						  <td data-label='paid'>{$row['paid_status']}</td>
						  <td data-label='played'>{$row['played_status']}</td> 					  
						</tr>";
					else 
						echo
						"<tr style=background-color:rgba(255,0,0,0.7);>
						  <td data-label='Enrollment'>{$row['enrollment']}</td>
						  <td data-label='Name'>{$row['name']}</td>
						  <td data-label='Unique Code'>{$row['ucode']}</td>
						  <td data-label='Event'>{$row['event_name']}</td>
						  <td data-label='Phone No'>{$row['phone_no']}</td>
						  <td data-label='Branch'>{$row['branch']}</td>
						  <td data-label='Year'>{$row['year']}</td> 
						  <td data-label='paid'>{$row['paid_status']}</td>
						  <td data-label='played'>{$row['played_status']}</td> 					  
						</tr>";	
				}
				case "cs":
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='counter strike' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
				if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
          }
		  break;
		  case "ci":
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='code it' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "clkit":
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='click it' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "bc":
					//execute the SQL query and return records
					$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='box cricket' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "bb":
			//execute the SQL query and return records
			$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='bread board' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
            if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "fifa":
					//execute the SQL query and return records
			$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='fifa' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "mc":
					//execute the SQL query and return records
			$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='masterchef' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "mrs":
					//execute the SQL query and return records
			$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='Mr & Mrs' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "rf":
			//execute the SQL query and return records
			$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='rink football' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "rr":
					//execute the SQL query and return records
			$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='robo race' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "th":
			//execute the SQL query and return records
			$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='talent hunt' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
			}
		  break;
		  case "min":
					//execute the SQL query and return records
			$result = mysqli_query($con,"SELECT * FROM event_reg WHERE event_name='minute' AND paid_status=1");
			while( $row = mysqli_fetch_assoc( $result ) ){
           if($row['played_status']==1){
					echo
					"<tr style=background-color:rgba(0,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
					  <td data-label='Unique Code'>{$row['ucode']}</td>
					  <td data-label='Phone No'>{$row['phone_no']}</td>
					  <td data-label='Branch'>{$row['branch']}</td>
					  <td data-label='Year'>{$row['year']}</td> 
					</tr>";
				}
				else{
					echo
					"<tr style=background-color:rgba(255,255,0,0.7);>
					  <td data-label='Enrollment'>{$row['enrollment']}</td>
					  <td data-label='Name' >{$row['name']}</td>
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
    </body>

    </html>
