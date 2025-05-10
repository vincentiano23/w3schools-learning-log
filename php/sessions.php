<?php
// =============================================
// 📘 PHP Sessions - Beginner-Friendly Tutorial
// =============================================

// Start session (must be at the top before any output)
session_start();

// Set session variables
$_SESSION["username"] = "vincent";
$_SESSION["role"] = "student";

// Display session variables
echo "🔹 Welcome, " . $_SESSION["username"] . "!<br>";
echo "Your role is: " . $_SESSION["role"] . "<br><br>";

// Check if session is set
if (isset($_SESSION["username"])) {
    echo "Session is active.<br>";
} else {
    echo "No active session.<br>";
}

// To remove a session variable:
// unset($_SESSION["username"]);

// To destroy the whole session:
// session_destroy();
?>
