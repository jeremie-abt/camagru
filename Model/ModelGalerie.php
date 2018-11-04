<?php

namespace jabt\Model;

use jabt\App\Database;
use jabt\App\Model;

class ModelGalerie extends Model
{
    public function __construct( $table_name, $id_name = 'id')
    {
        parent::__construct(Database::getDb());
        $this->_table = $table_name;
        $this->_id_name = $id_name;
    }

    public function Galerie() {
        $Galerie = $this->getAll();
        return ($Galerie);
    }
}