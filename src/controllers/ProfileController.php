<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\lib\Discord;


Class ProfileController extends Controller{

   public $Discord;

   public function IndexAction(){
      if(!isset($_SESSION['User'])){
         header('Location: /');
         exit();
      }
      $Warnings = mysqli_fetch_all($this->Model->getWarnings($this->User->get_login()));
      $this->View->render(['Warnings' => $Warnings]);
   }
   public function BankAction(){
      if(!isset($_SESSION['User'])){
         header('Location: /');
         exit();
      }
      $this->View->render();
   }
   public function SigninAction(){
      $this->Discord = new Discord();
      $response = $this->Discord->Auth();
      
      if(mysqli_num_rows($this->Model->getUser($response['username'], $response['discriminator'])) >= 1){
         $_SESSION['User']['Login'] = $response['username'];
         $_SESSION['User']['discriminator'] = $response['discriminator'];
      }
      else{
         $this->Model->addUser($response['username'], $response['discriminator']);
         $_SESSION['User']['Login'] = $response['username'];
         $_SESSION['User']['discriminator'] = $response['discriminator'];
      }

      header('Location: /Profile');
      exit();
   }

   public function LogoutAction(){
      unset($_SESSION['User']);
      header('Location: /');
   }
} 