<?php
// PROBLEM: Manage a list of Cars using Reference functions using ID.

class Car {
    public $id;
    public $model;
    public $mileage;

    public function __construct($id, $model, $mileage) {
        $this->id = $id;
        $this->model = $model;
        $this->mileage = $mileage;
    }
}

$garage = [];
$garage[] = new Car(101, "Toyota", 5000);
$garage[] = new Car(102, "Honda", 12000);
$garage[] = new Car(103, "Ford", 8000);

// Critical Logic 1: Find by ID and increase mileage
function driveCar(&$list, $targetId, $km) {
    for($i=0; $i<count($list); $i++) {
        if($list[$i]->id == $targetId) {
            $list[$i]->mileage += $km; // Modify directly
            return;
        }
    }
}

// Critical Logic 2: remove cars with high mileage (> 10000)
function removeOldCars(&$list) {
    for($i=0; $i<count($list); $i++) {
        if($list[$i]->mileage > 10000) {
            array_splice($list, $i, 1);
            $i--; // Adjust index after removal
        }
    }
}

// Operations
driveCar($garage, 103, 2500); // 8000 + 2500 = 10500
removeOldCars($garage); // Should remove Honda(12000) and now Ford(10500)

// Output
echo "<h3>Garage Status:</h3>";
foreach($garage as $c) {
    echo "ID: " . $c->id . " | Model: " . $c->model . " | Mileage: " . $c->mileage . "<br>";
}
?>
