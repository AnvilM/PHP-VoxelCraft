<?php


namespace src\controllers;

use Exception;
use mysqli;
use src\core\Controller;
use src\lib\Db;

Class APIController extends Controller{
    private $data;
    public $Db;

    public function __construct()
    {
        $this->Db = new Db();
        $this->data = require $_SERVER['DOCUMENT_ROOT'].'/src/config/API.php';
    }

    public function SET_SKINAction(){

        if(isset($_POST['skin']) && isset($_POST['discord']) && isset($_POST['password']) && $_POST['password'] == $this->data['password']){
            $Discord = $_POST['discord'];
            $Skin = $_POST['skin'];
            $Login = mysqli_fetch_assoc($this->Db->query("SELECT `Login` FROM `users` WHERE `Discord` = '$Discord'"));
            if($Login != NULL){
                $Login = $Login['Login'];
                $this->Db->query("UPDATE `players_skins` SET `Skin` = '$Skin' WHERE `Login` = '$Login'");
                $Time = time();
                $this->Db->query("INSERT INTO `players_notices` (`Login`, `Message`, `Date`) VALUES ('$Login', 'Вы сменили скин', '$Time')");
                echo 1;
            }
            else{
                echo 'Player not found';
            }
            
        }
        echo 0;
        exit();
    }

    public function ADD_ROLEAction(){

        if(isset($_POST['role']) && isset($_POST['discord']) && isset($_POST['password']) && $_POST['password'] == $this->data['password']){
            $Discord = $_POST['discord'];
            $Role = $_POST['role'];
            $Color = 'FFFFFF';
            if(isset($_POST['color'])){$Color = $_POST['color'];}
            $Login = mysqli_fetch_assoc($this->Db->query("SELECT `Login` FROM `users` WHERE `Discord` = '$Discord'"));
            if($Login != NULL){
                $Login = $Login['Login'];
                $this->Db->query("INSERT INTO `players_roles` (`Login`, `Role`, `Color`) VALUES ('$Login', '$Role', '$Color')");
                $Time = time();
                $this->Db->query("INSERT INTO `players_notices` (`Login`, `Message`, `Date`) VALUES ('$Login', 'Вам выдана роль $Role', '$Time')");
                echo 1;
            }
            else{
                echo 'Player not found';
            }
        }
        echo 0;
        exit();
    }

    public function REMOVE_ROLEAction(){

        if(isset($_POST['role']) && isset($_POST['discord']) && isset($_POST['password']) && $_POST['password'] == $this->data['password']){
            $Discord = $_POST['discord'];
            $Role = $_POST['role'];
            $Login = mysqli_fetch_assoc($this->Db->query("SELECT `Login` FROM `users` WHERE `Discord` = '$Discord'"));
            if($Login != NULL){
                $Login = $Login['Login'];
                $this->Db->query("DELETE FROM `players_roles` WHERE `Login` = '$Login' AND `Role` = '$Role'");
                $Time = time();
                $this->Db->query("INSERT INTO `players_notices` (`Login`, `Message`, `Date`) VALUES ('$Login', 'Удаленна роль $Role', '$Time')");
                echo 1;
            }
            else{
                echo 'Player not found';
            }
        }
        echo 0;
        exit();
    }

    public function GET_SKINAction(){
        header("Content-type: image/png");
        if(isset($_GET['Login'])){
            $Login = $_GET['Login'];
            if(mysqli_num_rows($this->Db->query("SELECT * FROM `users` WHERE `Login` = '$Login'")) > 0){
                $skin = mysqli_fetch_assoc($this->Db->query("SELECT `Skin` FROM `players_skins` WHERE `Login` = '$Login'"))['Skin'];
                if(str_contains($skin, '://')){

                    $skin = imagecreatefrompng($skin);
                    imagesavealpha($skin, true);
                    imagepng($skin);
                    exit();
                }
                else{
                    $skin = imagecreatefrompng('https://minotar.net/skin/'.$skin);
                    imagesavealpha($skin, true);
                    imagepng($skin);
                    exit();
                }
            }
        }
        imagepng(imagecreatefrompng('public/images/skin.png'));


        
    }

    public function GET_AVATARAction(){
        header("Content-type: image/png");
        if(isset($_GET['Login'])){
            $skin = imagecreatefrompng('http://'.$this->data['domain'].'/API/get.skin?Login='.$_GET['Login']);
        }
        else{
            $skin = imagecreatefrompng('http://'.$this->data['domain'].'/API/get.skin');
        }

        $rect = [
            'x' => 8, 
            'y' => 8, 
            'width' => 8, 
            'height' => 8
        ];
        $avatar = imagecrop($skin, $rect);
        imagepng($avatar);
        

        
    }


    public function SET_STATISTICSAction(){
        if(isset($_GET['Online'])){
            $Online = $_GET['Online'];
            $Date = time();
            $this->Db->query("INSERT INTO `statistics` (`Date`, `Online`) VALUES ('$Date', '$Online')");
            echo 1;
        }
        else{
            echo 0;
        }
        exit();
        
    }

    public function SET_LAST_ONLINEAction(){
        if(isset($_GET['Login']) && isset($_GET['Time'])){
            $Time = $_GET['Time'];
            $Login = $_GET['Login'];
            if(mysqli_num_rows($this->Db->query("SELECT * FROM `users` WHERE `Login` = '$Login'")) > 0){
                $this->Db->query("UPDATE `users` SET `Last_Online` = '$Time' WHERE `Login` = '$Login'");
                echo 1;
            }
            else{
                echo 'Player not found';
            }
        }
        else{
            echo 0;
        }
        exit();
        
    }

    public function SET_ONLINEAction(){
        if(isset($_GET['Login'])){
            $Login = $_GET['Login'];
            if(mysqli_num_rows($this->Db->query("SELECT * FROM `users` WHERE `Login` = '$Login'")) > 0){
                $this->Db->query("UPDATE `users` SET `Online` = '1' WHERE `Login` = '$Login'");
                echo 1;
            }
            else{
                echo 'Player not found';
            }
        }
        else{
            echo 0;
        }
        exit();
        
    }

    public function SET_OFFLINEAction(){
        if(isset($_GET['Login'])){
            $Login = $_GET['Login'];
            if(mysqli_num_rows($this->Db->query("SELECT * FROM `users` WHERE `Login` = '$Login'")) > 0){
                $this->Db->query("UPDATE `users` SET `Online` = '0' WHERE `Login` = '$Login'");
                echo 1;
            }
            else{
                echo 'Player not found';
            }
        }
        else{
            echo 0;
        }
        exit();
        
    }
} 