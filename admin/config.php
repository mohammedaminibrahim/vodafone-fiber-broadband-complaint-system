<?php 

	// Connection To Database
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	//$conn = new mysqli($servername, $username, $password, "bulkSMS") or die("Error ". mysqli_error($conn));
	$conn = new PDO("mysql:host=$servername;dbname=vodafone", $username, $password);
	//session_start();
	
?>