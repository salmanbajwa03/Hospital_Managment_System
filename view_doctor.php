<?php
	session_start();
	if(!isset($_SESSION['adminEmail'])){
		echo "<script>window.location.href='index.php';</script>";
	}
	else{
		$mail = $_SESSION['adminEmail'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>

	<?php include('connection.php');?>

</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('doctor_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">

			<tbody>
			<?php 
					$sql = "SELECT *FROM doctor where doctor_email = '$mail'";
					$result = $conn->query($sql);
					
					if($result->num_rows > 0)
					{
							?>
				
			<thead>
				<tr>
					<th>Id</th>
					<th>Password</th>
					<th>Fname</th>
					<th>Lname</th>
					<th>Contact</th>
					<th>Email</th>
					<th>Fee</th>
					<th>Department Name</th>
				</tr>	
			</thead>
					<?php		
					}
					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$patient_iddd = $data['doctor_id'];
							$patient_idd = $data['password'];
							$appointment_idd = $data['doctor_fname'];
							$doctor_idd = $data['doctor_lname'];
							$appointment_datee = $data['doctor_contact'];
							$appointment_timee = $data['doctor_email'];
							$appointment_statuss = $data['doctor_fee'];
							$dep_id = $data['department_id'];
							
							$sql2="select department_name from department where department_id='$dep_id'";
							$result2=$conn->query($sql2);
							$data2 = $result2->fetch_assoc();
							$dep_name=$data2['department_name'];
							
			?>
					<tr>
						<td><?php echo "$patient_iddd"?></td>
						<td><?php echo "$patient_idd"?></td>
						<td><?php echo "$appointment_idd"?></td>
						<td><?php echo "$doctor_idd "?></td>
						<td><?php echo "$appointment_datee"?></td>
						<td><?php echo "$appointment_timee"?></td>
						<td><?php echo "$appointment_statuss"?></td>
						<td><?php echo "$dep_name"?></td>
						
					</tr>
				<?php
						}
				}
					else{
						echo "  <center><font face=algerian color=black> <h1>Nothing to see there yet</h1></font></center>";
					}
					$conn->close();
				?>
			</tbody>
		</table>

	<?php include('footer.php');?>
		
</body>
</html>
<?php
	
	}
?>