<?php

class Database {
  private $_connection;
  private $host = 'localhost';
  private $mysql_user = 'root';
  private $password = '';
  private $database = 'vasyl';
  // Store the single instance.
  private static $_instance;


  public static function getInstance() {
    if (!self::$_instance) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }
  

  public function __construct() {
    $this->_connection = new mysqli($this->host, $this->mysql_user, $this->password, $this->database);
    // Error handling.
    if ($this->_connection->connect_error) {
      trigger_error('Failed to connect to MySQL: ' . mysqli_connect_error(), E_USER_ERROR);
    }
  }

  private function __clone() {}

  public function getConnection() {
    return $this->_connection;
  }
}