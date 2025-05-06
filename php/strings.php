<?php
// =============================================
// 📘 PHP Strings - Practice and Examples
// =============================================


// ---------------------------------------------
// 🔹 1. Declaring Strings
// ---------------------------------------------
$greeting = "Hello, world!";
$name = 'Vincent';

echo "🔹 Declaring Strings:<br>";
echo $greeting . "<br>";
echo $name . "<br><br>";


// ---------------------------------------------
// 🔹 2. String Concatenation
// ---------------------------------------------
// Use the (.) operator to join strings

$fullGreeting = $greeting . " My name is " . $name . ".";
echo "🔹 String Concatenation:<br>";
echo $fullGreeting . "<br><br>";


// ---------------------------------------------
// 🔹 3. String Length
// ---------------------------------------------
// Use strlen() to get the number of characters

echo "🔹 String Length:<br>";
echo "Length of name: " . strlen($name) . "<br><br>";


// ---------------------------------------------
// 🔹 4. Word Count
// ---------------------------------------------
// Use str_word_count() to count words in a string

$sentence = "PHP is a popular server-side scripting language.";
echo "🔹 Word Count:<br>";
echo str_word_count($sentence) . " words<br><br>";


// ---------------------------------------------
// 🔹 5. String Reverse
// ---------------------------------------------
// Use strrev() to reverse the characters

echo "🔹 Reverse String:<br>";
echo strrev($name) . "<br><br>";


// ---------------------------------------------
// 🔹 6. Finding Substring Position
// ---------------------------------------------
// strpos() finds the position of a substring

echo "🔹 Finding Substring:<br>";
echo "Position of 'PHP' in sentence: " . strpos($sentence, "PHP") . "<br><br>";


// ---------------------------------------------
// 🔹 7. Replacing Text
// ---------------------------------------------
// str_replace() replaces part of a string

$replaced = str_replace("PHP", "Python", $sentence);
echo "🔹 String Replace:<br>";
echo $replaced . "<br><br>";


// ---------------------------------------------
// 🔹 8. Changing Case
// ---------------------------------------------
echo "🔹 Changing Case:<br>";
echo strtolower($name) . " (lowercase)<br>";
echo strtoupper($name) . " (uppercase)<br>";
echo ucfirst("vincent") . " (first letter capitalized)<br><br>";


// ---------------------------------------------
// 🔹 9. Trimming Whitespace
// ---------------------------------------------
$withSpaces = "   Hello!   ";
echo "🔹 Trimming Whitespace:<br>";
echo "Before trim: '" . $withSpaces . "'<br>";
echo "After trim: '" . trim($withSpaces) . "'<br><br>";


// ---------------------------------------------
// 🔹 10. Escaping Characters
// ---------------------------------------------
// Use backslashes to escape quotes inside strings

$quote = 'He said, "It\'s a beautiful day!"';
echo "🔹 Escaping Quotes:<br>";
echo $quote;
?>
