<?php

namespace coding\app\controllers;

use coding\app\models\Category;

use coding\app\models\Model;
class CategoriesController extends Controller{

    function showCategories(){
        $categories=new Category();
        $allCategories=$categories->show();

        $this->view('categories',$allCategories);

    }
}

?>