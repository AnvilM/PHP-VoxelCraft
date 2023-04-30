<?php

namespace src\models;

use src\core\Model;

class ProfileModel extends Model{
    
    public function checkUser($Discord){
        return $this->db->query("SELECT * FROM `users` WHERE `Discord` = '$Discord'");
    }

    public function checkPlayer($Login){
        return $this->db->query("SELECT * FROM `users` WHERE `Login` = '$Login'");
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

    public function getCard($Number){
        return $this->db->query("SELECT * FROM `cards` WHERE `Number` = '$Number'");
    }

    public function getCardFromLogin($Login){
        return $this->db->query("SELECT * FROM `cards` WHERE `Owner` = '$Login'");
    }

    public function getPlayerCards($Login){
        return $this->db->query("SELECT * FROM `players_cards` WHERE `Login` = '$Login'");
    }

    public function createCard($Owner, $Number, $Design, $Type){
        return $this->db->query("INSERT INTO `cards` (`Owner`, `Number`, `Design`, `Type`) VALUES ('$Owner', '$Number', '$Design', '$Type')");
    }

    public function addCard($Login, $Number){
        return $this->db->query("INSERT INTO `players_cards` (`Login`, `Number`) VALUES ('$Login', '$Number')");
    }
    
}
