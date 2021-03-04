<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hmsd";

	$conn = new mysqli($servername,$username,$password,$dbname);
	
	if($conn->connect_error){
		echo "Error...";
	}
	/*else{
		echo "Success";
	}*/

?>