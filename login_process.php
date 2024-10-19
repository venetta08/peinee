<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials (you should replace this with a database check in production)
    if ($username === 'admin' && $password === 'aaa123') {
        // Set session variable to indicate admin is logged in
        $_SESSION['admin_logged_in'] = true;

        // Redirect to the admin dashboard
        header("Location: views/dashboard.php");
        exit();
    } else {
        // Invalid credentials, redirect back to login with an error message
        $error_message = "Invalid username or password";
        header("Location: login.php?error=" . urlencode($error_message));
        exit();
    }
} else {
    // If the request is not POST, redirect back to login
    header("Location: login.php");
    exit();
}
?>
