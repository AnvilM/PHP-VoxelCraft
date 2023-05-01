<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\lib\User;

Class TownController extends Controller{

   public function IndexAction(){
      if(!isset($_GET['Id'])){
         header('Location: /');
         exit();
      }   
      $id = $_GET['Id'];
      $Town = mysqli_fetch_all($this->Model->getTown($id));
      $Players = mysqli_fetch_all($this->Model->getPlayers($id));
      if(count($Town) >= 1){
         $this->View->render(['Town' => $Town, 'Players' => $Players]);
         
      }


   }

   public function EditAction(){
      if(isset($_GET['Id']) && $this->User->isPlayer()){
         $town = mysqli_fetch_all($this->Model->getTown($_GET['Id']));
         if($town[0][5] == $this->User->getLogin()){

            $players = mysqli_fetch_all($this->Model->getPlayers($town[0][0]));
            if($town[0][5] != $this->User->getLogin()){
               header('Location: /Town?Id='.$town[0][0]);
            }
      
            if(isset($_GET['SwitchPlayers_need'])){
               
               if($town[0][7] == 0){
                  $this->Model->Players_need($town[0][0]);
               }
               else{
                  $this->Model->No_Players_need($town[0][0]);
               }
               header('Location: /Town/Edit?Id='.$town[0][0]);

               
            }
            else if(isset($_GET['changeDiscrodLink'])){
               
               $this->Model->ChangeDiscrodLink($town[0][0], $_GET['changeDiscrodLink']);
               header('Location: /Town/Edit?Id='.$town[0][0]);
               
            }
            else if(isset($_GET['addPlayer'])){
               if(mysqli_num_rows($this->Model->checkUser($_GET['addPlayer']))){
                  $this->Model->addPlayer($town[0][0], $_GET['addPlayer']);
               }
               header('Location: /Town/Edit?Id='.$town[0][0]);
               
            }
            else if(isset($_GET['removePlayer'])){
               $this->Model->removePlayer($town[0][0], $_GET['removePlayer']);
               if(mysqli_fetch_assoc($this->Model->getSecondOwner($town[0][0]))['Second_Owner'] === $_GET['removePlayer']){
                  $this->Model->removeSecondOwner($town[0][0]);
               }
               header('Location: /Town/Edit?Id='.$town[0][0]);
               
            }
            else if(isset($_GET['RemoveSecondOwner'])){
               $this->Model->removeSecondOwner($town[0][0]);
               header('Location: /Town/Edit?Id='.$town[0][0]);
            }
            else if(isset($_GET['AddSecondOwner'])){
               $this->Model->addSecondOwner($town[0][0], $_GET['AddSecondOwner']);
               header('Location: /Town/Edit?Id='.$town[0][0]);
            }
            else if(isset($_FILES['image'])){
               $extension = explode(".", $_FILES['image']['name']);
               $extension = end($extension);
               if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'){
                  $dir = opendir("public/resources/Towns/".$_GET['Id']);
                  $filecount = 0;
                  while($file = readdir($dir)){
                      if($file == '.' || $file == '..' || is_dir('path/to/dir' . $file)){
                          continue;
                      }
                      $filecount++;
                  }
                  if($filecount <= 6){
                     copy($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/public/resources/Towns/'.$_GET['Id'].'/'.$filecount.'.'.$extension);
                  }
               }
               header('Location: /Town/Edit?Id='.$town[0][0]);

            }
            $this->View->render(['Town' => $town, 'Players' => $players]);


         }
         else{
            header('Location: /Town?Id='.$town[0][0]);
         }
      }
      else{
         header('Location: /Towns');
      }
      
     
   }

   public function CreateAction(){
      if($this->User->isPlayer()){
         if(isset($_POST['name']) && isset($_POST['desc']) && isset($_FILES['banner'])){

            $id = file_get_contents('public/resources/Towns/id')+1;
            file_put_contents('public/resources/Towns/id', $id);
            $this->Model->Create($id, $_POST['name'], $_POST['desc'], '/public/resources/Towns/'.$id.'/banner.png', $this->User->getLogin(), $_POST['discord']);
            $this->Model->addPlayer($id, $this->User->getLogin());
            mkdir('public/resources/Towns/'.$id);
            copy($_FILES['banner']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/public/resources/Towns/'.$id.'/banner.png');
         }
      }
      header('Location: /Towns');
      exit();
   }
} 