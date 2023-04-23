<?php

namespace src\models;

use src\core\Model;

class ProfileModel extends Model{
    public function addUser($login, $descriminator){
        return $this->db->query("INSERT INTO `user` (`Login`, `Descriminator`) VALUES ('$login', '$descriminator')");
    }

    public function getUser($login, $descriminator){
        return $this->db->query("SELECT * FROM `user` WHERE `Login` = '$login' AND `Descriminator` = '$descriminator'");
    }
    
    public function getWarnings($login){
        return $this->db->query("SELECT * FROM `users_warning` WHERE `to_user` = '$login'");
    }
}
