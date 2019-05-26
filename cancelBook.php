<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$bookID = $_GET['bookID'];

//deleting the row from table
$sql = mysqli_query($mysqli, "DELETE FROM bookinginfo WHERE bookID=$bookID");

//redirecting to the display page 
header("Location:Account.php");
?>

