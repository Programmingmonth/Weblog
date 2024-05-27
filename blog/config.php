<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Data connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
