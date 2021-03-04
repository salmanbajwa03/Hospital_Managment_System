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
	<title>Welcome To Hospital Managmet System</title>
	

	<?php include('links.php');?>
</head>

<body style="font-family:'Trebuchet MS', Helvetica, sans-serif;">
<?php include ('links.php');?>
	<?php include('admin_nav.php');?>	
	<?php include('header.php');?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-28px;"">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/5.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/5.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/5.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	<?php include('footer_simple.php');?>
	
</body>
</html>
<?php
	}
?>