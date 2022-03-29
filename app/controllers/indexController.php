<?php

namespace coding\app\controllers;

use coding\app\models\Index;

class IndexController extends Controller{

    function list(){
        $limit = 10;
        $index=new Index();
        $allAuthors=$index->show();
        $countCategories = $index->countCategories();
        $authorsCount = $index->countAuthors();
        $usersCount = $index->countUsers();
        $booksCount = $index->countBooks();
        $countBooksIsActive = $index->countBooksIsActive();
        $getCategories = $index->getTables('categories', $limit);
        $this->view('/home', array(
            'authors'               => $allAuthors,
            'countCategories'       => $countCategories,
            'countAuthors'          => $authorsCount,
            'usersCount'            => $usersCount,
            'booksCount'            => $booksCount,
            'countBooksIsActive'    => $countBooksIsActive,
            'getCategories'         => $getCategories
        ));

    }
    // function users(){
        
        // $this->view('/index', $allUsers);
    // }
    function create(){
        $this->view('add_category');

    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $category=new Category();
        
        $category->name=$_POST['category_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];

        $category->save();

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    




}

?>