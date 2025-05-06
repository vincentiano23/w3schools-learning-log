<?php
// =============================================
// 📘 PHP Data Types - Full Practice File
// =============================================

// ---------------------------------------------
// 🔹 1. STRING
// ---------------------------------------------
// A string is a sequence of characters. Can be single or double quoted.

$singleQuote = 'Hello, World!';
$doubleQuote = "Hello, PHP!";

echo "🔹 String Example:<br>";
echo $singleQuote . "<br>";
echo $doubleQuote . "<br><br>";


// ---------------------------------------------
// 🔹 2. INTEGER
// ---------------------------------------------
// Integers are whole numbers (positive or negative).

$decimal = 42;
$negative = -42;
$octal = 052; // Octal representation (42 in decimal)
$hex = 0x2A; // Hexadecimal (42 in decimal)
$binary = 0b101010; // Binary (42 in decimal)

echo "🔹 Integer Example:<br>";
echo "Decimal: $decimal <br>";
echo "Octal: $octal <br>";
echo "Hexadecimal: $hex <br>";
echo "Binary: $binary <br><br>";


// ---------------------------------------------
// 🔹 3. FLOAT (DOUBLE)
// ---------------------------------------------
// Floating point numbers with decimal or exponent notation.

$float = 3.14;
$scientific = 1.2e3; // 1200 in scientific notation

echo "🔹 Float Example:<br>";
echo "Float: $float <br>";
echo "Scientific: $scientific <br><br>";


// ---------------------------------------------
// 🔹 4. BOOLEAN
// ---------------------------------------------
// Boolean values are either TRUE or FALSE.

$trueVar = true;
$falseVar = false;

echo "🔹 Boolean Example:<br>";
var_dump($trueVar);  // Output: bool(true)
echo "<br>";
var_dump($falseVar); // Output: bool(false)
echo "<br><br>";


// ---------------------------------------------
// 🔸 5. ARRAY
// ---------------------------------------------
// Arrays hold multiple values and come in 3 types.

// 1️⃣ Indexed array
$colors = ["Red", "Green", "Blue"];

// 2️⃣ Associative array
$ages = ["Peter" => 35, "Ben" => 37, "Joe" => 43];

// 3️⃣ Multidimensional array
$contacts = [
    "John" => ["phone" => "123456789", "email" => "john@example.com"],
    "Jane" => ["phone" => "987654321", "email" => "jane@example.com"]
];

echo "🔸 Array Example:<br>";
print_r($colors);
echo "<br>";
print_r($ages);
echo "<br>";
print_r($contacts);
echo "<br><br>";


// ---------------------------------------------
// 🔸 6. OBJECT
// ---------------------------------------------
// Objects are instances of classes. Useful for OOP.

class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . ".";
    }
}

$myCar = new Car("black", "Volvo");

echo "🔸 Object Example:<br>";
echo $myCar->message();
echo "<br><br>";


// ---------------------------------------------
// 🔸 7. NULL
// ---------------------------------------------
// A variable with NULL has no value.

$nothing = null;

echo "🔸 NULL Example:<br>";
var_dump($nothing);
echo "<br><br>";


// ---------------------------------------------
// 🔸 8. RESOURCE (Advanced)
// ---------------------------------------------
// Special variable for external resources like file handles or DB connections.
// Not displayed directly — usually returned by functions like fopen().

echo "✅ All data types demonstrated!";
?>
