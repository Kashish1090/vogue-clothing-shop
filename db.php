<?php
$servername = "localhost";
$username = "root";
$password = ""; // default is empty in XAMPP
$database = "test_db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // optional for testing
?>
