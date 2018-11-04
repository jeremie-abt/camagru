<?php

namespace jabt\controller;

use jabt\App\Controller;
use jabt\MyClass\Form;

class FormController extends Controller
{

    public function __construct(){
        $this->viewpath = VIEWS_PATH;
    }

    public function Inscription () {
        $form_inscription = new Form();
        $form_inscription->method('post');
        $form_inscription->action('index.php?module=InscritpionVerif');
        $this->render('InscriptionView.php', compact('form_inscription'));
    }

    public function connection () {
        $form_connection = New Form();
        $form_connection->method('post');
        $form_connection->action('index.php?module=ConnexionVerif');
        $this->render('connectionView.php', compact('form_connection'));
    }
}