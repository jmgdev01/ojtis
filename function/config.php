<?php 

	$host = "100.102.0.6";
	$username = "root";
	$password = "";
	$database = "ojtis";

	// Create connection
	$conn = mysqli_connect($host, $username, $password, $database);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
		
?>
