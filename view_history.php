<?php
	session_start();
	if(!isset($_SESSION['patient_username'])){
		echo "<script>window.location.href='index.php';</script>";
	}
	else{
		$uname = $_SESSION['patient_username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>
	
	<?php include('connection.php');?>
</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('patient_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">
						<tbody>
			<?php 
					$sql = "SELECT *FROM patient_login where username='$uname'";
					$result = $conn->query($sql);
									if($result->num_rows > 0)
						{	
							?>
			<thead>
				<tr>
					<th>ID</th>
					<th>Password</th>
					<th>Fname</th>
					<th>Lname</th>
					<th>Age</th>
					<th>Contact</th>
					<th>Address</th>
				</tr>
				
			</thead>

					<?php		
					}
					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$usernamee = $data['username'];
							$passwordd = $data['patient_password'];
							$sql1 = "SELECT *FROM patient where username='$uname'";
							$result1 = $conn->query($sql1);
							$data1 = $result1->fetch_assoc();
							$fname = $data1['patient_fname'];
							$lname = $data1['patient_lname'];
							$agee = $data1['patient_age'];
							$contactt = $data1['patient_contact'];
							$address = $data1['patient_address'];
							
			?>
					<tr>
						<td><?php echo "$usernamee"?></td>
						<td><?php echo "$passwordd"?></td>
						<td><?php echo "$fname"?></td>
						<td><?php echo "$lname"?></td>
						<td><?php echo "$agee"?></td>
						<td><?php echo "$contactt"?></td>
						<td><?php echo "$address"?></td>
						
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