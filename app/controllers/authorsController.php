<?php

namespace coding\app\controllers;

use coding\app\models\Model;
use coding\app\models\Author;

class AuthorsController extends Controller{

    function showAuthor(){
        $authors = new Author();
        $rows = $authors->show();
        $this->view('authors', $rows);
    }
    
}

?>