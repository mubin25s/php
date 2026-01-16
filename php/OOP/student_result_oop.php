<!DOCTYPE html>
<!--
    PROBLEM:
    Student Result Calculation.
    1. Create 'Student' class: Properties for name, id, marks.
    2. Logic in Constructor:
       - If ID is even, add 5 bonus marks.
       - If name ends with 'a', add 2 bonus marks.
    3. Method 'checkResult':
       - If marks < 40: "Failed"
       - If marks >= 40: "Passed"
    4. Loop through array of students and print ID, Corrected Marks, and Result.
-->
<html>
<head><title>Student Results</title></head>
<body>
    <h1>Student Results</h1>
    <?php
    class StudentResult {
        public $name;
        public $id;
        public $marks;

        public function __construct($name, $id, $marks) {
            $this->name = $name;
            $this->id = $id;
            $this->marks = $marks;
            $this->calculateBonus();
        }

        private function calculateBonus() {
            // Rule 1: Even ID gets bonus
            if ($this->id % 2 == 0) {
                $this->marks += 5;
            }
            // Rule 2: Name ending in 'a' gets bonus
            if (str_ends_with($this->name, 'a')) {
                $this->marks += 2;
            }
        }

        public function checkResult() {
            if ($this->marks < 40) {
                return "Failed";
            } else {
                return "Passed";
            }
        }
    }

    $students = [
        new StudentResult("Alice", 101, 35), // Ends in 'e', odd ID -> 35
        new StudentResult("Bob", 102, 38),   // Even ID -> 38+5 = 43 (Pass)
        new StudentResult("Sonia", 103, 39), // Ends in 'a' -> 39+2 = 41 (Pass)
        new StudentResult("John", 104, 80)
    ];

    foreach ($students as $stu) {
        echo "ID: {$stu->id} | Name: {$stu->name} | Marks: {$stu->marks} | Result: " . $stu->checkResult() . "<br>";
    }
    ?>
</body>
</html>
