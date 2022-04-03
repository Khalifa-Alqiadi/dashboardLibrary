<?php
namespace coding\app\controllers;
use coding\app\models\Model;
class User_PayementController extends Controller{
    function showMethod(){
        $methods = new Model();
        $rows = $methods->table('user_payment_methods')->select("payements.id", "user_payment_methods.*")
                        ->join("payements", "payements.id", "user_payment_methods.payement_id")
                        ->get();
        $this->view('user_payement', $rows);
    }
    
}
?>