<?php
// Display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get the full request URI
$request = $_SERVER['REQUEST_URI'];

// Define base path and remove it from the request URI
$base_path = '/venetta/peinee'; // Adjust as needed
if (strpos($request, $base_path) === 0) {
    $request = substr($request, strlen($base_path));
}

// Define base directory for admin
$admin_base = '/admin';

// Debugging: Show final request after base path removal
echo "Final Request URI: " . $request . "<br>";

// Admin Routing
if (strpos($request, $admin_base) === 0) {
    switch ($request) {
        case '/admin/login':
        case '/admin/login/':
            include_once 'admin/login.php';
            break;

        case '/admin/dashboard':
        case '/admin/dashboard/':
            include_once 'admin/views/dashboard.php';
            break;

        case '/admin/events':
        case '/admin/events/':
            include_once 'admin/views/events/list.php';
            break;

        case '/admin/logout':
        case '/admin/logout/':
            include_once 'admin/logout.php';
            break;

        default:
            http_response_code(404);
            echo "404 - Admin Page Not Found";
            break;
    }
} else {
    // Public-facing routing
    switch ($request) {
        case '':
        case '/':
            include_once 'views/home.php';
            break;

        case '/about':
            include_once 'views/about.php';
            break;

        case '/contact':
            include_once 'views/contact.php';
            break;

        default:
            http_response_code(404);
            echo "404 - Page Not Found";
            break;
    }
}
?>
