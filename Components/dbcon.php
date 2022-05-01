<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mymeds";

// Create connection
$cn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($cn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";
?>

