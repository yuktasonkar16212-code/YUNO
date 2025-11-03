<?php
$servername = "sql211.infinityfree.com";   // usually "localhost"
$username = "if0_40322101";          // MySQL username
$password = "Ns36dXUpJmQZ";              // MySQL password (blank for localhost)
$dbname = "if0_40322101_contact";    // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
