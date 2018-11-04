<?php

namespace jabt\controller;
use jabt\controller\AppController;
use jabt\Model\ModelGalerie;

class ControllerGalerie extends AppController
{
    private $_model = null;

    public function __construct() {
        if ($this->_model === null){
            $this->_model = New ModelGalerie('Galerie', 'img_id');
        }
        $this->viewpath = VIEWS_PATH . 'Galerie/';
    }

    public function all() {
        $Galerie = $this->_model->Galerie();
        $this->render('GalerieView.php', compact('Galerie'));
    }
}