<?php


namespace src\controllers;

use src\core\Controller;


Class HomeController extends Controller{

    public function IndexAction(){
        
        $this->User->add_tag('w');
        $this->View->render();
    }   

} 