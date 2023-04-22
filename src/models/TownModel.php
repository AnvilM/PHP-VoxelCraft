<?php

namespace src\models;

use src\core\Model;

class TownModel extends Model{
    public function Create($name, $description, $banner, $discord, $login){
        return $this->db->query("INSERT INTO `towns` (`Name`, `Description`, `Banner`, `Players`, `Owner`, `Second_Owner`, `Need_Players`, `Discord`) VALUES ('$name', '$description', '$banner', 1, '$login', '',0,'$discord')");
    }
    
    public function getTown($id){
        return $this->db->query("SELECT * FROM `towns` WHERE `id` = $id");
    }
    
    
}
