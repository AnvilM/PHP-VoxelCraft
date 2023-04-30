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

      if(isset($_GET['Create']) && $this->User->isBankir() && isset($_GET['Type']) && isset($_GET['Design'])){
         $Number = '';
         do{
            for($i = 0; $i < 16; $i++){
               $Rand = rand(0, 9);
               $Number = $Number.''.$Rand;
            }
         }
         while(mysqli_num_rows($this->Model->getCard($Number)) >= 1);
         if(mysqli_num_rows($this->Model->checkPlayer($_GET['Create'])) >= 1 && mysqli_num_rows($this->Model->getCardFromLogin($_GET['Create'])) < 1){
            $Share = '';
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            for($i=0; $i<16; $i++){
               $Share = $Share.''.$alphabet[rand(0, strlen($alphabet)-1)];
            }
            $Share = hash('sha256', $Share);
            $this->Model->createCard($_GET['Create'], $Number, $_GET['Design'], $_GET['Type'], $Share);
            $this->Model->addCard($_GET['Create'], $Number);
         }
         header('Location: /Profile/Bank');
      }

      else if(isset($_GET['From_Card']) && isset($_GET['To_Card']) && isset($_GET['Score']) && $_GET['Score'] >= 1){
         if(mysqli_num_rows($this->Model->checkPlayerCard($this->User->getLogin(), $_GET['From_Card'])) >= 1){
            if(mysqli_num_rows($this->Model->getCard($_GET['To_Card'])) >= 1){
               if(mysqli_fetch_assoc($this->Model->getScore($_GET['From_Card']))['Score'] >= $_GET['Score']){
                  $this->Model->transferMoney($_GET['From_Card'], $_GET['To_Card'], $_GET['Score']);
               }
            }
         }
         header('Location: /Profile/Bank');
      }

      else if(isset($_GET['Reset'])){
         if(mysqli_num_rows($this->Model->getCard($_GET['Reset'])) >= 1){
            if(mysqli_num_rows($this->Model->checkPlayerCard($this->User->getLogin(), $_GET['Reset'])) >= 1){
               $Share = '';
               $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
               for($i=0; $i<16; $i++){
                  $Share = $Share.''.$alphabet[rand(0, strlen($alphabet)-1)];
               }
               $Share = hash('sha256', $Share);
               $this->Model->resetShare($_GET['Reset'], $Share);
            }
         }
         header('Location: /Profile/Bank');
      }

      else if(isset($_GET['Share'])){
         $Number = mysqli_fetch_assoc($this->Model->getShare($_GET['Share']))['Number'];
         if(mysqli_num_rows($this->Model->checkPlayerCard($this->User->getLogin(), $Number)) < 1){
            $this->Model->addCard($this->User->getLogin(), $Number);
         }
         header('Location: /Profile/Bank');
      }
      










      



      $privateCard = mysqli_fetch_all($this->Model->getCardFromLogin($this->User->getLogin()));

      $Numbers = mysqli_fetch_all($this->Model->getPlayerCards($this->User->getLogin()));
      $AllCards = [];
      $Transfers = [];
      if(count($Numbers) >= 1){
         for($i=0;$i<count($Numbers); $i++){
            array_push($AllCards, mysqli_fetch_all($this->Model->getCard($Numbers[$i][1])));
            array_push($Transfers, mysqli_fetch_all($this->Model->getTransfers($Numbers[$i][1])));
        }
      }
     
      
      

      
      $this->View->render(['allCards' => $AllCards, 'privateCard' => $privateCard, 'Transfers' => $Transfers]);
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