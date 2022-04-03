<?php

namespace coding\app\controllers;

use coding\app\models\Book;
use coding\app\models\Model;
class BookController extends Controller{
    function showBook(){
        $book = new Book();
        $books = $book->show();
        
        $this->view('books', $books);
    }

    
}

?>