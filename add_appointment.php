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
	<title>Add new Appointment</title>

	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

<?php include('admin_nav.php');?>	
	<div class="container">
		<div class="jumbotron"><br><br>
		<form method="post">
			
			<label> UserName:-</label>
			<input type="text" class="form-control" name="username" required><br>
			
			<label> Password:-</label>
			<input type="password" class="form-control" name="password" required><br>
			
			<label> First Name:-</label>
			<input type="text" class="form-control" name="fname" required><br>
			
			<label> Last Name:-</label>
			<input type="text" class="form-control" name="lname" required><br>
			
			<label> Age:-</label>
			<input type="text" class="form-control" name="age" required><br>
			
			<label> Contact:-</label>
			<input type="text" class="form-control" name="contact" required><br>
			
			<label> Address:-</label>
			<input type="text" class="form-control" name="address" required><br>

			<label>Doctor ID:-</label>
			<input type="text" class="form-control" name="doc_id" required><br>
			
			<label> Date:-</label>
			<input type="date" class="form-control" name="date" required><br>

			<label> Time:-</label>
			<input type="text" class="form-control" name="time" required><br>			
			
			<label> Status:-</label>
			<input type="text" class="form-control" name="status" required><br>
					
			<button class="btn btn-info" name="submit_btn"> Submit</button>
		</form>
		</div>
	</div>

	<?php include('footer_simple.php');?>
		
</body>
</html>
<?php
		if(isset($_POST['submit_btn'])){
			$doctor_username = $_POST['username'];
			$doctor_password = $_POST['password'];
			$doctor_ffname = $_POST['fname'];
			$doctor_llname = $_POST['lname'];
			$doctor_fage = $_POST['age'];
			$doctor_ccontact = $_POST['contact'];
			$doctor_address = $_POST['address'];
			$doctor_docID = $_POST['doc_id'];
			$doctor_date = $_POST['date'];
			$doctor_time = $_POST['time'];
			$doctor_status = $_POST['status'];
			
			
			$sql1="INSERT into patient_login VALUES('$doctor_username','$doctor_password')";
			
			$sql2="INSERT into patient VALUES('$doctor_username','$doctor_ffname','$doctor_llname','$doctor_fage',
			'$doctor_ccontact','$doctor_address')";
			
			$sql3="INSERT into appointment(patient_id,doctor_id,appointment_date,appointment_time,appointment_status)
			Values('$doctor_username','$doctor_docID','$doctor_date','$doctor_time','$doctor_status')";
	
		
			if($conn->query($sql1) === true && $conn->query($sql2) === true && $conn->query($sql3) === true){
				echo "<script>alert('Data inserted Successfully');</script>";
			}
			else{
				echo "<script>alert('Error in data insertion');</script>";
			}
		}
	}
?>