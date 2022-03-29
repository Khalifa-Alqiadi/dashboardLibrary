<?php

namespace coding\app\models;

class Index extends Model{
    function __construct()
    {

        parent::$tblName="authors";
    }
    function show(){
        $authors = $this->table('authors')->get();
        return $authors;
    }
    function countCategories(){
        $count = $this->table('categories')->count();
        return $count;
    }
    function countAuthors(){
        $count = $this->table('authors')->count();
        return $count;
    }
    function countUsers(){
        $count = $this->table('users')->count();
        return $count;
    }
    function countBooks(){
        $count = $this->table('books')->count();
        return $count;
    }
    function countBooksIsActive(){
        $count = $this->table('books')->where("is_active",1)->count();
        return $count;
    }
    function getTables($table, $limit){
        $stmt = $this->table($table)->limit($limit)->get();
        return $stmt;
    }
}
?>