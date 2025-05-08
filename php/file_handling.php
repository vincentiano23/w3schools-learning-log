<?php
// =============================================
// 📘 PHP File Handling - Complete Tutorial
// =============================================


// ---------------------------------------------
// 🔹 1. Create and Write to a File
// ---------------------------------------------

$filename = "example.txt";

// 'w' mode: Create or overwrite
$file = fopen($filename, "w") or die("Unable to open file!");
fwrite($file, "Hello, this is a test file.\n");
fwrite($file, "Learning PHP file handling.\n");
fclose($file);

echo "File written successfully.<br><br>";


// ---------------------------------------------
// 🔹 2. Read From a File
// ---------------------------------------------

$file = fopen($filename, "r") or die("Unable to open file!");
echo "🔹 Reading file content:<br>";

while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

echo "<br>";


// ---------------------------------------------
// 🔹 3. Append to a File
// ---------------------------------------------

$file = fopen($filename, "a") or die("Unable to open file!");
fwrite($file, "This line was appended later.\n");
fclose($file);

echo "Content appended to file.<br><br>";


// ---------------------------------------------
// 🔹 4. Check if File Exists
// ---------------------------------------------

if (file_exists($filename)) {
    echo "File '$filename' exists and is " . filesize($filename) . " bytes.<br><br>";
} else {
    echo "File does not exist.<br><br>";
}


// ---------------------------------------------
// 🔹 5. Read Entire File with file_get_contents()
// ---------------------------------------------

echo "🔹 Entire file content using file_get_contents():<br>";
$content = file_get_contents($filename);
echo nl2br($content); // Converts \n to <br> for HTML display

?>
