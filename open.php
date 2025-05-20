<?php
// index.php

// Display a simple welcome message
echo "<h1>Welcome to My PHP Project</h1>";

// Display current date and time
date_default_timezone_set('UTC');
echo "<p>Current server time is: " . date("Y-m-d H:i:s") . "</p>";

// Connect to MySQL (example - adjust credentials accordingly)
$servername = "localhost";
$username = "root";
$password = ""; // default password for XAMPP/WAMP
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
}
echo "<p style='color:green;'>Connected successfully to the database.</p>";

// Close connection
$conn->close();
?>