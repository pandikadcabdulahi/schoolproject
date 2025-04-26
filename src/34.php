<?php
// This is an example of how you can use PHP to create a simple login system.
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password
    if ($username == "user123" && $password == "pass123") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "This is a POST request, so you are sending data.";
}
?>
