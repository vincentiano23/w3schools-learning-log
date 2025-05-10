<?php
include "db_connect.php";

$name = $email = "";
$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    // Insert using prepared statement
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        $success = "✅ Data inserted successfully!";
    } else {
        $error = "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head><title>Insert Data</title></head>
<body>

<h2>🔹 PHP + MySQL Insert Form</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($success) echo "<p style='color:green;'>$success</p>";
if ($error) echo "<p style='color:red;'>$error</p>";
?>

</body>
</html>
