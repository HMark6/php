<?php

class DataBase{

  private $servername = "localhost";
  private $username = "phpteszt";
  private $password = "E3KvVByV26W!.dGX";
  private $db = "ulesrend";
  public static $conn;

  function __construct(){

    
    // Create connection
    self::$conn = new mysqli($this->servername, $this->username, $this->password, $this->db);

    // Check connection
    if (self::$conn->connect_error) {
      die("Connection failed: " . self::$conn->connect_error);
    }

    self::$conn->set_charset("utf8");

  }

}
?> 