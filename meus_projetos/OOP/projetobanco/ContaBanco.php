<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC"){
                $this->setSaldo(50);
            }
            else if($t == "CP"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "Conta ainda tem dinheiro. Não posso fechá-la!";
            }
            else if($this->getSaldo() < 0){
                echo "Conta em débito. Necessário zerar para fechar!";
            }
            else{
                $this->setStatus(false);
            }
        }

        public function depositar($v){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$ $v na conta de ".$this->getDono()."</p>";
            }
            else{
                echo "Conta fechada. Não consigo depositar.";
            }
        }

        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de ".$this->getDono()."</p>";
                }
                else{
                    echo "Saldo insuficiente para saque.";
                }
            }
            else{
                echo "Não posso sacar de uma conta fechada/inexistente.";
            }
        }

        public function pagarMensal(){
            if($this->getTipo() == "CC"){
                $v = 12;
            }
            else if($this->getTipo() == "CP"){
                $v = 20;
            }
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada da conta de ".$this->getDono(). "</p>";
            }
            else{
                echo "Problemas com a conta. Não é possível cobrar!";
            }
        }

        //construtor
        public function ContaBanco(){
            $this->setSaldo(0);
            $this->setStatus(false);
            
        }

        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($n){
            $this->numConta = $n;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($st){
            $this->status = $st;
        }
    }
?>