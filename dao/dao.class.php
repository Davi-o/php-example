<?php
require_once 'database.class.php';

class classDAO{
    private $connection = null;

    public function __construct(){
        $this->connection = dataBaseConnection::getInstance();
    }

    public function __desctruct(){}
    
    public function registPerson($p){
        try {
            $stat = $this->connection->prepare("insert into base(personId, name, surname, birth)values(null,?,?,?)");
            $stat->bindValue(1,$p->name);
            $stat->bindValue(2,$p->surname);
            $stat->bindValue(3,$p->age);
            $stat->execute();
        } catch (PDOexception $e) {
            echo "Erro ao cadastrar a pessoa";
        }
    }
}  