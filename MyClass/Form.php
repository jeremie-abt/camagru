<?php

namespace jabt\MyClass;

class Form
{
    private $_method = 'get';
    private $_action = '#';
    private $_input = array();


    public function __construct( array $kwarray = array()) {
        if (isset($kwarray['method'])) {
            $this->method($kwarray['method']);
        }
        if (isset($kwarray['action'])){
            $this->action($kwarray['action']);
        }
    }

    public function input($type, $name, array $attributes = array()) {
        $input = "<p><input type='$type' name='$name' ";
        foreach ( $attributes as $attribute => $val ) {
            $input .= "$attribute='$val'";
        }
        $input .= "></p>";
        $this->_input[] = $input;
    }

    public function textarea($content) {
        $_input[] = "<textarea rows=\"4\" cols=\"50\">$content</textarea>";
    }

    public function action($action){
        $this->_action = $action;
    }

    public function method ($method){
        if (in_array($method, array('get', 'post')) === true) {
            $this->_method = $method;
        }
    }

    public function DisplayHTMLForm(){
        $HTML = "<form method='{$this->_method}' action='{$this->_action}'>";

        foreach ($this->_input as $input){
            $HTML .= $input;
        }
        $HTML .= "</form>";
        return $HTML;
    }

    /**
     * @param array $datas which is the value get or post the form send
     * @return array of all the errors or success
     */

    public function isValidForm ( array $datas ){
        $error_tab = array();
        if (empty($datas['name']) || empty($datas['email']) || empty($datas['submit'])){
            $error_tab['error_empty'];
        }
        else {
            ;// verif email, verif image etc .. bref les verifs
        }
        $error_tab['success'] = 1;
        return ($error_tab);
    }
}