<?php
    abstract class ClassConexao{
        protected function conectaDB(){ //realizando a conexão com o Banco de Dados
            try{
                $Con = new PDO("mysql:host=localhost;dbname=crud","root","");
                return $Con;
            }
            catch(PDOException $Erro){
                return $Erro->getMessage();
            }
        }
    }
?>