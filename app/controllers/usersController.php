<?php 
namespace coding\app\controllers;

use coding\app\models\Model;

class UsersController extends Controller{
    function showUsers(){
        $users = new Model();
        $rows = $users->table('users')->get();
        $this->view('users', $rows);
    }
    
}

?>