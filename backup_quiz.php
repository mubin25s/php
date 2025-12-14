<!DOCTYPE html>
<html>
<head>

    <title>Employee Salaries</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f5f5f5; }
        h1 { color: #333; }
        .salary { margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <h1>Employee Salaries</h1>
    <?php
    class Employee {
        public $name;
        public $age;
        public $currentSalary;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
            $this->currentSalary = 23000;
            $this->calculateSalary();
        }

        private function calculateSalary() {
            if (str_starts_with($this->name, 'A')) {
                $this->currentSalary -= $this->age;
            }
            if (str_ends_with($this->name, 'h')) {
                $this->currentSalary -= 2 * $this->age;
            }
        }

        public function printSalary() {
            echo "<div class='salary'>{$this->name} Salary: {$this->currentSalary}</div>";
        }
    }

    $employees = [
        new Employee("Arif", 25),
        new Employee("Rahul", 30),
        new Employee("Aakash", 28),
        new Employee("Sourabh", 35),
        new Employee("Mehedi", 22)
    ];

    foreach ($employees as $emp) {
        $emp->printSalary();
    }
    ?>
</body>
</html>
