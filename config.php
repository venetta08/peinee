<?php
// Database connection configuration
$host = 'localhost';
$user = 'root';  // Assuming XAMPP or WAMP
$password = '';
$database = 'fyp';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

define('BASE_URL', '/venetta/peinee'); // Adjust this to match your project
