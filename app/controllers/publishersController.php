<?php

namespace coding\app\controllers;

use coding\app\models\Model;

class PublishersController extends Controller{

    function showPublishers(){
        $publishers = new Model();
        $rows = $publishers->table('publishers')->get();
        $this->view('publishers', $rows);
    }
    
}

?>