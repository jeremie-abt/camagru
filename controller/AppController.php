<?php

namespace jabt\controller;

use jabt\App\Controller;

class AppController extends Controller
{
    protected static $_instance = null;

    public function __construct(){
        $this->viewpath = VIEWS_PATH;
    }

    public static function GetInstance () {
        if (self::$_instance === null){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

}