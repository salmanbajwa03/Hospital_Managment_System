<?php
	session_start();
	if(!isset($_SESSION['patient_username'])){
		echo "<script>window.location.href='index.php';</script>";
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Departments</title>

	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('patient_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">
			
			<tbody>
			<?php 
					$sql = "SELECT *FROM department";
					$result = $conn->query($sql);
					if($result->num_rows > 0)
					{
							?>
							<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
				</tr>
				
			</thead>
					<?php		
					}
					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$doctor_iid = $data['department_id'];
							$doctor_ffname = $data['department_name'];
							
			?>
					<tr>
						<td><?php echo "$doctor_iid"?></td>
						<td><?php echo "$doctor_ffname"?></td>
						
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