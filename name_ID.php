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
