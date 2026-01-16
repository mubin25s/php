<?php
/*
    PROBLEM:
    Create a 'Student' class with properties 'Sname' and 'ID'.
    1. Use a constructor to initialize these properties.
    2. Create a method 'print' that echoes "I am {Sname}, My ID is {ID}".
    3. Instantiate the class with "Mubin" and "SWE-554" and call the print method.
*/
?>
<?php
class Student
{
    public $Sname;
    public $ID;

    public function __construct($Sname, $ID)
    {
        $this->Sname = $Sname;
        $this->ID = $ID;
    }

    public function print()
    {
        echo "I am {$this->Sname}, My ID is {$this->ID}";
    }
}

$student = new Student("Mubin", "SWE-554");
$student->print();

?>
