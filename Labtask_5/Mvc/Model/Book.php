<?php

/**
 * Represents a single book with its properties.
 * This is a simple data object.
 */
class Book {
    public $title;
    public $author;
    public $description;
    public $genre;


    // Constructor to initialize the book's properties
    public function __construct($title, $author, $description, $genre) {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
        $this->genre = $genre;
    }
}
?>
