<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $EmailID = $_POST['EmailID'];
    $LinkedInID = $_POST['LinkedInID'];
    $Message = $_POST['Message'];
    $Status = "New";

    $sql = mysqli_query($conn, "INSERT INTO `messages` (`FName`, `LName`, `EmailID`, `LinkedInID`, `Messages`, `Status`) VALUES ('$FName', '$LName', '$EmailID', '$LinkedInID', '$Message', '$Status')");

    header("Location: ../Message.php"); // Redirect to Message page
    exit();
}
?>