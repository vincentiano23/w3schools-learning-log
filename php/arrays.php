<?php
// =============================================
// 📘 PHP Arrays - Full Tutorial with Examples
// =============================================


// ---------------------------------------------
// 🔹 1. Indexed Arrays
// ---------------------------------------------

echo "🔹 Indexed Arrays:<br>";

$fruits = ["apple", "banana", "cherry"];

echo $fruits[0] . "<br>"; // Output: apple
echo $fruits[1] . "<br>"; // Output: banana

// Add new item
$fruits[] = "mango";

// Loop through indexed array
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}
echo "<br>";


// ---------------------------------------------
// 🔹 2. Associative Arrays
// ---------------------------------------------

echo "🔹 Associative Arrays:<br>";

$person = [
    "name" => "Vincent",
    "age" => 25,
    "language" => "PHP"
];

echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";

// Loop through associative array
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
echo "<br>";


// ---------------------------------------------
// 🔹 3. Multidimensional Arrays
// ---------------------------------------------

echo "🔹 Multidimensional Arrays:<br>";

$users = [
    ["name" => "Alice", "age" => 20],
    ["name" => "Bob", "age" => 30],
    ["name" => "Charlie", "age" => 25],
];

foreach ($users as $user) {
    echo "User: " . $user["name"] . ", Age: " . $user["age"] . "<br>";
}
echo "<br>";


// ---------------------------------------------
// 🔹 4. Array Functions
// ---------------------------------------------

echo "🔹 Common Array Functions:<br>";

$numbers = [4, 2, 8, 6];

echo "Count: " . count($numbers) . "<br>";
sort($numbers); // Sort ascending

echo "Sorted Numbers: ";
print_r($numbers); // Output entire array
echo "<br>";

$merged = array_merge($fruits, $numbers); // Merge arrays
echo "Merged Array: ";
print_r($merged);
echo "<br>";


// ---------------------------------------------
// 🔹 5. Checking Elements
// ---------------------------------------------

echo "🔹 Checking Array Elements:<br>";

if (in_array("banana", $fruits)) {
    echo "Banana is in the array.<br>";
}

if (array_key_exists("name", $person)) {
    echo "Key 'name' exists in the person array.<br>";
}
echo "<br>";


// ---------------------------------------------
// 🔹 6. Array Manipulation
// ---------------------------------------------

echo "🔹 Array Manipulation:<br>";

$colors = ["red", "green"];
array_push($colors, "blue"); // Add to end
array_unshift($colors, "yellow"); // Add to beginning
print_r($colors);
echo "<br>";

array_pop($colors); // Remove last
array_shift($colors); // Remove first
print_r($colors);
echo "<br>";
?>
