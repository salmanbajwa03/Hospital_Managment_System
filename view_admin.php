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
	<title>Add Doctor</title>

	<?php include('connection.php');?>

</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('admin_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Fname</th>
					<th>Lname</th>
					<th>Contact</th>
					<th>Email</th>
					<th>Salary</th>
					<th>Password</th>
				</tr>
				
			</thead>
			<tbody>
			<?php 
					$sql = "SELECT *FROM admin where admin_email = '$mail'";
					$result = $conn->query($sql);
					
					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$patient_iddd = $data['admin_id'];
							$patient_idd = $data['password'];
							$appointment_idd = $data['admin_fname'];
							$doctor_idd = $data['admin_lname'];
							$appointment_datee = $data['admin_contact'];
							$appointment_timee = $data['admin_email'];
							$appointment_statuss = $data['admin_salary'];
			?>
					<tr>
						<td><?php echo "$patient_iddd"?></td>
						<td><?php echo "$appointment_idd"?></td>
						<td><?php echo "$doctor_idd "?></td>
						<td><?php echo "$appointment_datee"?></td>
						<td><?php echo "$appointment_timee"?></td>
						<td><?php echo "$appointment_statuss"?></td>
						<td><?php echo "$patient_idd"?></td>
					</tr>
				<?php
						}
				}
					else{
						echo "No Data to Display";
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