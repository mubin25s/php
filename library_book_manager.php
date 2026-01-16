<?php
// PROBLEM: Library Book Manager (Reference manipulation).
// 1. Array of Book Objects (id, title, copies).
// 2. Function borrowBook($id): decreases copies by 1.
// 3. Function removeEmptyStock(): deletes books with 0 copies.

class Book {
    public $id;
    public $title;
    public $copies;

    public function __construct($id, $title, $copies) {
        $this->id = $id;
        $this->title = $title;
        $this->copies = $copies;
    }
}

$library = [
    new Book(1, "PHP Basics", 5),
    new Book(2, "Java OOP", 1),
    new Book(3, "Python AI", 0)
];

// Logic 1: Borrow a book (decrease copy)
function borrowBook(&$books, $targetId) {
    foreach ($books as $book) {
        if ($book->id == $targetId) {
            if ($book->copies > 0) {
                $book->copies--;
            }
            return;
        }
    }
}

// Logic 2: Clean up library
function removeEmptyStock(&$books) {
    for ($i = 0; $i < count($books); $i++) {
        if ($books[$i]->copies == 0) {
            array_splice($books, $i, 1);
            $i--;
        }
    }
}

// Operations
borrowBook($library, 2); // Java OOP goes 1 -> 0
removeEmptyStock($library); // Should remove Python AI and Java OOP

// Display
echo "<h3>Available Books:</h3>";
foreach ($library as $b) {
    echo "{$b->title} (Copies: {$b->copies}) <br>";
}
?>
