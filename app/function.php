<?php
    function my_autoloader($class) {
        if(is_readable( __DIR__ . './class/controller/'.$class.'.php')){
            include  __DIR__ . './class/controller/'.$class.'.php';
        }	
        elseif(is_readable( __DIR__ . './class/model/'.$class.'.php')){
            include  __DIR__ . './class/model/'.$class.'.php';	
        }
    }
    spl_autoload_register('my_autoloader');