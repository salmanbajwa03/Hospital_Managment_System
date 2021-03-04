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
	<title>Delete Patient</title>

	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

<?php include('admin_nav.php');?>
	
	<div class="container">
		<div class="jumbotron"><br><br>
		<form method="post">			
			<label>Patient's UserName:-</label>
			<input type="text" class="form-control" name="uname" required><br>
		
			<button class="btn btn-info" name="submit_btn"> Submit</button>
		</form>
		</div>
	</div>

	<?php include('footer.php');?>
		
</body>
</html>
<?php
		if(isset($_POST['submit_btn'])){
			$doctor_deptname = $_POST['uname'];
			$sql = "delete from appointment where patient_id='$doctor_deptname'";
			$sql1 = "delete from patient where username='$doctor_deptname'";
			$sql2 = "delete from patient_login where username='$doctor_deptname'";
		
		
			if($conn->query($sql) === true && $conn->query($sql1) === true && $conn->query($sql2) === true){
				echo "<script>alert('Patient deleted Successfully');</script>";
			}
			else{
				echo "<script>alert('Error ');</script>";
			}
		}
	}
?>