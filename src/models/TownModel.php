<?php

namespace src\models;

use src\core\Model;

class TownModel extends Model{
    public function Create($name, $description, $banner, $login, $discord, $id){
        return $this->db->query("INSERT INTO `towns` (`id`,`Name`, `Description`, `Players`, `Banner`, `Owner`, `Discord`) VALUES ('$id', '$name', '$description', 0, '$banner', '$login', '$discord')");
    }
    public function addPlayer($id, $login){
        if($this->db->query("UPDATE `towns` SET `Players` = `Players` + 1 WHERE `id` = $id") && $this->db->query("INSERT INTO `towns_users` (`Town_id`, `Login`) VALUES ('$id','$login')")){
            return true;
        }
        return false;
    }
    
    public function getTown($id){
        return $this->db->query("SELECT * FROM `towns` WHERE `id` = $id");
    }

    public function getPlayers($id){
        return $this->db->query("SELECT * FROM `towns_users` WHERE `Town_id` = $id");
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
    
    
}
