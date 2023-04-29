<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\lib\Discord;


Class ProfileController extends Controller{


   public function IndexAction(){
      if(!isset($_GET['Login'])){
         header('Location: /');
      }

      $Discord = mysqli_fetch_assoc($this->Model->getDiscord($_GET['Login']))['Discord'];
      $Warnings = mysqli_fetch_all($this->Model->getWarnings($_GET['Login']));
      $Roles = mysqli_fetch_all($this->Model->getRoles($_GET['Login']));

      $this->View->render(['Discord' => $Discord, 'Warnings' => $Warnings, 'Roles' => $Roles]);
   }
   public function BankAction(){
      if(!$this->User->isPlayer()){
         header('Location: /');
      }

      $Cards = mysqli_fetch_all($this->Model->getCards($this->User->getLogin()));

      $this->View->render(['Cards' => $Cards]);
   }
   public function SigninAction(){
      $_SESSION['User'] = [];
      $Discord = new Discord();
      $response = $Discord->Auth();
      $UserDiscord = $response['username'].'#'.$response['discriminator'];
      $User = $this->Model->checkUser($UserDiscord);
      $UserFetch = mysqli_fetch_assoc($User);
      if(mysqli_num_rows($User) == 0){
         $this->Model->addUser($UserDiscord);
      }
      
      else if($UserFetch['Login'] != ''){
         $_SESSION['User']['Login'] = $UserFetch['Login'];
         $roles = mysqli_fetch_all($this->Model->getRoles($_SESSION['User']['Login']));
         $_SESSION['User']['Roles'] = [];
         for($i=0;$i<count($roles); $i++){
            array_push($_SESSION['User']['Roles'], $roles[$i][1]);
         }
      }
      $_SESSION['User']['Discord'] = $UserDiscord;
      header('Location: /');
   }

   public function LogoutAction(){
      unset($_SESSION['User']);
      header('Location: /');
   }
} 