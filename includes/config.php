<?php
// config.php

$host = "localhost"; // Replace with your database host
$user = "root";      // Replace with your database username
$password = ""; // Replace with your database password
$database = "nebshare"; // Replace with your database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
