<?php


namespace src\controllers;

use Exception;
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

        if(isset($_GET['skin']) && isset($_GET['password']) && $_GET['password'] == $this->data['password']){
            echo '1';
            return 1;
        }
        return 0;
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
} 