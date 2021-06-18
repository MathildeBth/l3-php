<?php
class Autoload
{

    static function register(){
        spl_autoload_register(function ($class){
            require_once("tp3/".str_replace('\\' , '/', $class) . ".php");
        });
    }

}