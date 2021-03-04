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
	<title>Add Doctor</title>

	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

<?php include('admin_nav.php');?>	
	<div class="container">
		<div class="jumbotron"><br><br>
		<form method="post">
			<label> First Name:-</label>
			<input type="text" class="form-control" name="fname" required><br>
			
			<label> Last Name:-</label>
			<input type="text" class="form-control" name="lname" required><br>
			
			<label> Doctor's Fee:-</label>
			<input type="text" class="form-control" name="fee" required><br>
			
			<label> Contact:-</label>
			<input type="text" class="form-control" name="contact" required><br>
			
			<label>Department ID:-</label>
			<input type="text" class="form-control" name="dept_id" required><br>
			
			<label> Email:-</label>
			<input type="text" class="form-control" name="email" required><br>
			
			<label> Password:-</label>
			<input type="text" class="form-control" name="password" required><br>
					
			<button class="btn btn-info" name="submit_btn"> Submit</button>
		</form>
		</div>
	</div>

	<?php include('footer_simple.php');?>
		
</body>
</html>
<?php
		if(isset($_POST['submit_btn'])){
			$doctor_ffname = $_POST['fname'];
			$doctor_llname = $_POST['lname'];
			$doctor_ffee = $_POST['fee'];
			$doctor_ccontact = $_POST['contact'];
			$doctor_deptID = $_POST['dept_id'];
			$doctor_eemail = $_POST['email'];
			$doctor_password = $_POST['password'];
			
			$sql = "INSERT INTO doctor(password,doctor_fname,doctor_lname,doctor_contact,doctor_email,doctor_fee,department_id)
			VALUES ('$doctor_password','$doctor_ffname','$doctor_llname','$doctor_ccontact','$doctor_eemail','$doctor_ffee','$doctor_deptID')";
		
			if($conn->query($sql) === true){
				echo "<script>alert('Data inserted Successfully');</script>";
			}
			else{
				echo "<script>alert('Error in data insertion');</script>";
			}
		}
	}
?>