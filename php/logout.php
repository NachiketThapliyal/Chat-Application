<?php
        include_once("login.php");
        $statusOffline = "Offline";
        $logoutQuery = "UPDATE `users` SET status = '{$statusOffline}' WHERE id = '{$_SESSION["id"]}'";
        $runLogoutQuery = mysqli_query($conn, $logoutQuery);

        if ($runLogoutQuery) {
    // Unset all of the session variables
    // Initialize the session
    session_start();
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page
header("location: ../login.php");
exit;
}
?>

           
