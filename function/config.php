<?php 

$dbHost = '100.102.0.6';
$dbName = 'ojtis';
$dbUsername = 'root';
$dbPassword = '';

$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno()){
	echo "Database connection failed with following errors:". mysqli_connect_errno();
	die();
}

?>
