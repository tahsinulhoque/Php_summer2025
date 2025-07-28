<?php

// Include the Book class file
include_once("model/Book.php");

/**
 * The Model class is responsible for all data-related logic.
 */
class Model {

    /**
     * Gets the complete list of books.
     * In a real application, this would fetch data from a database.
     * @return array An associative array of Book objects.
     */
    public function getBookList() {
        // For this example, we use a hardcoded array.
        return array(
            "Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book about a boy raised in the jungle","Advanture"),
            "Moonwalker" => new Book("Moonwalker", "J. Walker", "A science-fiction novel about lunar exploration","Friction"),
            "Essiential English Grammer Book" => new Book("Essiential English Grammer Book", "Amran Hoque", "English for all class","Grammer"),
            "Harry Potter" => new Book("Harry Potter", "J.K. Rowling", "A famous fantasy series about a young wizard","Science"),
        );
    }

    /**
     * Gets a specific book by its title.
     * @param string $title The title of the book to retrieve.
     * @return Book The Book object corresponding to the title.
     */
    public function getBook($title) {
        // First, get the entire list of books
        $allBooks = $this->getBookList();
        // Then, return the specific book from the array using its title as the key
        return $allBooks[$title];
    }
}

?>