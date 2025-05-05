<?php
// =========================================
// 📘 PHP Variables - Practice and Examples
// =========================================

// 🔹 What is a variable?
// A variable is a container for storing data, like numbers, strings, or arrays.


// =========================================
// 🟢 Basic Variable Declaration
// =========================================
$name = "Vincent";        // String variable
$age = 23;                // Integer variable
$height = 5.9;            // Float variable
$isDeveloper = true;      // Boolean variable

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height feet<br>";
echo "Developer: " . ($isDeveloper ? 'Yes' : 'No') . "<br><br>";


// =========================================
// 🟢 Variable Naming Rules
// =========================================
// - Must start with a $ sign
// - Must start with a letter or underscore (_), not a number
// - Can only contain letters, numbers, and underscores
// - Are case-sensitive ($name ≠ $Name)

$Name = "Different from lowercase name";
echo "Another variable: $Name<br><br>";


// =========================================
// 🟢 Variable Scope
// =========================================
// Scope determines where a variable can be accessed
// - Local: Inside a function or method
// - Global: Outside of functions, accessible everywhere in the script
// - Static: Retains its value even after the function ends


$x = 10; // Global variable
 
function testScope() {
    $y = 20; // Local variable
    global $x; // Accessing global variable
    echo "Inside function: x = $x, y = $y<br>";
}

//static variable example
function testStatic() {
    static $count = 0; // Static variable
    $count++;
    echo "Static count: $count<br>";
}

// =========================================
// 🟢 Variable Variables
// =========================================
// Using a variable's value as the name of another variable

$foo = "bar";
$$foo = "I am the value of \$bar";

echo "<br>foo = $foo<br>";
echo "bar = $bar<br>";  // This works because $$foo = $bar


// =========================================
// 🟢 Constants vs. Variables
// =========================================
// Constants are like variables, but once defined, they cannot be changed

define("SITE_NAME", "My Learning Site");
echo "<br>Welcome to " . SITE_NAME;

// Uncommenting the next line will cause an error
// SITE_NAME = "Another Name";

?>
