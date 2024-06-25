<?php
session_start(); // Start the session (if not already started)

// Unset specific session variables related to login
unset($_SESSION['id']); // Assuming 'user_id' is your session variable holding user identification

// Destroy the session data
session_destroy();

// Redirect to the login page or any other page after logout
header("Location: index.php");
exit;