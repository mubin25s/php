<?php
class Student {
    public $name;
    public $id;
    public $phone;
    public $dob;

    public function __construct($name, $id, $phone, $dob) {
        $this->name = $name;
        $this->id = $id;
        $this->phone = $phone;
        $this->dob = $dob;
    }
}

$students = [];
$students[] = new Student("Rahim", 1, "01711111111", "2001-01-01");
$students[] = new Student("Karim", 2, "01722222222", "2002-02-02");
$students[] = new Student("Sadia", 3, "01733333333", "2003-03-03");

function updateNameById(&$arr, $id, $newName) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]->id == $id) {
            $arr[$i]->name = $newName;
            return;
        }
    }
}

function deleteById(&$arr, $id) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]->id == $id) {
            array_splice($arr, $i, 1);
            return;
        }
    }
}

updateNameById($students, 2, "Hasan");
deleteById($students, 1);

for ($i = 0; $i < count($students); $i++) {
    echo $students[$i]->id . " " . $students[$i]->name . " " . $students[$i]->phone . " " . $students[$i]->dob . "<br>";
}
?>