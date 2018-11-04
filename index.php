<?php

use jabt\App\Database;
use jabt\controller\AppController;

require_once __DIR__ . '\\App\\init.php';


if (!empty($_GET['module'])){
    $module = $_GET['module'];
}else {
    $module = 'home';
}

require_once ROOT . '\views\Templates\header.php';

if ($module === 'home'){
    $controller = new \jabt\controller\Galerie\ControllerGalerie();
    $controller->all(); // controller
}
else if ($module === 'inscription'){
    $controller = new \jabt\controller\FormController();
    $controller->inscription();
}
else if ($module === 'connection') {
    $controller = new \jabt\controller\FormController();
    $controller->connection();
}
else if ($module === 'InscritpionVerif'){
    $controller = new \jabt\controller\VerifForm();
    $controller->verif_info($_POST);
}

require_once ROOT . '\views\Templates\footer.php';