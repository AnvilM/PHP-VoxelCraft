<?php


namespace src\controllers;

use src\core\Controller;


Class HomeController extends Controller{

    public function IndexAction(){
        
        $this->User->add_tag('w');
        $this->View->render();
    }   
    public function TownsAction(){
        
        $this->User->add_tag('w');
        $this->View->render();
    } 
    public function BankAction(){
        
        $this->User->add_tag('w');
        $this->View->render();
    } 
    public function ProfileAction(){
        
        $this->User->add_tag('w');
        $this->View->render();
    } 
    public function StatisticAction(){
        
        $this->User->add_tag('w');
        $this->View->render();
    } 
    public function ZalupatownAction(){
        
        $this->User->add_tag('w');
        $this->View->render();
    } 
    public function ZalupatowneditAction(){
        
        $this->User->add_tag('w');
        $this->View->render();
    } 
} 