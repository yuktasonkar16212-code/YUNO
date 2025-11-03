<?php
$servername = "localhost";   // usually "localhost"
$username = "root";          // MySQL username
$password = "";              // MySQL password (blank for localhost)
$dbname = "portfolio_db";    // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
