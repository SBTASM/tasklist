<?php

namespace core;

class Database {
    private $_connection;
    private static $_instance; //The single instance;
    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance(array $db_config) {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self($db_config);
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct($db_config) {
        $this->_connection = new \mysqli($db_config['host'], $db_config['username'],
            $db_config['password'], $db_config['database']);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysqli_connect_error(),
                E_USER_ERROR);
        }
    }
    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }
    // Get mysqli connection
    public function getConnection() { return $this->_connection; }
}