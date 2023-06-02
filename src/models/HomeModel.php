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

    public function getStatsToday(){
        $Date = time() - (time() - strtotime('today'));
        return $this->db->query("SELECT * FROM `statistics` WHERE `Date` >= '$Date'");
    }

    public function getStatsYesterday(){
        $DateFrom = time() - (time() - strtotime('today')) - (24*60*60);
        $DateTo = time() - (time() - strtotime('today'));
        return $this->db->query("SELECT * FROM `statistics` WHERE `Date` >= '$DateFrom' AND `Date` <= '$DateTo'");
    }

    public function getStatsWeek(){
        $Date = time() - (time() - strtotime('today')) - (7*24*60*60);
        return $this->db->query("SELECT * FROM `statistics` WHERE `Date` >= '$Date'");
    }

    public function getStatsMonth(){
        $Date = time() - (time() - strtotime('today')) - (30*24*60*60);
        return $this->db->query("SELECT * FROM `statistics` WHERE `Date` >= '$Date'");
    }

}
