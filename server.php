
<?php
	include('PHP/dbconnect.php');
	
	if(isset($_POST['Submit'])) {	
	$firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	
	// checking empty fields
				
		if (empty($firstname)) { array_push($errors, "firstname is required");}
		if (empty($lastname)) { array_push($errors, "lastname is required");}
		if (empty($email)) { array_push($errors, "email is required");}
		if (empty($username)) { array_push($errors, "username is required");}
		if (empty($password)) { array_push($errors, "password is required");}
		
		else {
		$query=mysqli_query($mysqli, "INSERT INTO users (firstname,lastname, email, username, password) 
				VALUES ('$firstname', '$lastname', '$email', '$username','$password')");

		echo "<font color='green'>Data added successfully.";}
		//echo "<br/><a href='index.php'>View Result</a>";

	header('Refresh: 0;login.php');

	}

?>