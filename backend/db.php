<?php
$servername = "localhost";
$username = "root"; // Default for XAMPP/WAMP
$password = "Nulr2025@00#";     // Default is empty
$dbname = "Newaiache"; // Matches your SQL file name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
