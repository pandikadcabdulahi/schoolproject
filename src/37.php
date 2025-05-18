<?php
// Define variables and constants from schoolproject.php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "schoolproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Your PHP code goes here

// Close database connection
$conn->close();
