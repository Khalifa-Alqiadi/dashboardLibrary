<?php

namespace coding\app\models;

class AUthor extends Model{
    function __construct()
    {

        parent::$tblName="authors";
    }
    function show(){
        $authors = $this->table('authors')->get();
        return $authors;
    }
    function counts(){
        $count = $this->table('categories')->count();
        return $count;
    }
}
?>