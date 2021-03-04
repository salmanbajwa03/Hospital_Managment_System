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
	<title>Add Medicine</title>
		<?php include('connection.php');?>
</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

<?php include('admin_nav.php');?>	
	<div class="container">
		<div class="jumbotron"><br><br>
		<form method="post">
			<label> Medicine Name:-</label>
			<input type="text" class="form-control" name="mn" required><br>
			
			<label> Sales Price:-</label>
			<input type="text" class="form-control" name="sp" required><br>
			
					
			<button class="btn btn-info" name="submit_btn"> Submit</button>
		</form>
		</div>
	</div>

	<?php include('footer.php');?>
		
</body>
</html>
<?php
	
		if(isset($_POST['submit_btn'])){
			$med_name = $_POST['mn'];
			$med_sp  = $_POST['sp'];

			
			$sql = "INSERT INTO medicine(medicine_name,sales_price) VALUES ('$med_name','$med_sp')";
			
			
				if($conn->query($sql) === true){
					echo "<script>alert('Data inserted Successfully');</script>";
				}
				else{
					echo "<script>alert('Error in data insertion');</script>";
				}
			}
		}
?>