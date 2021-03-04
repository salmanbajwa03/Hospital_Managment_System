<!DOCTYPE html>
<?php
	session_start();
?>

<html>
<head>
	<title>Login | To Hospital Managmet System</title>
	<?php 
		include ('links.php');
		include('connection.php');
	?>
</head>
<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">
	<div class="jumbotron" style=" background-image: linear-gradient(to left, #00e600 ,  #000099);color:white;">
		<div class="container">
			<img style="height:75px; width:180px;margin-left:200px" src="img/HMS.png"/>
			<span style="font-size:34px;text-shadow: 2px 2px 5px #80ff80;"><font face="algerian  ">Hospital Managmet system</font></span></center>
		</div>
	</div>
	
	<div class="container">	
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6" style="background-color:">
				<center><img src="img\patient.png" height="50" width="50">
				<span style="font-size:24px">patient Login</span><hr></center>
			
				<form method="post">
					<label >Enter Username:</label>
					<input type="username" class="form-control" name="username" required><br>
			
					<label>Password:</label>		
					<input type="password" class="form-control" name="password" required><br>
					
					<center><button  class="btn btn-success" value="Submit" name="submit_btn"> Login</button></center><br>
				</form>
			</div>
		</div>
	</form>
</div><br>
	
		<?php include ('footer.php');?>
</body>
</html>
	<?php
		if(isset($_POST['submit_btn'])){
			$our_username = $_POST['username'];
			$our_password = $_POST['password'];
	
			$sql = "SELECT *FROM patient_login WHERE username = '$our_username'";
			
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				
				while($data = $result->fetch_assoc()){
					$our_pass = $data['patient_password'];
				}
			}
		
			if($our_password == $our_pass){
				echo "<script>window.location.href='patient_home.php';</script>";
			}
			else{
				echo "<script>alert('Invalid Username or Password');</script>";
			}
			
		}
	$_SESSION['patient_username'] = $our_username;
	$_SESSION['patient_username'] = $our_username;

?>
	