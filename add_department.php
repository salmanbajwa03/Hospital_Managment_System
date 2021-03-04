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
	<title>Add new Department</title>

	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

<?php include('admin_nav.php');?>
	
	<div class="container">
		<div class="jumbotron"><br><br>
		<form method="post">			
			<label>Department Name:-</label>
			<input type="text" class="form-control" name="dept_name" required><br>
		
			<button class="btn btn-info" name="submit_btn"> Submit</button>
		</form>
		</div>
	</div>

	<?php include('footer.php');?>
		
</body>
</html>
<?php
		if(isset($_POST['submit_btn'])){
			$doctor_deptname = $_POST['dept_name'];
			$sql = "INSERT INTO department(department_name)
			VALUES ('$doctor_deptname')";
		
			if($conn->query($sql) === true){
				echo "<script>alert('Data inserted Successfully');</script>";
			}
			else{
				echo "<script>alert('Error in data insertion');</script>";
			}
		}
	}
?>