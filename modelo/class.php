<?php
    class Pessoa{
        private $name;
        private $surname;
        private $age;

        public function __construct(){}
        public function __descturct(){}
    
        public function __get($a){
            return $this->$a;
        }
    
        public function __set($a, $v){
            $this->$a = $v;
        }

        public function __toString(){
            return nl2br("Nome: $this->name
                         Sobrenome: $this->surname
                         Data Nascimento: $this->age");
        }
    }