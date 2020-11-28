<?php
    require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;

        public function assistirMaisUm(){
            $this->totAssistido++;
        }

        public function Gafanhoto($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo); // chamada ao construtor da super classe Pessoa
            $this->login = $login;
            $this->totAsisstido = 0;
        }

        public function getLogin(){
            return $this->login;
        }

        public function setLogin($l){
            $this->login = $l;
        }

        public function getTotAssistido(){
            return $this->totAssistido;
        }

        public function setTotAssistido($t){
            $this->totAssistido = $t;
        }
    }
?>