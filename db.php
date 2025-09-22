<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "medical_system";
$port = "3307";

$conn = new mysqli($localhost, $username, $password, $database, $port);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}