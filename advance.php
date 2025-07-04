<?php 
// Object-Oriented Programming in PHP
// This example demonstrates class creation, object instantiation, and method usage.
class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function introduce() {
        return "My name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}
class Test {
    function __construct() {
        echo "Constructor called<br>";
    }
    function __destruct() {
        echo "Destructor called";
    }
}
$obj = new Test();
?>





<
// This example demonstrates the use of a constructor and destructor in PHP.
<?php
class Car {
    public $brand;
    function __construct($brand) {
        $this->brand = $brand;
    }
    function getBrand() {
        return $this->brand;
    }
}

$car = new Car("Toyota");
echo $car->getBrand();
?>

 // This example demonstrates inheritance in PHP.
<?php
class Animal {
    function sound() {
        echo "Animal sound";
    }
}
class Dog extends Animal {
    function sound() {
        echo "Bark";
    }
}
$dog = new Dog();
$dog->sound(); // Bark
?>

    // This example demonstrates the use of interfaces in PHP.

<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch()) {
    echo $row['name'] . "<br>";
}
?>

<?php
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([1]);
$user = $stmt->fetch();
echo $user['name'];
?>


<?php
mail("test@example.com", "Hello", "This is a test", "From: you@example.com");
?>




