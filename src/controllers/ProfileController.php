<?php


namespace src\controllers;

use src\core\Controller;
use src\lib\Discord;


Class ProfileController extends Controller{

   public $Discord;

   public function IndexAction(){
      $this->View->render();
   }
   public function BankAction(){
      $this->View->render();
   }
   public function SigninAction(){
      $this->Discord = new Discord();
      $_SESSION['User']['Login'] = $this->Discord->Auth();
      header('Location: /Profile');
      exit();
   }
} 