<?php

$servername = "localhost";
$database = "napays";
$user = "root";
$pass = "";

// Create connection
$conn = new mysqli($servername, $user, $pass, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
