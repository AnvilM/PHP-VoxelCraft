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
         $this->Model->Create($_POST['name'], $_POST['desc'], 'public/resources/Towns/'.(count(scandir('public/resources/Towns'))-1).'/banner.png', $_POST['discord'], $this->User->get_login());
         mkdir('public/resources/Towns/'.count(scandir('public/resources/Towns'))-1);
         copy($_FILES['banner']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/public/resources/Towns/'.(count(scandir('public/resources/Towns'))-2).'/banner.png');
      }
      header('Location: /Towns');
      exit();
   }
} 