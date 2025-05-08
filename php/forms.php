<?php
// =============================================
// 📘 PHP Forms and User Input - Full Tutorial
// =============================================

// ---------------------------------------------
// This script handles both the HTML form and the
// server-side logic for processing input.
// ---------------------------------------------

$name = $email = "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

// Sanitize user input
function sanitizeInput($data) {
    $data = trim($data);            // Remove spaces
    $data = stripslashes($data);    // Remove backslashes
    $data = htmlspecialchars($data);// Prevent HTML injection
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Handling</title>
</head>
<body>

<h2>🔹 User Input Form (POST Method)</h2>

<!-- HTML Form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red;">* <?php echo $nameErr; ?></span><br><br>

    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;">* <?php echo $emailErr; ?></span><br><br>

    <input type="submit" value="Submit">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr): ?>
    <h3>✅ Your Input:</h3>
    <p>Name: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
<?php endif; ?>

</body>
</html>
