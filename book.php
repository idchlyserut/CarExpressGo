<?php
//including the database connection file
include('..\Cardoor--master\config.php');

if(isset($_POST["bookCar"])) {	
	
	$location = mysqli_real_escape_string($mysqli, $_POST['location']);
	$pick_date = mysqli_real_escape_string($mysqli, $_POST['pick_date']);
	$return_date = mysqli_real_escape_string($mysqli, $_POST['return_date']);
	$car_type = mysqli_real_escape_string($mysqli, $_POST['car_type']);
	
	
	//insert data to database
	//$bookCar=$_POST["bookCar"];
	$sql=mysqli_query($mysqli, "INSERT INTO bookinginfo(location,pick_date,return_date,car_type) 
	VALUES('$_POST[location]','$_POST[pick_date]','$_POST[return_date]','$_POST[car_type]')");
	
	echo "<font color='green'>Car successfully booked.";
		
	/*	$result = mysqli_query($mysqli, "INSERT INTO bookinginfo(location,pick_date,return_date,car_type) VALUES('$location','$pick_date','$return_date','$car_type')");
		
		//display success message
		if($mysqli->query($location, $pick_date, $return_date, $car_type) === true){
			
			//echo "<br/><a href='index3.php'>View Result</a>";
		} else {
			echo "ERROR: Could not able to book car." . $mysqli->error;
	*/
}

?>
</body>
</html>
