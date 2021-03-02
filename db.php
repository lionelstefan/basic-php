<?php

Class DB {
  public $alamat;
  public $port;

  private $server = 'localhost';
  private $username = 'root';
  private $password = 'Lionel300495!';
  private $dbname = 'test';

  function __construct($params = array()) {
    if (sizeof($params) > 0) {
      $this->alamat = $params['alamat'];
      $this->port = $params['port'];
    }
  }

  public function conn() {
    $conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
    return $conn;
  }
}

?>