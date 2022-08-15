<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "products_lab6"; 

// Create connection
$connn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}