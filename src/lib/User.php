<?php

namespace src\lib;

use mysqli;
use src\lib\Db;

class User{

    public $Db;

    public function __construct()
    {
        $this->Db = new Db();
    }

    public function isAuth(){
        if(isset($_SESSION['User'])){
            return true;
        }
        return false;
    }

    public function isPlayer(){
        if($this->isAuth()){
            if(isset($_SESSION['User']['Login'])){
                return true;
            }
        }
        return false;
    }

    public function isFBi(){
        if($this->isPlayer()){
            if(isset($_SESSION['User']['ФБР'])){
                return true;
            }
        }
        return false;
    }

    public function isBankir(){
        if($this->isPlayer()){
            if(isset($_SESSION['User']['Банкир'])){
                return true;
            }
        }
        return false;
    }


    public function getLogin(){
        if($this->isPlayer()){
            return $_SESSION['User']['Login'];
        }
    }

    public function getDiscord(){
        if($this->isAuth()){
            return $_SESSION['User']['Discord'];
        }
    }


    public function getSkin($Login){
        return '/API/get.skin?Login='.$Login;
    }


    public function getAvatar($Login){
        return '/API/get.avatar?Login='.$Login;
    }

    public function getMySkin($Login){
        if($this->isPlayer()){
            return '/API/get.skin?Login='.$Login;
        }
        return '/API/get.skin';
    }


    public function getMyAvatar($Login){
        if($this->isPlayer()){
            return '/API/get.avatar?Login='.$Login;
        }
        return '/API/get.avatar';
    }

}
