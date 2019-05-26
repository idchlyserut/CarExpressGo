<?php
    //DB parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wpproject";
	
    //Create connection
    $mysqli=mysqli_connect($servername, $username,$password, $dbname);

    // Check connection
	if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

//$conn->close();

?>