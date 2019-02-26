<?php
class dataBaseConnection extends PDO{
    private static $instance = null;
    
    public function __construct($dsn, $user, $pass){
        parent:: __construct($dsn, $user, $pass);
    }
  public static function getInstance(){
      if(!isset(self::$instance)){
          try {
            self::$instance = new dataBaseConnection("mysql:dbname=base;host=localhost","root","");
        } catch (PDOexception $e) {
              echo "Falha ao conectar ao banco de dados";
          }
      }
      return self::$instance;
    }  
}