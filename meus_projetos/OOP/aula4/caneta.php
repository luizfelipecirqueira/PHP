<?php

    class Caneta{
        public $modelo;
        private $ponta;
        private $tampada;

        //criando um construtor e métodos gets e sets

        /*public function Caneta(){ //Construtor sem parâmetros
            $this->cor = "Azul";
            $this->tampar();
        }*/

        public function Caneta($m, $c, $p){ //Construtor com parâmetros
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function getTampada(){
            return $this->tampada;
        }

        public function setTampada($t){
            $this->tampada = $t;
        }

        public function tampar(){
            $this->tampada = true;
        }
        
        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }
    }
?>