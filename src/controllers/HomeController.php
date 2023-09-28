<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\core\Model;

Class HomeController extends Controller{

    public function IndexAction(){
        
   
        $this->View->render();
    }   
    public function TownsAction(){
        $Towns = mysqli_fetch_all($this->Model->getTowns());


        $this->View->render(['Towns' => $Towns]);
    } 
    public function CourtAction(){
        $Court = mysqli_fetch_all($this->Model->getTowns());


        $this->View->render(['Court' => $Court]);
    }
    public function TapeAction(){
        $Tape = mysqli_fetch_all($this->Model->getTowns());


        $this->View->render(['Tape' => $Tape]);
    }
    public function StatsAction(){
      
        $Players = mysqli_fetch_all($this->Model->getPlayers());
        
        $StatsToday = mysqli_fetch_all($this->Model->getStatsToday());
        $StatsYesterday = mysqli_fetch_all($this->Model->getStatsYesterday());
        $StatsWeek = mysqli_fetch_all($this->Model->getStatsWeek());
        $StatsMonth = mysqli_fetch_all($this->Model->getStatsMonth());

        $this->View->render(['Players' => $Players, 'StatsToday' => $StatsToday, 'StatsYesterday' => $StatsYesterday, 'StatsWeek' => $StatsWeek, 'StatsMonth' => $StatsMonth]);
    } 

    public function MapAction(){
        
        $this->View->render();
    }

    public function BuyAction(){
        if(!$this->User->isPlayer() && $this->User->isAuth() && isset($_GET['Login'])){
            $this->Model->addPlayer($this->User->getDiscord(), $_GET['Login']);
            $_SESSION['User']['Login'] = $_GET['Login'];
        }
        header('Location: /');
    }
} 