<?php
// =============================================
// 📘 PHP Operators - Full Guide with Examples
// =============================================


// ---------------------------------------------
// 🔹 1. Arithmetic Operators
// ---------------------------------------------
// Used to perform basic math operations

$a = 10;
$b = 3;

echo "🔹 Arithmetic Operators:<br>";
echo "$a + $b = " . ($a + $b) . "<br>"; // Addition
echo "$a - $b = " . ($a - $b) . "<br>"; // Subtraction
echo "$a * $b = " . ($a * $b) . "<br>"; // Multiplication
echo "$a / $b = " . ($a / $b) . "<br>"; // Division
echo "$a % $b = " . ($a % $b) . "<br>"; // Modulus (remainder)
echo "$a ** $b = " . ($a ** $b) . "<br><br>"; // Exponentiation


// ---------------------------------------------
// 🔹 2. Assignment Operators
// ---------------------------------------------
// Assign values using = and other combined operators

$x = 5;
echo "🔹 Assignment Operators:<br>";
echo "Initial x: $x<br>";
$x += 3; // x = x + 3
echo "x += 3: $x<br>";
$x -= 2; // x = x - 2
echo "x -= 2: $x<br>";
$x *= 4; // x = x * 4
echo "x *= 4: $x<br>";
$x /= 2; // x = x / 2
echo "x /= 2: $x<br>";
$x %= 3; // x = x % 3
echo "x %= 3: $x<br><br>";


// ---------------------------------------------
// 🔹 3. Comparison Operators
// ---------------------------------------------
// Used to compare two values (returns boolean)

$a = 10;
$b = "10";

echo "🔹 Comparison Operators:<br>";
var_dump($a == $b);  // true (value equal)
var_dump($a === $b); // false (type not equal)
var_dump($a != $b);  // false
var_dump($a !== $b); // true
var_dump($a > 5);    // true
var_dump($a < 20);   // true
var_dump($a >= 10);  // true
var_dump($a <= 9);   // false
echo "<br><br>";


// ---------------------------------------------
// 🔹 4. Increment / Decrement Operators
// ---------------------------------------------

$x = 5;

echo "🔹 Increment / Decrement:<br>";
echo "x: $x<br>";
echo "Pre-increment (++x): " . (++$x) . "<br>";
echo "Post-increment (x++): " . ($x++) . "<br>";
echo "After post-increment: $x<br>";
echo "Pre-decrement (--x): " . (--$x) . "<br>";
echo "Post-decrement (x--): " . ($x--) . "<br>";
echo "After post-decrement: $x<br><br>";


// ---------------------------------------------
// 🔹 5. Logical Operators
// ---------------------------------------------
// Combine conditional expressions

$val1 = true;
$val2 = false;

echo "🔹 Logical Operators:<br>";
var_dump($val1 && $val2); // AND
var_dump($val1 || $val2); // OR
var_dump(!$val2);         // NOT
echo "<br><br>";


// ---------------------------------------------
// 🔹 6. String Operators
// ---------------------------------------------
// Concatenate strings

$str1 = "Hello";
$str2 = "World";

echo "🔹 String Operators:<br>";
$concat = $str1 . " " . $str2; // Concatenation
echo $concat . "<br>";

$str1 .= " PHP"; // Append to $str1
echo $str1 . "<br><br>";


// ---------------------------------------------
// 🔹 7. Array Operators
// ---------------------------------------------
// Used to compare or merge arrays

$arr1 = ["a" => "apple", "b" => "banana"];
$arr2 = ["b" => "banana", "a" => "apple"];
$arr3 = ["c" => "cherry"];

echo "🔹 Array Operators:<br>";
var_dump($arr1 == $arr2);  // true (same content)
var_dump($arr1 === $arr2); // false (order matters)
$merged = $arr1 + $arr3;   // Union of arrays
print_r($merged);
echo "<br><br>";


// ---------------------------------------------
// 🔹 8. Spaceship Operator (PHP 7+)
// ---------------------------------------------
// Returns -1, 0, or 1 when comparing two values

echo "🔹 Spaceship Operator:<br>";
echo "10 <=> 20 = " . (10 <=> 20) . "<br>"; // -1
echo "20 <=> 20 = " . (20 <=> 20) . "<br>"; // 0
echo "30 <=> 20 = " . (30 <=> 20) . "<br><br>"; // 1


// ---------------------------------------------
// 🔹 9. Null Coalescing Operator (PHP 7+)
// ---------------------------------------------
// Returns first operand if it's set and not null

$user = $_GET["user"] ?? "Guest";
echo "🔹 Null Coalescing:<br>";
echo "Hello, $user<br>";
?>
