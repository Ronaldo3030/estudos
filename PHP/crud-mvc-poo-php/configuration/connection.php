<?php
define("HOST", "localhost");
define("DBNAME", "crud-mvc-poo-php-ronaldo");
define("USER", "root");
define("PASSWORD", "Bolo-123");

class Connect
{
  protected $connection;

  function __construct()
  {
    $this->connectDatabase();
  }

  function connectDatabase(){
    try{
      $this->connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);
    }catch (PDOException $e){
      echo "ERROR:<br>".$e->getMessage();
      die();
    }
  }
}

$testConnection = new Connect();

?>