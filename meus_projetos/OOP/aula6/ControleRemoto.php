<?php
    require_once 'Controlador.php';

    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

        //Metodo Construtor
        function __construtor(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        //Getters e Setters
        function getVolume(){
            return $this->volume;
        }
        function setVolume($v){
            $this->volume = $v;
        }

        function getLigado(){
            return $this->ligado;
        }

        function setLigado($l){
            $this->ligado = $l;
        }

        function getTocando(){
            return $this->tocando;
        }

        function setTocando($t){
            $this->tocando = $t;
        }

        public function ligar(){
            $this->setLigado(true);
        }

        public function desligar(){
            $this->setLigado(false);    
        }

        public function abrirMenu(){
            echo "<p>---------MENU----------</p>";
            echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
            echo "<br>Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
            echo "<br>Volume: " . $this->getVolume();
            for($i = 0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
            echo "<br>";
        }

        public function fecharMenu(){
            echo "<br>Fechando Menu...";
        }

        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }else{
                echo "<p>ERRO! Não é possível aumentar mais o volume!</p>";
            }
        }

        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            }else{
                echo "<p>ERRO! Não é possível diminuir mais o volume!</p>";
            }
        }

        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }

        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }

        public function play(){
            if($this->getLigado() && !($this->getTocando())){
                $this->getTocando(true);
            }
        }

        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->getTocando(false);
            }
        }
    }
?>