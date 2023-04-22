<?php


namespace src\controllers;

use src\core\Controller;


Class TownController extends Controller{

   public function IndexAction(){
      $this->View->render();
   }

   public function EditAction(){
      $this->View->render();
   }

   public function CreateAction(){
      if(isset($_SESSION['User'])){
         $this->Model->Create($_GET['name'], $_GET['desc'], $_GET['banner'], $_GET['discord'], $this->User->get_login());
         mkdir('public/resources/Towns/'.count(scandir('public/resources/Towns'))-1);
      }
      header('Location: /Towns');
      exit();
   }
} 