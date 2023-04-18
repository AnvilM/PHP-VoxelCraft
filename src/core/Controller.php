<?php

namespace src\core;

use src\core\View;

abstract class Controller{

    public $view;
    public $model;
    public $params;

    function __construct($params){
        
        $this->params = $params;

        if(!$this->accessCheck()){
            View::error(404);
        }

        $this->view = new View($params);
        
        $this->model = $this->loadModel($params['Controller']);

        
        if(isset($_SESSION['Login'])){
            $this->model->updateSession(time(), $_SESSION['Login'], session_id());
        }
        if(isset($_SESSION['Login'])){
            if(mysqli_num_rows($this->model->checkSession($_SESSION['Login'], session_id())) < 1){
                $this->model->delSession($_SESSION['Login'], session_id());
                unset($_SESSION['Login']);
                header('Location: /');
                exit();
            }
        }
        
    }

    public function SetMessage($message){
        $_SESSION['Message'] = $message;
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
        else if(in_array($this->params['Route'], $access['noLogined']) &&  !in_array('Logined', $_SESSION['User']['Tags'])){
            return true;
        }
        else if(in_array($this->params['Route'], $access['isLogined']) && in_array('Logined', $_SESSION['User']['Tags'])){
            return true;
        }
        return false;
    }

    
   

}
