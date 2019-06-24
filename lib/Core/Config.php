<?php

namespace Aliyun\Core;

use Aliyun\Core\Regions\EndpointConfig;

class Config
{
    private static $loaded = false;
    public static function load(){
        if(self::$loaded) {
            return;
        }
        EndpointConfig::load();
        self::$loaded = true;
    }
}
