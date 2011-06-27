<?php
?>
<?php
class Student
{
    public $Sname;

    public function __construct($Sname)
    {
        $this->Sname = $Sname;
    }

    public function print()
    {
        echo "I am {$this->Sname}";
    }
}

$student = new Student("K.M.Fathum Mubin Sachcha");
$student->print();

?>
