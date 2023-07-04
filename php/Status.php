<?php

include "config.php";

$i = $_GET['i'];

$sql = mysqli_query($conn, "UPDATE messages SET Status = 'Old' WHERE SrNo = $i");

header("Location: ../Messages.Admin.php"); // Redirect to login page
exit();
?>