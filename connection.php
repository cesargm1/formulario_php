<?php
$servername = "127.0.0.1";
$username = "root";
$database = "users";
$password = "";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $database, $password, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
