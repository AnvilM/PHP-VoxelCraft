<?php

namespace src\models;

use src\core\Model;

class HomeModel extends Model{
    
    public function getPlayers(){
        return $this->db->query("SELECT * FROM `users` WHERE `Login` != ''");
    }

    public function getTowns(){
        return $this->db->query("SELECT * FROM `towns`");
    }
    
    public function addPlayer($Discord, $Login){
        $this->db->query("UPDATE `users` SET `Login` = '$Login' WHERE `Discord` = '$Discord'");
        $this->db->query("INSERT INTO `players_skins` (`Login`, `Skin`) VALUES ('$Login', '$Login')");
        $this->db->query("INSERT INTO `players_roles` (`Login`, `Role`) VALUES ('$Login', 'Игрок')");
        
    }

}
