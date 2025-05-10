<?php
// =============================================
// 📘 PHP OOP (Object-Oriented Programming) Tutorial
// =============================================

// ---------------------------------------------
// 🔹 1. Class and Object
// ---------------------------------------------

class Car {
    public $brand;
    public $color;

    // Constructor (runs when object is created)
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    public function drive() {
        echo "The {$this->color} {$this->brand} is driving.<br>";
    }
}

// Create object
$car1 = new Car("Toyota", "Red");
$car2 = new Car("Honda", "Blue");

$car1->drive();
$car2->drive();

echo "<br>";


// ---------------------------------------------
// 🔹 2. Inheritance
// ---------------------------------------------

class ElectricCar extends Car {
    public $batteryRange;

    public function __construct($brand, $color, $batteryRange) {
        parent::__construct($brand, $color); // Call parent constructor
        $this->batteryRange = $batteryRange;
    }

    public function charge() {
        echo "Charging the {$this->brand} for {$this->batteryRange} km.<br>";
    }
}

$eCar = new ElectricCar("Tesla", "Black", 400);
$eCar->drive();
$eCar->charge();

echo "<br>";


// ---------------------------------------------
// 🔹 3. Access Modifiers
// ---------------------------------------------

class User {
    public $name = "Guest";        // Accessible everywhere
    protected $role = "member";    // Accessible in this class + subclasses
    private $password = "secret";  // Accessible only in this class

    public function showRole() {
        echo "Role: {$this->role}<br>";
    }

    private function showPassword() {
        echo "Password: {$this->password}<br>";
    }
}

$user = new User();
echo "User: {$user->name}<br>";
$user->showRole();
// $user->showPassword(); // ❌ Cannot access private method

echo "<br>";


// ---------------------------------------------
// 🔹 4. Static Methods
// ---------------------------------------------

class MathUtil {
    public static function add($a, $b) {
        return $a + $b;
    }
}

echo "Static Method: 5 + 10 = " . MathUtil::add(5, 10) . "<br><br>";


// ---------------------------------------------
// 🔹 5. Getters & Setters (Encapsulation)
// ---------------------------------------------

class Account {
    private $balance = 0;

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$acc = new Account();
$acc->deposit(100);
echo "Account Balance: $" . $acc->getBalance() . "<br>";
?>
