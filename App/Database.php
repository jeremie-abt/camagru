<?php

namespace jabt\App;
use PDO;

class Database
{
    private static $_pdo = null;
    private static $_fetch_mode = PDO::FETCH_OBJ;

    public function __construct() {
        try {
            $pdo = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$_pdo = $pdo;
        }
        catch (\PDOException $e){
            die("unable to access database, cause : $e");
        }
    }

    public static function getDb(){
        if (self::$_pdo === null) {
            return new self();
        }
        return self::$_pdo;
    }

    public function query($statement, $attributes = array(), $one = false){
        if (empty($attributes)) {
            $ret = self::$_pdo->query($statement);

            if ($one === true) {
                return ($ret->fetch(self::$_fetch_mode));
            } else {
                $res = $ret->fetchAll(self::$_fetch_mode);
                return ($res);
            }

        } else {
            return ($this->prepare($statement, $attributes, $one));
        }
    }

    private function prepare($statement, $attributes, $one = false) {

        $pdoState = self::$_pdo->prepare($statement);
        $ret = $pdoState->execute($attributes);

        if (strpos(strtolower($statement), 'SELECT') === 0) {
            if ($one === true){
                return ($pdoState->fetch(self::$_fetch_mode));
            } else {
                return ($pdoState->fetchAll(self::$_fetch_mode));
            }
        } else {
            return $ret;
        }
    }

}