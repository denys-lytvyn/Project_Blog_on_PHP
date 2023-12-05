<?php

// Start a new or resume an existing session
session_start();

// Include the file containing path constants (assuming it's named "path.php")
include "path.php";

// Unset specific session variables to log out the user
unset($_SESSION['id']);
unset($_SESSION['login']);
unset($_SESSION['admin']);

// Redirect the user to the base URL after logging out
header('location: ' . BASE_URL);

?>