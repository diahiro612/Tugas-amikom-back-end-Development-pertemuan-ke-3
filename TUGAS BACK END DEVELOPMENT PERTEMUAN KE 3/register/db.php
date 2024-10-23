<?php
// Database connection parameters
$servername = "localhost";
$username = "root";  // Default username in XAMPP
$password = "";      // Default password for root is empty
$dbname = "registration_db";  // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Optional: Display a success message for testing
echo "Connected successfully to the database";
?>
