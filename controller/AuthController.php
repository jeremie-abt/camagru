<?php

namespace jabt\controller;

use jabt\App\Controller;

class AuthController extends Controller
{

    public function display_menu ()
    {
        $form_menu = [];
        $form_menu[] = "<a href=\"index.php\">Accueil</a>";// je suis log
        if (isset($_SESSION['auth'])) {
            $form_menu[] = "<a href='index.php?module=deconnection'>Deconnection</a>";
        } else {
            $form_menu[] = "<a href='index.php?module=inscription'>Inscription</a>";
            $form_menu[] = "<a href='index.php?module=connection'>Connection</a>";
        }

        $this->render(VIEWS_PATH . 'Templates/menu.php', compact('form_menu'));
    }

}