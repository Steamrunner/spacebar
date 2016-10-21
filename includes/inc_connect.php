<?php
$servername = "localhost";
$username = "root";
$password = "unicorns";// Needs to be changed 
$dbname = "spacebar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// echo "test Connected successfully";


?>
