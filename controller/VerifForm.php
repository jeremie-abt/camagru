<?php

namespace jabt\controller;

use jabt\App\Controller;

class VerifForm extends Controller
{

    public function __construct(){
        $this->viewpath = VIEWS_PATH;
    }

    /**
     * verif if the inscription form is correct
     */

    public function verif_info( array $post ) {
        $success = false;
        $errors = array();
        if (empty($post)) {
            $errors[] = 'Aucunne donnnées';
        }
        else {
            $succes = true;
        }

        if ($success === true) {
            session_start();
        }else {
            $this->render('Errors/Errorsview.php', compact('errors'));
        }
    }

}