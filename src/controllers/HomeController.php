<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;


Class HomeController extends Controller{

    public function IndexAction(){
        
   
        $this->View->render();
    }   
    public function TownsAction(){
        
        $towns = $this->Model->getTowns();
        $TownsCount = mysqli_num_rows($towns);
        $towns = mysqli_fetch_all($towns);
        
        
        $this->View->render(['Towns'=>$towns, 'TownsCount' => $TownsCount]);
    } 
    public function StatsAction(){
        
        $Users = mysqli_fetch_all($this->Model->getUsers());
        $this->View->render(['Users' => $Users]);
    } 

    public function MapAction(){
        
      
        $this->View->render();
    }
} 