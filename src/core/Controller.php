<?php

namespace src\core;

use mysqli;
use src\core\View;
use src\lib\User;

abstract class Controller{

    public $View;
    public $Model;
    public $params;
    public $User;

    function __construct($params){
        
        $this->params = $params;
        
        if(!$this->accessCheck()){
            View::error(404);
        }
        $this->User = new User();
        $this->View = new View($params);
        
        $this->Model = $this->loadModel($params['Controller']);
        
        $this->RolesSync();
        $this->NoticesSync();
    }


    public function RolesSync(){
        if($this->User->isPlayer()){
            $Roles = mysqli_fetch_all($this->Model->RolesSync($this->User->getLogin()));
            $_SESSION['User']['Roles'] = [];
            for($i=0; $i<count($Roles); $i++){
                array_push($_SESSION['User']['Roles'], $Roles[$i][1]);
            }
        }
    }

    public function NoticesSync(){
        if($this->User->isPlayer()){
            $_SESSION['User']['Notices'] = [];
            $Messages = mysqli_fetch_all($this->Model->getNotices($this->User->getLogin()));
            for($i=0; $i<10; $i++){
                if(isset($Messages[$i])){
                    array_push($_SESSION['User']['Notices'], $Messages[$i][0]);
                }
                else{
                    break;
                }
            }
        }
    }



    public function loadModel($model_name){
        $model_path = 'src\models\\'.$model_name.'Model';
        if(class_exists($model_path)){
            return new $model_path;
        }
    }

    public function accessCheck(){
        $access = require $_SERVER['DOCUMENT_ROOT'].'/src/config/accesscontrol.php';
        if(in_array($this->params['Route'], $access['all'])){
            return true;
        }
        else if(in_array($this->params['Route'], $access['noLogined']) &&  !isset($_SESSION['User'])){
            return true;
        }
        else if(in_array($this->params['Route'], $access['isLogined']) && in_array('Logined', $_SESSION['User']['Tags'])){
            return true;
        }
        return false;
    }

    
   

}
