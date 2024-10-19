<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/venetta/peinee/config.php'; // Adjust to match your project structure
$logoImage = BASE_URL . "/admin/assets/images/logo.png";
$avatarImage = BASE_URL . "/admin/assets/images/avatar.png";
$avatarImage = BASE_URL . "/admin/assets/images/avatar.png";
$avatarImage = BASE_URL . "/admin/assets/images/avatar.png";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/admin/assets/fontawesome/css/all.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/admin/assets/bootstrap5/css/bootstrap.min.css">

    <link rel="stylesheet" href="/venetta/peinee/admin/assets/css/admin_styles.css">
</head>

<body>
    <header>
        <img class="logo" src="<?php echo $logoImage; ?>" alt="Logo of image">
        <?php include 'navbar.php'; ?>

        <div class="user-container">
            <div class="user-details">
                <div class="username">Gan Pei Nee</div>
                <div class="position">Manager</div>
            </div>
            <div class="img-profile-container dropdown">
                <a href="#" class="btn" role="button" id="profile-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $avatarImage; ?>" alt="Image Profile">
                </a>
                <ul class="dropdown-menu" aria-labelledby="profile-dropdown">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header>