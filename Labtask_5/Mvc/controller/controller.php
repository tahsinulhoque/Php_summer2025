<?php

// Include the main model file
include_once("model/Model.php");

class Controller {
    public $model;

    // The constructor creates a new instance of our Model
    public function __construct() {
        $this->model = new Model();
    }

    /**
     * This is the main function that handles user requests.
     * It checks if a 'book' parameter is set in the URL.
     */
    public function invoke() {
        // If the 'book' GET parameter is not set, show the book list
        if (!isset($_GET['book'])) {
            // Get the list of books from the model
            $books = $this->model->getBookList();
            // Include the view that displays the list of books
            include 'view/booklist.php';
        } else {
            // Get the book based on the requested title/id
            $book = $this->model->getBook($_GET['book']);

            if ($book) {
                include 'view/viewbook.php';
            } else {
            
                include 'view/notfound.php';
            }
        }
    }
}
?>