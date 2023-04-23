<?php

namespace src\models;

use src\core\Model;

class HomeModel extends Model{
    
    public function getTowns(){
        return $this->db->query("SELECT * FROM `towns`");
    }

    public function getUsers(){
        return $this->db->query("SELECT * FROM `user`");
    }

}
