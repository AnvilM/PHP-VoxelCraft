<?php

namespace src\core;

use src\lib\Db;
use src\lib\Os;
abstract class Model{
    
    public $db;
    
    public function __construct(){
        $this->db = new Db;
        
    }

    
}
