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
	<title>Sales History</title>

	<?php include('connection.php');?>


</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">

	<?php include('admin_nav.php');?><br><br><br><br>
		<table class="table table-hover table-bordered">
	
			<tbody>
			<?php 
					$sql = "SELECT *FROM medicine_sales";
					$result = $conn->query($sql);
						if($result->num_rows > 0)
					{
							?>
			<thead>
				<tr>
					<th>Medicine Name</th>
					<th>Sales Qty</th>
					<th>sales Price</th>
					<th>sales Date</th>
					<th>sales Time</th>
			
				</tr>
				
			</thead>		<?php		
					}					
							
					if($result->num_rows > 0){
						while($data = $result->fetch_assoc()){
							$department_idd = $data['medicine_id'];
							$sal_qty = $data['sales_qty'];
							$sal_datee = $data['sales_date'];
							$sal_time = $data['sales_time'];							
							$sal_price = $data['sale_price'];							
							
							$sql2 = "select medicine_name from medicine where medicine_id='$department_idd'";
							$result2 = $conn->query($sql2);
							$data2 = $result2->fetch_assoc();
							$medicine_namee = $data2['medicine_name'];
			?>
					<tr>
						<td><?php echo "$medicine_namee"?></td></a>
						<td><?php echo "$sal_qty"?></td>
						<td><?php echo "$sal_price"?></td>
						<td><?php echo "$sal_datee"?></td>
						<td><?php echo "$sal_time"?></td>
						
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