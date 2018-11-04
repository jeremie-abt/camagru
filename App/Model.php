<?php

namespace jabt\App;


class Model
{
    protected $_table;
    protected $_id_name;
    protected $_db;

    public function __construct( Database $db ){
        $this->_db = $db;
    }

    public function getAll() {
        return ($this->_db->query("SELECT * FROM {$this->_table}"));
    }

    public function create ( array $fields) {
        $sql_attr = [];
        $sql_first_parts = "INSERT INTO {$this->_table} (";
        $sql_second_parts = "Values (";
        foreach ($fields as $k => $v) {
            $sql_first_parts .= $k . ', ';
            $sql_second_parts .= '?, ';
            $sql_attr[] = $v;
        }
        $sql_first_parts = substr($sql_first_parts, 0, -2) . ') ';
        $sql_second_parts = substr($sql_second_parts, 0, -2) . ') ';
        $sql = $sql_first_parts . $sql_second_parts;
        $ret = $this->_db->query($sql, $sql_attr);
        return $ret;
    }

    public function update ( array $fields, $id ) {
        $sql_attr = [];
        $sql = "UPDATE {$this->_table} SET ";
        foreach ($fields as $k => $v) {
            $sql .= $k . ' = ?, ';
            $sql_attr[] = $v;
        }
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE {$this->_id_name} = ?;";
        $sql_attr[] = $id;
        $ret = $this->_db->query($sql, $sql_attr);
        return $ret;
    }

    /**
     * @param array $id_tab
     * @return bool
     */

    public function delete ( array $id_tab ) {
        $sql = "DELETE FROM {$this->_table} WHERE ";
        foreach ($id_tab as $id) {
            $sql .= "{$this->_id_name} = $id OR ";
        }
        $sql = substr($sql, 0, -4) . ';';
        $ret = $this->_db->query($sql);
        // flem sur le coup mais voir un peu si c'est secu oiu si c'est pas top
        return $ret;
    }

}