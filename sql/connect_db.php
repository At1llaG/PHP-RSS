<?php

// Username is root
$user = 'root';
$password = 'password';

// Database name is saglikdb
$database = 'saglikdb';

// Server is localhost with port number 3306 with XAMPP
$servername='localhost:3306';
$conn = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($conn->connect_error) {
	die('Connect Error (' .
	$conn->connect_errno . ') '.
	$conn->connect_error);
}

echo "Connected successfully";

?>