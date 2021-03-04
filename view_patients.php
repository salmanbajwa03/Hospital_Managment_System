<?php
	session_start();
	if(!isset($_SESSION['adminEmail'])){
		echo "<script>window.location.href='index.php';</script>";
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patients</title>
	
	<?php include('connection.php');?>

</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('admin_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">
			
			<tbody>
			<?php 
					$sql = "SELECT *FROM PATIENT";
					$result = $conn->query($sql);
													if($result->num_rows > 0)
					{
							?>
			<thead>
				<tr>
					<th>UserName</th>
					<th>FName</th>
					<th>LName</th>
					<th>Age</th>
					<th>Contact</th>
					<th>Address</th>
				</tr>
				
			</thead>
			<?php		
					}
			

					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$doctor_iid = $data['username'];
							$doctor_ffname = $data['patient_fname'];
							$doctor_llname = $data['patient_lname'];
							$doctor_ffee = $data['patient_age'];
							$doctor_ccontact = $data['patient_contact'];
							$doctor_deptID = $data['patient_address'];

			?>
					<tr>
						<td><?php echo "$doctor_iid"?></td>
						<td><?php echo "$doctor_ffname"?></td>
						<td><?php echo "$doctor_llname"?></td>
						<td><?php echo "$doctor_ffee"?></td>
						<td><?php echo "$doctor_ccontact"?></td>
						<td><?php echo "$doctor_deptID"?></td>
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