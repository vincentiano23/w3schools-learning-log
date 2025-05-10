<?php
// =============================================
// 🔌 Database Connection
// =============================================

$host = "localhost";       // Host name (localhost for local dev)
$user = "root";            // Default user for XAMPP/WAMP
$password = "";            // Default password is empty
$dbname = "learning_php";  // Database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
// echo "✅ Connected successfully!";
?>
