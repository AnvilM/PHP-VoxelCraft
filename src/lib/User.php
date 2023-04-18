<?php

namespace src\lib;


class User{

    public function add_tag($tag){
        if(isset($_SESSION['User'])){
            array_push($_SESSION['User']['Tags'], $tag);
            return true;
        }
        return false;
    }
    
}
