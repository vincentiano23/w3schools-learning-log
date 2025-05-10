<?php
// =============================================
// 📘 PHP Cookies - Beginner-Friendly Tutorial
// =============================================

// Set a cookie (name, value, expiration time in seconds, path)
// This will expire in 1 day (86400 seconds)
setcookie("user", "Vincent Muli", time() + 86400, "/");

// Read the cookie (after refreshing the page once)
echo "🔹 Cookie example:<br>";

if (isset($_COOKIE["user"])) {
    echo "Welcome back, " . $_COOKIE["user"] . "!<br>";
} else {
    echo "Cookie named 'user' is not set yet.<br>";
}

// To delete a cookie:
// setcookie("user", "", time() - 3600, "/");
?>
