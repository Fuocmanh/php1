<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php1_lab6";  
$database1 = "products_lab6"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn = new mysqli($servername, $username, $password, $database1);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
