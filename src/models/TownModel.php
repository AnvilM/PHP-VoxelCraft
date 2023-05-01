<?php

namespace src\models;

use mysqli;
use src\core\Model;

class TownModel extends Model{
    
    public function getTown($id){
        return $this->db->query("SELECT * FROM `towns` WHERE `Id` = '$id'");
    }

    public function getPlayers($id){
        return $this->db->query("SELECT * FROM `towns_players` WHERE `Id` = '$id'");
    }

    public function Create($id, $Name, $Description, $Banner, $Owner, $Discord){
        return $this->db->query("INSERT INTO `towns` (`Id`, `Name`, `Description`, `Banner`, `Owner`, `Discord`) VALUES ($id, '$Name', '$Description', '$Banner', '$Owner', '$Discord')");
    }

    public function addPlayer($id, $Login){
        if(mysqli_num_rows($this->db->query("SELECT * FROM `towns_players` WHERE `Id` = '$id' AND `Login` = '$Login'")) < 1){
            $this->db->query("UPDATE `towns` SET `Players` = `Players` + 1 WHERE `Id` = $id");
            $this->db->query("INSERT INTO `towns_players` (`Id`, `Login`) VALUES ('$id', '$Login')");
        }
        return true;
    }
    public function removePlayer($id, $Login){
        if(mysqli_num_rows($this->db->query("SELECT * FROM `towns_players` WHERE `Login` = '$Login'")) > 0){
            $this->db->query("UPDATE `towns` SET `Players` = `Players` - 1 WHERE `Id` = $id");
            $this->db->query("DELETE FROM `towns_players` WHERE `Id` = '$id' AND `Login` = '$Login'");
        }
        return true;
    }

    public function Players_need($id){
        return $this->db->query("UPDATE `towns` SET `Need_Players` = 1 WHERE `id` = $id");
    }
    public function No_Players_need($id){
        return $this->db->query("UPDATE `towns` SET `Need_Players` = 0 WHERE `id` = $id");
    }

    public function ChangeDiscrodLink($id, $discord){
        return $this->db->query("UPDATE `towns` SET `Discord` = '$discord' WHERE `id` = $id");
    }

    public function checkUser($Login){
        return $this->db->query("SELECT * FROM `users` WHERE `Login` = '$Login'");
    }

    public function removeSecondOwner($id){
        return $this->db->query("UPDATE `towns` SET `Second_Owner` = '' WHERE `id` = $id");
    }

    public function addSecondOwner($id, $Login){
        return $this->db->query("UPDATE `towns` SET `Second_Owner` = '$Login' WHERE `id` = $id");
    }
    
}
