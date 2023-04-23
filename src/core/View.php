<?php

namespace src\core;

use src\lib\User;

class View{

    public $params = [];
    public $User;

    function __construct($params){
        $this->params = $params;
        $this->User = new User();
    }

    public function render($vars=[]){
        $view = 'src/views/'.$this->params['Controller'].'/'.$this->params['View'].'.php';
        if(file_exists($view)){

            $title = $this->params['Title'];
            extract($vars);
            $css = $_SERVER['DOCUMENT_ROOT'].'/public/css/'.$this->params['Controller'].'/'.$this->params['View'].'.css';
            $js = $_SERVER['DOCUMENT_ROOT'].'/public/js/'.$this->params['Controller'].'/'.$this->params['View'].'.js';

            if(!file_exists($css)){
                $css = '';
            } else{
                $css = '<link rel="stylesheet" href="/public/css/'.$this->params['Controller'].'/'.$this->params['View'].'.css'.'">';
            }   
            if(!file_exists($js)){
                $js = '';
            } else{
                $js = '<script src="/public/js/'.$this->params['Controller'].'/'.$this->params['View'].'.js"></script>';
            }
            
        

            
           
            
            ob_start();
            require $view;
            $view = ob_get_clean();
            
            require 'src/views/Layout/'.$this->params['Layout'].'.php';
            
            
        }
        else{
            header('Location: /Error/404');
        }

        
    }





    public static function error($code){
        http_response_code($code);
        require $_SERVER['DOCUMENT_ROOT'].'/src/views/Error/'.$code.'.php';
        exit();
    }

    
    

}