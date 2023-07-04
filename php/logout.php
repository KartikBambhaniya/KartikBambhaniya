<?php
session_start();

// Destroy the session
session_destroy();

header("Location: ../Admin.php"); // Redirect to login page
exit();
?>
