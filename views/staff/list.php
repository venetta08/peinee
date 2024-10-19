<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    // Redirect to login page if not logged in
    header("Location: ../login.php");
    exit();
}
?>


<!-- File: admin/events/list.php -->
<?php
include '../../components/header.php'; // Include the admin header
?>

<main>
    <h2>List Staffs</h2>
    <!-- Code to list events goes here -->
</main>

<?php
include '../../components/footer.php'; // Include the admin footer
?>
