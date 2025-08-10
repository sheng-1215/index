<?php
class Library {
    public $books = [];

    function addBook($title) {
        $this->books[] = $title;
    }

    function displayBooks() {
        echo "Available books: " . implode(", ", $this->books) . "<br>";
    }

    function borrowBook($title) {
        $key = array_search($title, $this->books);
        if ($key !== false) {
            unset($this->books[$key]);
            echo "You borrowed: $title\n";
        } else {
            echo "Book not found.\n";
        }
    }
}

$lib = new Library();
$lib->addBook("C++ Basics");
$lib->addBook("PHP for Web");
$lib->displayBooks();
echo "<br>";
$lib->borrowBook("PHP for Web");

