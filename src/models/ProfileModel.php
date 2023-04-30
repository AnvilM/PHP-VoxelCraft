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

    public function getScore($Number){
        return $this->db->query("SELECT `Score` FROM `cards` WHERE `Number` = '$Number'");
    }

    public function getTransfers($Number){
        return $this->db->query("SELECT * FROM `cards_transactions` WHERE `From_Number` = '$Number' OR `To_Number` = '$Number' ORDER BY `Date` DESC");
    }

    public function getType($Number){
        return $this->db->query("SELECT `Type` FROM `cards` WHERE `Number` = '$Number'");
    }

    public function checkPlayerCard($Login, $Number){
        return $this->db->query("SELECT * FROM `players_cards` WHERE `Login` = '$Login' AND `Number` = '$Number'");
    }

    public function resetShare($Number, $Share){
        return $this->db->query("UPDATE `cards` SET `Share` = '$Share' WHERE `Number` = '$Number'");
    }

    public function getShare($Share){
        return $this->db->query("SELECT `Number` FROM `cards` WHERE `Share` = '$Share'");
    }

    public function editCard($Number, $Design){
        return $this->db->query("UPDATE `cards` SET `Design` = '$Design' WHERE `Number` = '$Number'");
    }

    public function createCard($Owner, $Number, $Design, $Type, $Share){
        return $this->db->query("INSERT INTO `cards` (`Owner`, `Number`, `Design`, `Type`, `Share`) VALUES ('$Owner', '$Number', '$Design', '$Type', '$Share')");
    }

    public function addCard($Login, $Number){
        return $this->db->query("INSERT INTO `players_cards` (`Login`, `Number`) VALUES ('$Login', '$Number')");
    }

    public function transferMoney($From, $To, $Score, $Type){
        $this->db->query("UPDATE `cards` SET `Score` = `Score` - $Score WHERE `Number` = '$From'");
        $this->db->query("UPDATE `cards` SET `Score` = `Score` + $Score WHERE `Number` = '$To'");
        $Time = time();
        $this->db->query("INSERT INTO `cards_transactions` (`From_Number`, `To_Number`, `Score`, `Date`, `Type`) VALUES ('$From', '$To', '$Score', '$Time', '$Type')");
    }
    
}
