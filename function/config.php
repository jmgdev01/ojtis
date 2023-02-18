<?php 

$dbHost = '127.0.0.1';
$dbName = 'ojtis';
$dbUsername = 'root';
$dbPassword = '';

$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno()){
	echo "Database connection failed with following errors:". mysqli_connect_errno();
	die();
}

?>
