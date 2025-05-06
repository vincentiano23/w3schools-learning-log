<?php
// =============================================
// 📘 PHP Numbers - Complete Guide
// =============================================


// ---------------------------------------------
// 🔹 1. Integer
// ---------------------------------------------
// Whole numbers, positive or negative, without decimal points

$int1 = 100;
$int2 = -25;

echo "🔹 Integers:<br>";
var_dump($int1); // int(100)
var_dump($int2); // int(-25)
echo "<br><br>";


// ---------------------------------------------
// 🔹 2. Float (Double)
// ---------------------------------------------
// Numbers with decimal points or in exponential form

$float1 = 3.14;
$float2 = 1.2e3; // 1200

echo "🔹 Floats:<br>";
var_dump($float1); // float(3.14)
var_dump($float2); // float(1200)
echo "<br><br>";


// ---------------------------------------------
// 🔹 3. is_int(), is_float(), is_numeric()
// ---------------------------------------------
// These functions check the type of numeric values

echo "🔹 Type Checking:<br>";
var_dump(is_int($int1));       // true
var_dump(is_float($float1));   // true
var_dump(is_numeric("123"));   // true (string containing number)
var_dump(is_numeric("abc"));   // false
echo "<br><br>";


// ---------------------------------------------
// 🔹 4. Type Casting
// ---------------------------------------------
// Convert from one type to another

$number = "42";
$castInt = (int)$number;
$castFloat = (float)$number;

echo "🔹 Type Casting:<br>";
echo "Original (string): $number<br>";
echo "To Integer: $castInt<br>";
echo "To Float: $castFloat<br><br>";


// ---------------------------------------------
// 🔹 5. Mathematical Operations
// ---------------------------------------------
// Basic arithmetic operations: + - * / % **

$a = 10;
$b = 3;

echo "🔹 Math Operations:<br>";
echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . " (modulo)<br>";
echo "$a ** $b = " . ($a ** $b) . " (exponentiation)<br><br>";


// ---------------------------------------------
// 🔹 6. Built-in Math Functions
// ---------------------------------------------
// PHP provides a rich set of numeric functions

echo "🔹 Math Functions:<br>";
echo "abs(-5) = " . abs(-5) . "<br>";
echo "sqrt(16) = " . sqrt(16) . "<br>";
echo "round(3.6) = " . round(3.6) . "<br>";
echo "ceil(3.2) = " . ceil(3.2) . " (round up)<br>";
echo "floor(3.9) = " . floor(3.9) . " (round down)<br>";
echo "max(3, 5, 9) = " . max(3, 5, 9) . "<br>";
echo "min(3, 5, 9) = " . min(3, 5, 9) . "<br>";
echo "pi() = " . pi() . "<br>";
echo "rand(1, 10) = " . rand(1, 10) . " (random between 1 and 10)<br><br>";


// ---------------------------------------------
// 🔹 7. Formatting Numbers
// ---------------------------------------------
// number_format() can format numbers with commas and decimal places

$price = 1234567.891;

echo "🔹 Number Formatting:<br>";
echo number_format($price) . " (no decimals)<br>";
echo number_format($price, 2) . " (2 decimal places)<br>";
echo number_format($price, 2, '.', ',') . " (custom format)<br><br>";


// ---------------------------------------------
// 🔹 8. Constants for PHP_INT_MAX
// ---------------------------------------------
// Useful to know the limits

echo "🔹 PHP Number Limits:<br>";
echo "Max int: " . PHP_INT_MAX . "<br>";
echo "Min int: " . PHP_INT_MIN . "<br>";
echo "Max float: " . PHP_FLOAT_MAX . "<br>";
?>
