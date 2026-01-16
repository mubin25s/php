<?php

// Define the Employee class
class Employee {
    // 1. Define the variables
    public $name;
    public $age;
    public $currentSalary = 23000; // Initial salary for all employees

    /**
     * Constructor to initialize the employee object.
     * @param string $name The employee's name.
     * @param int $age The employee's age.
     */
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Calculates the final salary based on the rules.
     * Rule 1: If name starts with 'A', salary is deducted by age.
     * Rule 2: If name ends with 'h', salary is deducted by 2 * age.
     * Only one rule is applied (the deduction is done on the base salary).
     */
    public function calculateAndPrintSalary() {
        $salary = $this->currentSalary; // Start with the base salary

        // Convert the name to lowercase for case-insensitive checking
        $lowerName = strtolower($this->name);

        // Check the rules
        if (str_starts_with($lowerName, 'a')) {
            // Rule 1: Name starts with 'A' (case-insensitive)
            $deduction = $this->age;
            $salary = $salary - $deduction;
            $ruleApplied = "Salary deducted by employee's age ($deduction).";
        } elseif (str_ends_with($lowerName, 'h')) {
            // Rule 2: Name ends with 'h' (case-insensitive)
            $deduction = 2 * $this->age;
            $salary = $salary - $deduction;
            $ruleApplied = "Salary deducted by 2 times employee's age ($deduction).";
        } else {
            // No special rule applied
            $ruleApplied = "No special deduction applied.";
        }

        // Print the results in a formatted way
        echo "--- *Employee: {$this->name}* ---\n";
        echo "Age: {$this->age}\n";
        echo "Base Salary: $23000\n";
        echo "Rule Applied: $ruleApplied\n";
        echo "*Final Salary: $$salary*\n\n";
    }
}

// --- Main Program Execution ---

// 2. Build 5 objects of the class
$employee1 = new Employee("Alice", 30);      // Starts with 'A' -> Deduct 30
$employee2 = new Employee("Bob", 25);        // No special rule -> Keep 23000
$employee3 = new Employee("Sarah", 35);      // Ends with 'h' -> Deduct 2 * 35 = 70
$employee4 = new Employee("Anthony", 40);    // Starts with 'A' -> Deduct 40
$employee5 = new Employee("Keith", 28);      // Ends with 'h' -> Deduct 2 * 28 = 56

// 3. Print the salary of all the employees
echo "## 💰 Employee Salary Report\n\n";

$employee1->calculateAndPrintSalary();
$employee2->calculateAndPrintSalary();
$employee3->calculateAndPrintSalary();
$employee4->calculateAndPrintSalary();
$employee5->calculateAndPrintSalary();

?>