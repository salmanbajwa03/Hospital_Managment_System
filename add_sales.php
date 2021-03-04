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
	<title>Add Sales</title>
		<?php include('connection.php');?>
</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

<?php include('admin_nav.php');?>	
	<div class="container">
		<div class="jumbotron"><br><br>
		<form method="post">
			<label> Medicine Name:-</label>
			<input type="text" class="form-control" name="mn" required><br>
			
			<label> Sales Qty:-</label>
			<input type="text" class="form-control" name="pq" required><br>
			
			<label> Sales date:-</label>
			<input type="date" class="form-control" name="pd" required><br>
			
			<label> Sales time:-</label>
			<input type="text" class="form-control" name="pt" required><br>
			
			<label> Sales Price:-</label>
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
			$med_pt = $_POST['pt'];
			$med_pp = $_POST['pp'];
			
			$sql1="select * from medicine where medicine_name='$med_name'";
			$result = $conn->query($sql1);		
			$data = $result->fetch_assoc();
			$med_id = $data['medicine_id'];
			
			$sql2="select * from medicine_stocks where medicine_id='$med_id'";
		
			$result2 = $conn->query($sql2);		
			$data1 = $result2->fetch_assoc();
			$med_idd = $data1['medicine_id'];
			
			$sql3="INSERT INTO medicine_sales
			VALUES ('$med_pt','$med_pd','$med_pq','$med_id','$med_pp')";
			
			
			
				if($conn->query($sql3) === true){
					echo "<script>alert('Data inserted Successfully');</script>";
				}
				else{
					echo "<script>alert('Error in data insertion');</script>";
				}
			}
		}
	
?>