<?php
    abstract class Pessoa{
        protected $pessoa;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        public function Pessoa($pessoa, $idade, $sexo){
            $this->pessoa = $pessoa;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }

        public function getPessoa(){
            return $this->pessoa;
        }

        public function setPessoa($p){
            $this->pessoa = $p;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($i){
            $this->idade = $i;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($s){
            $this->sexo = $s;
        }

        public function getExperiencia(){
            return $this->experiencia;
        }

        public function setExperiencia($e){
            $this->experiencia = $e;
        }

        protected function ganharExperiencia($n){
            $this->experiencia += $n;
        }
    }
?>