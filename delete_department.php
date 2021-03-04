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
	<title>Delete Department</title>

	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

<?php include('admin_nav.php');?>
	
	<div class="container">
		<div class="jumbotron"><br><br>
		<form method="post">			

			<label>Department Name:-</label>
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
			$sql = "SELECT * FROM department where department_name='$doctor_deptname'";
			$result = $conn->query($sql);
			$data = $result->fetch_assoc();
			$dep_id = $data['department_id'];					
				
			$sql1 = "SELECT * FROM doctor where department_id='$dep_id'";
			$result1 = $conn->query($sql1);
			$data1 = $result->fetch_assoc();
			$doc_id = $data1['doctor_id'];					
			
			$sql3="delete from appointment where doctor_id='$doc_id'";
			$sql4="delete from doctor where department_id='$dep_id'";
			$sql5="delete from department where department_name='$doctor_deptname'";
			if($conn->query($sql3) === true && $conn->query($sql4) === true && $conn->query($sql5) === true){
				echo "<script>alert('Department deleted Successfully');</script>";
			}
			else{
				echo "<script>alert('Error ');</script>";
			}
		}
	}
	
?>