<?php
session_start();
include "config.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];

    if ($UserName == 'admin@kartikbambhaniya.com' && $Password == 'Admin@2005') {
        $_SESSION['UserName'] = $UserName;
        header("Location: ../Dashboard.Admin.php"); // Redirect to home page
        exit();
    } else {
        header("Location: ../Admin.php"); // Redirect to home page
        exit();
    }
}