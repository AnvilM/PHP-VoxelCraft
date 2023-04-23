<?php


namespace src\controllers;

use src\core\Controller;


Class APIController extends Controller{
    private $data;
    public function SET_SKINAction(){
        $this->data = require $_SERVER['DOCUMENT_ROOT'].'/src/config/API.php';
        if(isset($_GET['skin']) && isset($_GET['password']) && $_GET['password'] == $this->data['password']){
            echo '1';
            return 1;
        }
        return 0;
    }
} 