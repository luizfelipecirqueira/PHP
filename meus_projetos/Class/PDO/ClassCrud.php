<?php
    include ('ClassConexao.php');
    class ClassCrud extends ClassConexao{
        //Atributos
        private $crud;
        private $contador;

        //metodos de preparação das declarações
        private function preparedStatements($query, $parametros){
            $this->countParametros($parametros);
            $this->crud = $this->conectaDB()->prepare($query);

            if($this->contador > 0){
                for($i = 1; $i <= $this->contador; $i++){
                    $this->crud->bindValue($i, $parametros[$i-1]);
                }
            }
            $this->crud->execute();
        }

        //contador de parametros
        private function countParametros($parametros){
            $this->contador = count($parametros);
        }
    }
?>