<?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    class Visualizacao{
        private $espectador;
        private $filme;

        public function Visualizacao($espectador, $filme){
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews()+1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
        }

        public function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorc($porc){
            $nova = 0;
            if($porc <= 20){
                $nova = 3;
            }
            else if($porc > 20 || $porc <= 50 ){
                $nota = 5;
            }
            else if($porc > 50 || $porc<= 90){
                $nota = 8;
            }
            else{
                $nota = 10;
            }
            $this->filme->setAvaliacao($nova);
        }

        public function getEspectador(){
            return $this->espectador;
        }

        public function setEspectador($e){
            $this->espectador = $e;
        }

        public function getFilme(){
            return $this->filme;
        }

        public function setFilme($f){
            $this->filme = $f;
        }
    }
?>