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
	<title>previous Appointment</title>
	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('doctor_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">
			
			<tbody>
			<?php 
					$sql = "SELECT *FROM appointment where appointment_date< current_date() and 
					doctor_id in (select doctor_id from doctor where doctor_email = '$mail')";
					$result = $conn->query($sql);
if($result->num_rows > 0)
						{	
							?>
			
						<thead>
				<tr>
					<th>Id</th>
					<th>Patient Username</th>
					<th>Doctor Name</th>
					<th>Date</th>
					<th>Time</th>
					<th>Status</th>
				</tr>
				
			</thead>

					<?php		
					}
					
				
					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$patient_idd = $data['patient_id'];
							$appointment_idd = $data['appointment_id'];
							$doctor_idd = $data['doctor_id'];
							$appointment_datee = $data['appointment_date'];
							$appointment_timee = $data['appointment_time'];
							$appointment_statuss = $data['appointment_status'];
						
							$sql2 = "select doctor_fname from doctor
							where doctor_id=$doctor_idd";
							$result2 = $conn->query($sql2);
							$data2 = $result2->fetch_assoc();
							$doctor_namee=$data2['doctor_fname'];
							
							
			?>

					<tr>
						<td><?php echo "$appointment_idd"?></td>
						<td><?php echo "$patient_idd "?></td>
						<td><?php echo "$doctor_namee"?></td>
						<td><?php echo "$appointment_datee"?></td>
						<td><?php echo "$appointment_timee"?></td>
						<td><?php echo "$appointment_statuss"?></td>
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