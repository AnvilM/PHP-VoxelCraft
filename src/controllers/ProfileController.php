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

      if($this->User->isFBi() && isset($_GET['Score']) && isset($_GET['Message'])){
         $Number = mysqli_fetch_assoc($this->Model->getPlayerCards($_GET['Login']))['Number'];
         $this->Model->Fine($Number, $_GET['Score'], 'fine', $_GET['Message']);
         $this->Model->addNotice($_GET['Login'], 'Вам выдали предупреждение');
         header('Location: /Profile?Login='.$_GET['Login']);
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
      $Cards = require $_SERVER['DOCUMENT_ROOT'].'/src/config/cards.php';
      if(isset($_GET['Create']) && $this->User->isBankir() && isset($_GET['Type']) && isset($_GET['Design'])){
         if($_GET['Design'] === 'redan' || $_GET['Design'] === 'whiteredan'){
            if(!$this->User->isAdmin()){
               header('Location: /Profile/Bank');
               exit();
            }
         }
         
         $match = false;
         for($i=0; $i < count($Cards['Styles']); $i++){
            if($Cards['Styles'][$i]['name'] === $_GET['Design']){$match = true;}
         }
         $matchType = false;
         for($i=0; $i < count($Cards['Types']); $i++){
            if($Cards['Types'][$i]['name'] === $_GET['Type']){$matchType = true;}
         }
         
         if($match && $matchType){
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
               do{
                  for($i=0; $i<16; $i++){
                     $Share = $Share.''.$alphabet[rand(0, strlen($alphabet)-1)];
                  }
                  $Share = hash('sha256', $Share);
               }
               while(mysqli_num_rows($this->Model->getShare($Share)) >= 1);
               
               $this->Model->createCard($_GET['Create'], $Number, $_GET['Design'], $_GET['Type'], $Share);
               $this->Model->addCard($_GET['Create'], $Number);
            }
         }
         header('Location: /Profile/Bank');
      }

      else if(isset($_GET['From_Card']) && isset($_GET['To_Card']) && isset($_GET['Score']) && $_GET['Score'] >= 1){



         if(mysqli_num_rows($this->Model->checkPlayerCard($this->User->getLogin(), $_GET['From_Card'])) >= 1){
            if(mysqli_num_rows($this->Model->getCard($_GET['To_Card'])) >= 1){
               if(mysqli_fetch_assoc($this->Model->getScore($_GET['From_Card']))['Score'] >= $_GET['Score']){
                  $Type = mysqli_fetch_assoc($this->Model->getType($_GET['To_Card']))['Type'];
                  if(mysqli_fetch_assoc($this->Model->getType($_GET['To_Card']))['Type'] === 'town' || mysqli_fetch_assoc($this->Model->getType($_GET['From_Card']))['Type'] === 'town'){
                     $Type = 'town';
                  }
                  if(mysqli_fetch_assoc($this->Model->isShare($_GET['From_Card'], $this->User->getLogin()))['Share'] != ''){
                     $Share = mysqli_fetch_assoc($this->Model->isShare($_GET['From_Card'], $this->User->getLogin()))['Share'];
                     if(mysqli_num_rows($this->Model->getShare($Share)) >= 1){
                        $this->Model->transferMoney($_GET['From_Card'], $_GET['To_Card'], $_GET['Score'], $Type);
                        $this->Model->addNotice($this->User->getLogin(), 'Вы успешно перевели деньги');

                        $Logins = mysqli_fetch_all($this->Model->getLoginFromCard($_GET['To_Card']));
                        for($i=0; $i<count($Logins); $i++){
                           $this->Model->addNotice($Logins[$i][0], 'Вам перевели деньги');
                        }
                        
                     }
                  }
                  else{
                     $this->Model->transferMoney($_GET['From_Card'], $_GET['To_Card'], $_GET['Score'], $Type);
                     $this->Model->addNotice($this->User->getLogin(), 'Вы успешно перевели деньги');

                     $Logins = mysqli_fetch_all($this->Model->getLoginFromCard($_GET['To_Card']));
                     for($i=0; $i<count($Logins); $i++){
                        $this->Model->addNotice($Logins[$i][0], 'Вам перевели деньги');
                     }
                     
                  }
                  


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

               $CurShare = mysqli_fetch_all($this->Model->isAllShares($_GET['Reset']));
               for($i=0;$i<count($CurShare); $i++){
                  if($CurShare[$i][0] != ''){
                     $this->Model->delShare($CurShare[$i][0]);
                  }
               }

               $this->Model->resetShare($_GET['Reset'], $Share);
            }
         }
         header('Location: /Profile/Bank');
      }

      else if(isset($_GET['Share'])){
         $Number = mysqli_fetch_assoc($this->Model->getShare($_GET['Share']))['Number'];
         if(mysqli_num_rows($this->Model->checkPlayerCard($this->User->getLogin(), $Number)) < 1){
            $this->Model->addCardShare($this->User->getLogin(), $Number, $_GET['Share']);
         }
         else{
            $this->Model->updateCardShare($this->User->getLogin(), $Number, $_GET['Share']);
         }
         header('Location: /Profile/Bank');
      }

      else if(isset($_GET['Edit']) && isset($_GET['Design'])){
         if($_GET['Design'] === 'redan' || $_GET['Design'] === 'whiteredan'){
            if(!$this->User->isAdmin()){
               header('Location: /Profile/Bank');
               exit();
            }
         }
         
         $match = false;
         for($i=0; $i < count($Cards['Styles']); $i++){
            if($Cards['Styles'][$i]['name'] === $_GET['Design']){$match = true;}
         }

         if($match){
            if(mysqli_num_rows($this->Model->getCard($_GET['Edit'])) >= 1){
               if(mysqli_num_rows($this->Model->checkPlayerCard($this->User->getLogin(), $_GET['Edit'])) >= 1){
                  
                  $this->Model->editCard($_GET['Edit'], $_GET['Design']);
               }
            }
            
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
     
      
      

      
      $this->View->render(['allCards' => $AllCards, 'privateCard' => $privateCard, 'Transfers' => $Transfers, 'Designs' => $Cards['Styles'], 'Types' => $Cards['Types']]);
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