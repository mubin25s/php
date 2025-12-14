<!DOCTYPE html>
<html>
<head>
    <title>Car Class</title>
</head>
<body>

<!-- 
    PROBLEM:
    1. Create a class named 'Car'.
    2. Add public properties: '$brand' and '$color'.
    3. Create a function (method) inside the class named 'startEngine'.
    4. Inside the function, use 'echo' to print "The [color] [brand] engine is starting...".
       (Note: You will need to access properties directly or set them first. Since we haven't used $this yet in this specific simple example, just hardcode or pass arguments, BUT better to use $this as standard).
    
    Correction for best practice:
    3. Create a function 'startEngine' that uses '$this->brand' and '$this->color'.
    4. Instantiate a new Car object, set brand to "Toyota" and color to "Red".
    5. Call the 'startEngine' function.
-->

<?php
class Car {
    public $brand;
    public $color;

    // A function inside a class is called a Method
    public function startEngine() {
        echo "<p>The {$this->color} {$this->brand} engine is starting...</p>";
    }
}

// Create an object
$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Red";

// Call the function
$myCar->startEngine();

$car2 = new Car();
$car2->brand = "Honda";
$car2->color = "Blue";
$car2->startEngine();
?>

</body>
</html>
