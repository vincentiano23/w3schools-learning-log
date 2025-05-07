<?php
// =============================================
// 📘 PHP Control Structures - Complete Tutorial
// =============================================


// ---------------------------------------------
// 🔹 1. if, else, elseif
// ---------------------------------------------

$score = 85;

echo "🔹 if / else / elseif:<br>";

if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 80) {
    echo "Grade: B<br>";
} elseif ($score >= 70) {
    echo "Grade: C<br>";
} else {
    echo "Grade: F<br>";
}
echo "<br>";


// ---------------------------------------------
// 🔹 2. switch
// ---------------------------------------------

$day = "Wednesday";

echo "🔹 switch:<br>";

switch ($day) {
    case "Monday":
        echo "Start of the week<br>";
        break;
    case "Wednesday":
        echo "Midweek day<br>";
        break;
    case "Friday":
        echo "End of the work week<br>";
        break;
    default:
        echo "Just another day<br>";
}
echo "<br>";


// ---------------------------------------------
// 🔹 3. while loop
// ---------------------------------------------

$count = 1;

echo "🔹 while loop:<br>";
while ($count <= 5) {
    echo "Count is: $count<br>";
    $count++;
}
echo "<br>";


// ---------------------------------------------
// 🔹 4. do...while loop
// ---------------------------------------------

$count = 1;

echo "🔹 do...while loop:<br>";
do {
    echo "Count is: $count<br>";
    $count++;
} while ($count <= 5);
echo "<br>";


// ---------------------------------------------
// 🔹 5. for loop
// ---------------------------------------------

echo "🔹 for loop:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i<br>";
}
echo "<br>";


// ---------------------------------------------
// 🔹 6. foreach loop
// ---------------------------------------------

$fruits = ["apple", "banana", "cherry"];

echo "🔹 foreach loop:<br>";
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}
echo "<br>";


// ---------------------------------------------
// 🔹 7. Nested control structures
// ---------------------------------------------

echo "🔹 Nested structures:<br>";
for ($i = 1; $i <= 3; $i++) {
    echo "Outer loop $i:<br>";
    for ($j = 1; $j <= 2; $j++) {
        echo "- Inner loop $j<br>";
    }
}
?>
