<?php
// MySQL database credentials
$servername = "localhost"; // Change this to your database server
$username = "username"; // Change this to your database username
$password = "password"; // Change this to your database password
$database = "dbname"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection
$conn->close();
?>
