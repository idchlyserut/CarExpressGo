<?php 	session_start(); ?>
<?php 
	include ('PHP/dbconnect.php');

	$found= false;
	
	//admin
	$sql="SELECT * FROM users";
	$result=$conn->query($sql);
	//$result=mysqli_query($mysqli,$sql);
	while($row= $result->fetch_assoc()){
		if($_POST["u_username"]==$row['username'] && $_POST["u_password"]==$row['password'] ){
			$found= true;
		
			$_SESSION["Login"]= "users";
			$_SESSION["Username"]= $row['username'];
			
			header("Location: index3.php");
			exit();
		}
    }
    
    	//not found	
	if(!$found){
		
		$_SESSION["Login"]= "Error";
		header("Location: login.php"); /* Redirect homepage */
		exit();
	}
	
?>

