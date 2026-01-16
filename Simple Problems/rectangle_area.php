<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Area</title>
</head>
<body>

<!-- 
    PROBLEM:
    1. Create a class 'Rectangle' with properties '$width' and '$height'.
    2. Use a constructor to initialize these values.
    3. Create a function 'getArea' that calculates and returns the area ($width * $height).
    4. Create a function 'displayInfo' that prints "Dimensions: [width]x[height] | Area: [area]".
    5. Create a Rectangle object (10, 5) and call 'displayInfo'.
-->

<?php
class Rectangle {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Function to return a value
    public function getArea() {
        return $this->width * $this->height;
    }

    public function displayInfo() {
        $area = $this->getArea(); // Calling another function inside the class using $this
        echo "Dimensions: {$this->width}x{$this->height} | Area: {$area} <br>";
    }
}

$rect1 = new Rectangle(10, 5);
$rect1->displayInfo();

$rect2 = new Rectangle(7, 3);
$rect2->displayInfo();
?>

</body>
</html>
