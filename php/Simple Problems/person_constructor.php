<!DOCTYPE html>
<html>
<head>
    <title>Person Constructor</title>
</head>
<body>

<!-- 
    PROBLEM:
    1. Create a class named 'Person'.
    2. Add properties '$name' and '$age'.
    3. Create a '__construct' function that accepts '$name' and '$age' and assigns them to the class properties using '$this->'.
    4. Create a function 'introduce' that prints "Hi, I am [name] and I am [age] years old.".
    5. Create a new Person object with name "John" and age 30.
    6. Call the 'introduce' function.
-->

<?php
class Person {
    public $name;
    public $age;

    // Constructor function
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Custom function
    public function introduce() {
        echo "<h3>Hi, I am {$this->name} and I am {$this->age} years old.</h3>";
    }
}

// Instantiate with constructor arguments
$person1 = new Person("John", 30);
$person1->introduce();

$person2 = new Person("Sarah", 25);
$person2->introduce();
?>

</body>
</html>
