<?php
// php code begin from here for edit 
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$bookID = mysqli_real_escape_string($mysqli, $_POST['bookID']);
	
	$location = mysqli_real_escape_string($mysqli, $_POST['location']);
	$pick_date = mysqli_real_escape_string($mysqli, $_POST['pick_date']);
	$return_date = mysqli_real_escape_string($mysqli, $_POST['return_date']);
	$car_type = mysqli_real_escape_string($mysqli, $_POST['car_type']);
	
	$pickdate = date('Y-m-d', strtotime($_POST['pick_date']));
	$returndate = date('Y-m-d', strtotime($_POST['pick_date']));
	
	
		//updating the table
		$sql = mysqli_query($mysqli, "UPDATE bookinginfo SET location='$_POST[location]',pick_date='$pickdate',
		return_date='$returndate',car_type='$_POST[car_type]' WHERE bookID=$bookID");
		
		
		//redirecting to the display page
		header("Location: Account.php");
	
}
?>





