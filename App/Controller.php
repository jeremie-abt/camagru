<?php

namespace jabt\App;

use jabt\MyClass\Form;

class Controller
{
    protected $viewpath;

    public function render($view, array $datas = array()){
        if (!empty($datas)){
            extract($datas);
        }
        ob_start();
        require $this->viewpath . $view;
        $content = ob_get_clean();
        echo $content;
    }

    protected function forbidden ( array $errors ) {

    }
}