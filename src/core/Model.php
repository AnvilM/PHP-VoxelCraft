<?php

namespace src\core;

use src\lib\Db;

abstract class Model{
    
    public $db;
    
    public function __construct(){
        $this->db = new Db;
        
    }

    public function RolesSync($Login){
        return $this->db->query("SELECT * FROM `players_roles` WHERE `Login` = '$Login'");
    }

    
}
