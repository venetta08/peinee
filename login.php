<?php
// Start the session to check for any existing session
session_start();

// If the admin is already logged in, redirect to the dashboard
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    header("Location: ../admin/views/dashboard.php");
    exit();
}

// Check for any error message passed via the URL (after a failed login)
$error_message = isset($_GET['error']) ? $_GET['error'] : '';
?>

<!-- HTML for Login Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/admin_styles.css"> <!-- Update CSS path -->
</head>
<body>
    <h2>Admin Login</h2>

    <?php if ($error_message): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>

    <form method="POST" action="login_process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
