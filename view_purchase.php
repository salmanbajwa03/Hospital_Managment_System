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
	<title>Purchasing History</title>

	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('admin_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">
			<tbody>
			<?php 
					$sql = "SELECT *FROM medicine_stocks";
					$result = $conn->query($sql);
														if($result->num_rows > 0)
					{
							?>
			<thead>
				<tr>
					<th>Medicine Name</th>
					<th>Purchase Qty</th>
					<th>Purchase Price</th>
					<th>Purchase Date</th>
				</tr>
				
			</thead>
					
			<?php		
					}
					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$department_idd = $data['medicine_id'];
							$department_namee = $data['Purchasing_quantity'];
							$per_datee = $data['purchasing_date'];
							$per_pricee = $data['purchasing_price'];
							
							$sql2 = "select medicine_name from medicine where medicine_id='$department_idd'";
							$result2 = $conn->query($sql2);
							$data2 = $result2->fetch_assoc();
							$medicine_namee = $data2['medicine_name'];
			?>
					<tr>
						<td><?php echo "$medicine_namee"?></td></a>
						<td><?php echo "$department_namee"?></td>
						<td><?php echo "$per_pricee"?></td>
						<td><?php echo "$per_datee"?></td>
						
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