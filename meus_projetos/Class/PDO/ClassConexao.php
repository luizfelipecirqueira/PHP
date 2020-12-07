<?php
    abstract class ClassConexao{
        protected function conectaDB(){ //realizando a conexão com o Banco de Dados
            try{
                $con = new PDO("mysql:hostname=localhost;dbname=crud","root","");
                return $con;
            }
            catch(PDOException $Erro){
                return $Erro->getMessage();
            }
        }
    }
?>