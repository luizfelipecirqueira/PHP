<?php
    require_once 'Aluno.php';
    class Bolsista extends Aluno{
        private $bolsa;

        public function renovarBolsa(){
            echo "<p>Bolsa Renovada!</p>";
        }

        //sobrepor metodo da classe Aluno
        public function pagarMensalidade(){
            echo "<p>Bolsista paga com desconto</p>";
        }

        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($b){
            $this->bolsa = $b;
        }
    }
?>