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
    <h2>List Events</h2>
    <?php
    include '../../components/dataTable.php'; // Include the admin footer
    ?>
    <!-- Modal -->
    <div class="modal fade slide-from-right" id="rightSlideModal" tabindex="-1" aria-labelledby="rightSlideModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-primary btn-icons">
                        <i class="fa-solid fa-pen-to-square"></i>Edit
                    </button>
                    <button type="button" class="btn btn-primary btn-icons">
                        <i class="fa-regular fa-trash-can"></i>Delete
                    </button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-name"><i class="fa-solid fa-bullhorn mr-3"></i>Annoucemnet</div>
                    <h1 class="slide-title" id="annoucemnetTitle">
                        Announcement Title
                    </h1>
                    <div class="tag-wrapper">
                        <div class="tag" id="announDate">
                            12-09-2003
                        </div>
                        <div class="tag" id="announId">
                            annouce001 </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="container-title">Content</div>
                        <div class="content-container">
                            <p>A dialog is a type of modal window that appears in front of app content to provide critical information, or prompt for a decision to be made.</p>
                            <p>A dialog is a type of modal window that appears in front of app content to provide critical information, or prompt for a decision to be made.</p>
                            <p>A dialog is a type of modal window that appears in front of app content to provide critical information, or prompt for a decision to be made.</p>
                            <p>A dialog is a type of modal window that appears in front of app content to provide critical information, or prompt for a decision to be made.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <span class="me-auto footer-content">Updated Staff ID: <strong id="staffID">ST001</strong></span>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include '../../components/footer.php'; // Include the admin footer
?>