<?php
//including the database connection file
include('config.php');


if(isset($_POST["bookCar"])) {	
	
	$location = mysqli_real_escape_string($mysqli, $_POST['location']);
	$pick_date = mysqli_real_escape_string($mysqli, $_POST['pick_date']);
	$return_date = mysqli_real_escape_string($mysqli, $_POST['return_date']);
	$car_type = mysqli_real_escape_string($mysqli, $_POST['car_type']);
	
	
	$pickdate = date('Y-m-d', strtotime($_POST['pick_date']));
	$returndate = date('Y-m-d', strtotime($_POST['pick_date']));
	
	$sql=mysqli_query($mysqli, "INSERT INTO bookinginfo(location,pick_date,return_date,car_type) 
	VALUES('$_POST[location]','$pickdate','$returndate','$_POST[car_type]')");
	
	
	echo "<font color='green'>Car successfully booked.";
	
	
	header('Refresh: 0;Account.html');

}

?>
