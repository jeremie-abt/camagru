<?php

class autoloader
{
    /**
     *  Charge automatiquement toutes mes classes
     */

    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload ($class_name) {
        $class_name = str_replace('jabt\\', '', $class_name);
        //var_dump(ROOT . $class_name . '.php');
        require_once ROOT . $class_name . '.php';
    }
}