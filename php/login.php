<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    // Generate a unique ID
    $uniqueId = unique_id();

    include 'config.php';

    $sql = mysqli_query($conn, "INSERT INTO `visiters` (`unique_id`, `FName`, `LName`, `DateTime`) VALUES ('$uniqueId', '$FName', '$LName', current_timestamp())");

    // Store the unique ID in the session
    $_SESSION['unique_id'] = $uniqueId;

    header("Location: ../Profile.php"); // Redirect to home page
    exit();
}

// Generate a unique ID
function unique_id($length = 13) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}
