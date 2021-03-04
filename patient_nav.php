
<nav class="navbar navbar-hover;" style="position:fixed;width:100%;background-color:blue;border:none;border-radius:0;font-family:'Trebuchet MS', Helvetica, sans-serif;">
   
   <ul class="nav navbar-nav" style="text-color:white;">

	<li><a style="color:white;font-size:18px;" href="patient_home.php"><i style="font-size:18px"class="fas fa-home"></i> Home</a></li>   
	
	<li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:18px;color:white;"><i style="font-size:18px"></i>Appointments <span class="caret"></span></a> 
		<ul class="dropdown-menu">
			<li><a href="book_appointment.php">Book an Appointment</a></li>
			<li><a href="view_unconfirmed.php">Unconfirmed Appointments</a></li>
			<li><a href="view_confirmed.php">Confirmed Appointments</a></li>
		</ul>
	</li>
	
    
		
	<li><a href="view_departments.php" style="font-size:18px;color:white;"><i style="font-size:18px"></i>Departments </a>
	</li>
		
	<li><a href="view_doctorss.php" style="font-size:18px;color:white;">Doctors</a></li>
<li><a style="color:white;font-size:17px;margin-right:20px;" href="view_history.php"><span  style="font-size:20px"  class="fas fa-user"></i></span> <?php echo $_SESSION['patient_username'];?></a></li>
    </ul>
	
    <ul class="nav navbar-nav navbar-right">
      <li><a style="color:white;font-size:17px;margin-right:20px;" href="logout.php"><span  style="font-size:20px"  class="fas fa-sign-out-alt"></i></span> Logout</a></li>
    </ul>
</nav>
