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
	<title>Doctors</title>

	<?php include('connection.php');?>

</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('admin_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">
			
			<tbody>
			<?php 
					$sql = "SELECT *FROM doctor";
					$result = $conn->query($sql);
				
											if($result->num_rows > 0)
					{
							?>
			<thead>
				<tr>
					<th>ID</th>
					<th>Password</th>
					<th>FName</th>
					<th>LName</th>
					<th>Fee</th>
					<th>Contact</th>
					<th>Department Name</th>
					<th>Email</th>
				</tr>
				
			</thead>
			<?php		
					}				
					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$doctor_iid = $data['doctor_id'];
							$doctor_ffname = $data['doctor_fname'];
							$doctor_llname = $data['doctor_lname'];
							$doctor_ffee = $data['doctor_fee'];
							$doctor_ccontact = $data['doctor_contact'];
							$doctor_deptID = $data['department_id'];
							$doctor_eemail = $data['doctor_email'];
							$sql1 = "select department_name from department
							where department_id=$doctor_deptID";
							$result1 = $conn->query($sql1);
							$data1 = $result1->fetch_assoc();
							$department_namee=$data1['department_name'];
							$doctor_passwordd = $data['password'];
							
			?>
					<tr>
						<td><?php echo "$doctor_iid"?></td>
						<td><?php echo "$doctor_passwordd"?></td>
						<td><?php echo "$doctor_ffname"?></td>
						<td><?php echo "$doctor_llname"?></td>
						<td><?php echo "$doctor_ffee"?></td>
						<td><?php echo "$doctor_ccontact"?></td>
						<td><?php echo "$department_namee"?></td>
						<td><?php echo "$doctor_eemail"?></td>
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