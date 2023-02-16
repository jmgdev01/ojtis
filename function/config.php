<?php 

<<<<<<< HEAD
	$host = "localhost";
=======
	$host = "127.0.0.1";
>>>>>>> bc3d0c21abb971af9b3a357ff630e888c2ae36a9
	$username = "root";
	$password = "";
	$database = "ojtis";

	// Create connection
	$conn = mysqli_connect($host, $username, $password, $database);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	date_default_timezone_set("Asia/Manila"); 
	ini_set('session.cookie_lifetime','31536000'); 
	// The validity of the session is 1 year
	session_start();
?>
