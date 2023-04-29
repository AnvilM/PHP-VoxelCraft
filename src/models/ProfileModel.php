<?php

namespace src\models;

use src\core\Model;

class ProfileModel extends Model{
    
    public function checkUser($Discord){
        return $this->db->query("SELECT * FROM `users` WHERE `Discord` = '$Discord'");
    }

    public function addUser($Discord){
        return $this->db->query("INSERT INTO `users` (`Discord`) VALUES ('$Discord')");
    }

    public function getRoles($Login){
        return $this->db->query("SELECT * FROM `players_roles` WHERE `Login` = '$Login'");
    }


    public function getDiscord($Login){
        return $this->db->query("SELECT `Discord` FROM `users` WHERE `Login` = '$Login'");
    }

    public function getWarnings($Login){
        return $this->db->query("SELECT * FROM `players_warnings` WHERE `To_User` = '$Login'");
    }

    public function getCards($Login){
        return $this->db->query("SELECT * FROM `players_cards` WHERE `Login` = '$Login'");
    }
    
}
