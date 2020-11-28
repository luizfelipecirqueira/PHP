<?php
    abstract class ClassConexao{
        protected function conectaDB(){ //realizando a conexão com o Banco de Dados
            try{
                $con = new msqli("localhost","root","","crud");
                return $con;
            }
            catch(Exception $erro){
                $erro->getMessage();
                return $erro;
            }
        }
    }
?>