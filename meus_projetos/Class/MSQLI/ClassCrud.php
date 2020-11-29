<?php
    include ("ClassConexao.php");
    class ClassCrud extends ClassConexao{
        //Atributos
        private $crud;
        private $contador;
        private $resultado;

        private function preparedStatements($query, $tipos, $parametros){
            $this->countParametros($parametros);

            $con = $this->conectaDB();
            $this->crud = $con->prepare($query);

            if($this->contador > 0){
                $callParametros = array();
                foreach($parametros as $key => $parametros){ //os parametros que receber sao armazenados em key e em parametros
                    $callParametros[$key] = &$parametros[$key]; // passando por referência
                }
                array_unshift($callParametros, $tipos);
                call_user_func_array(array($this->crud, 'bind_param'), $callParametros);
            }

            $this->crud->execute();
            $this->resultado->$this->crud->getResut();
        }

        //contador de parametros
        private function countParametros($parametros){
            $this->contador = count($parametros);
        }
    }
?>