<?php


namespace src\controllers;

use src\core\Controller;


Class TownController extends Controller{

   public function IndexAction(){
      $town = mysqli_fetch_all($this->Model->getTown($_GET['id']));
      $players = mysqli_fetch_all($this->Model->getPlayers($_GET['id']));
      $this->View->render(['Town' => $town, 'Players' => $players]);
   }

   public function EditAction(){
      if(isset($_GET['id'])){
         $town = mysqli_fetch_all($this->Model->getTown($_GET['id']));
         if($town[0][5] == $_SESSION['User']['Login']){

            $players = mysqli_fetch_all($this->Model->getPlayers($town[0][0]));
            if($town[0][5] != $_SESSION['User']['Login']){
               header('Location: /Town?id='.$town[0][0]);
            }
      
            if(isset($_GET['SwitchPlayers_need'])){
               
               if($town[0][7] == 0){
                  $this->Model->Players_need($town[0][0]);
               }
               else{
                  $this->Model->No_Players_need($town[0][0]);
               }
               header('Location: /Town/Edit?id='.$town[0][0]);

               
            }
            else if(isset($_GET['changeDiscrodLink'])){
               
               $this->Model->ChangeDiscrodLink($town[0][0], $_GET['changeDiscrodLink']);
               header('Location: /Town/Edit?id='.$town[0][0]);
               
            }

            
            $this->View->render(['Town' => $town, 'Players' => $players]);


         }
         else{
            header('Location: /Town?id='.$town[0][0]);
         }
      }
      else{
         header('Location: /Towns');
      }
      
     
   }

   public function CreateAction(){
      if(isset($_SESSION['User'])){
         $this->Model->Create($_POST['name'], $_POST['desc'], '/public/resources/Towns/'.(count(scandir('public/resources/Towns'))-1).'/banner.png', $_SESSION['User']['Login']);
         mkdir('public/resources/Towns/'.count(scandir('public/resources/Towns'))-1);
         copy($_FILES['banner']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/public/resources/Towns/'.(count(scandir('public/resources/Towns'))-2).'/banner.png');
      }
      header('Location: /Towns');
      exit();
   }
} 