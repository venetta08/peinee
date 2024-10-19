<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    // Redirect to login page if not logged in
    header("Location: ../login.php");
    exit();
}
?>

<?php
include '../components/header.php'; // Include the admin header
?>
<main>
    <h1>Event</h1>
   
   

</main>
<?php
include '../components/footer.php'; // Include the admin footer
?>