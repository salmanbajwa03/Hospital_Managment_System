
<nav class="navbar navbar-hover;" style="position:fixed;width:100%;background-color:blue;border:none;border-radius:0;font-family:'Trebuchet MS', Helvetica, sans-serif;">
   
   <ul class="nav navbar-nav" style="text-color:white;">

	<li><a style="color:white;font-size:18px;" href="admin_home.php"><i style="font-size:18px"class="fas fa-home"></i> Home</a></li>   
	
	<li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:18px;color:white;"><i style="font-size:18px"></i>Appointments <span class="caret"></span></a> 
		<ul class="dropdown-menu">
			<li><a href="add_appointment.php">Add new Appointment</a></li>
			<li><a href="view_appointments.php">view Pervious Appointments</a></li>
			<li><a href="view_pending.php">View All pending Appointment</a></li>
		</ul>
	</li>
	

	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:18px;color:white;"><i style="font-size:18px"></i>Patients <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="view_patients.php">View Patients</a></li>
			<li><a href="delete_patient.php">Delete Patient's Record</a></li>
		</ul>
	</li>
	

    
		
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:18px;color:white;"><i style="font-size:18px"></i>Department <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="view_department.php">View Departments</a></li>
			<li><a href="add_department.php">Add new Department</a></li>
			<li><a href="delete_department.php">Delete Department</a></li>
		</ul>
	</li>
		
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:18px;color:white;">Doctors <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="view_doctors.php">View Doctors</a></li>
			<li><a href="add_doctor.php">Add new doctor</a></li>
			<li><a href="delete_doctor.php">Delete doctor</a></li>
		</ul>
	</li>
	
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:18px;color:white;">Pharmacy <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="view_purchase.php">view Medicine Purchasing</a></li>
			<li><a href="view_stocks.php">view Medicine Stocks</a></li>
			<li><a href="view_sales.php">view Medicine Sales</a></li>
			<li><a href="add_stocks.php">Add Medicine in Stocks</a></li>
			<li><a href="add_sales.php">Add Medicine in Sales</a></li>
			<li><a href="add_newmedicine.php">Add New Medicine</a></li>
		</ul>
	</li>
      <li><a style="color:white;font-size:17px;margin-right:20px;" href="view_admin.php"><span  style="font-size:20px"  class="fas fa-user"></i></span> <?php echo $_SESSION['adminEmail'];?></a></li>

    </ul>
	
    <ul class="nav navbar-nav navbar-right">
      <li><a style="color:white;font-size:17px;margin-right:20px;" href="logout.php"><span  style="font-size:20px"  class="fas fa-sign-out-alt"></i></span> Logout</a></li>
    </ul>
</nav>
