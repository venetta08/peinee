<?php
// Include routing logic
include_once 'routes.php';
// Include the necessary files
include_once 'controllers/HomeController.php';
// Create an instance of the controller and call the index method
$controller = new HomeController();
$controller->index();
