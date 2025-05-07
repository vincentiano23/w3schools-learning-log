<?php
// =============================================
// 📘 PHP Functions - Full Tutorial
// =============================================


// ---------------------------------------------
// 🔹 1. Basic Function
// ---------------------------------------------

echo "🔹 Basic Function:<br>";

function greet() {
    echo "Hello from a function!<br>";
}

greet(); // Call the function
echo "<br>";


// ---------------------------------------------
// 🔹 2. Function with Parameters
// ---------------------------------------------

echo "🔹 Function with Parameters:<br>";

function greetUser($name) {
    echo "Hello, $name!<br>";
}

greetUser("Vincent");
greetUser("PHP Learner");
echo "<br>";


// ---------------------------------------------
// 🔹 3. Default Parameter Value
// ---------------------------------------------

echo "🔹 Default Parameters:<br>";

function welcome($name = "Guest") {
    echo "Welcome, $name!<br>";
}

welcome();        // Uses default
welcome("Muli");  // Overrides default
echo "<br>";


// ---------------------------------------------
// 🔹 4. Return Values
// ---------------------------------------------

echo "🔹 Return Values:<br>";

function add($a, $b) {
    return $a + $b;
}

$result = add(10, 20);
echo "10 + 20 = $result<br><br>";


// ---------------------------------------------
// 🔹 5. Type Declarations (PHP 7+)
// ---------------------------------------------

echo "🔹 Type Declarations:<br>";

function multiply(float $a, float $b): float {
    return $a * $b;
}

echo "2.5 * 4 = " . multiply(2.5, 4) . "<br><br>";


// ---------------------------------------------
// 🔹 6. Passing by Reference
// ---------------------------------------------

echo "🔹 Passing by Reference:<br>";

function addOne(&$num) {
    $num += 1;
}

$counter = 5;
addOne($counter);
echo "After addOne: $counter<br><br>";


// ---------------------------------------------
// 🔹 7. Variable Scope
// ---------------------------------------------

echo "🔹 Variable Scope:<br>";

$globalVar = "outside";

function testScope() {
    global $globalVar; // Access global variable
    $localVar = "inside";
    echo "Inside: $globalVar, $localVar<br>";
}

testScope();
// echo $localVar; // ❌ Error: undefined outside the function
echo "<br>";


// ---------------------------------------------
// 🔹 8. Anonymous Functions (Closures)
// ---------------------------------------------

echo "🔹 Anonymous Functions:<br>";

$greet = function($name) {
    return "Hi, $name!";
};

echo $greet("Vincent") . "<br><br>";


// ---------------------------------------------
// 🔹 9. Arrow Functions (PHP 7.4+)
// ---------------------------------------------

echo "🔹 Arrow Functions:<br>";

$square = fn($n) => $n * $n;

echo "Square of 5 is: " . $square(5) . "<br><br>";
?>
