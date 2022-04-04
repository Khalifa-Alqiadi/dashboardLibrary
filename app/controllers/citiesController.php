<?php 
namespace coding\app\controllers;

use coding\app\models\Model;

class CitiesController extends Controller{
    function showSities(){
        $cities = new Model();
        $rows = $cities->table('cities')->get();
        $this->view('cities', $rows);
    }
    
}

?>