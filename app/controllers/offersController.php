<?php
namespace coding\app\controllers;

use coding\app\models\Model;

class OffersController extends Controller{
    function showOffers(){
        $offers = new Model();
        $rows = $offers->table('offers')->get();
        $this->view('offers', $rows);
    }
    
}
?>