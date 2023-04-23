<?php

namespace src\lib;

use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

class ServerQuery{
    public $data;
    public function __construct(){
        $this->data = require $_SERVER['DOCUMENT_ROOT'].'/src/config/server.php';
    }
    public function query()
    {
        $ip = $this->data['ip'];
        $port = $this->data['port'];
        
        try
        {
        $Query = new MinecraftPing( $ip, $port );
            
        return $Query->QueryOldPre17()['Players'];
        }
        catch( MinecraftPingException $e )
        {
            return 'failed to load';
        }
        finally
        {
            if( $Query )
            {
                $Query->Close();
            }
        }
    }
    
    
}
