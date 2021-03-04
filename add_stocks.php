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
	<title>Add Stocks</title>
		<?php include('connection.php');?>
</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

<?php include('admin_nav.php');?>	
	<div class="container">
		<div class="jumbotron"><br><br>
		<form method="post">
			<label> Medicine Name:-</label>
			<input type="text" class="form-control" name="mn" required><br>
			
			<label> Purchase Qty:-</label>
			<input type="text" class="form-control" name="pq" required><br>
			
			<label> Purchase date:-</label>
			<input type="date" class="form-control" name="pd" required><br>
			
			<label> Purchase Price:-</label>
			<input type="text" class="form-control" name="pp" required><br>		
					
			<button class="btn btn-info" name="submit_btn"> Submit</button>
		</form>
		</div>
	</div>

	<?php include('footer_simple.php');?>
		
</body>
</html>
<?php
	
		if(isset($_POST['submit_btn'])){
			$med_name = $_POST['mn'];
			$med_pq = $_POST['pq'];
			$med_sq = $_POST['pq'];
			$med_pd = $_POST['pd'];
			$med_pp = $_POST['pp'];
			
			$sql1="select * from medicine where medicine_name='$med_name'";
			$result = $conn->query($sql1);		
			$data = $result->fetch_assoc();
			$med_id = $data['medicine_id'];
		
			
			$sql3="INSERT INTO medicine_stocks
			VALUES ('$med_pq','$med_sq','$med_pp','$med_pd','$med_id')";
			
			
			
				if($conn->query($sql3) === true){
					echo "<script>alert('Data inserted Successfully');</script>";
				}
				else{
					echo "<script>alert('Error in data insertion');</script>";
				}
			}
		}
	
?>