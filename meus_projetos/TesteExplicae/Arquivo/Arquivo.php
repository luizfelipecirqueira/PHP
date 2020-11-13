<?php
    class Arquivo{
        
        private $texto; // atributo privado

        function getTexto(){ //function para carregar o conteúdo do arquivo
            
            return htmlentities($this->texto);
            
            
        }

        function ler($t){
            $this->texto = file_get_contents($t); // function para ler o conteúdo do arquivo texto
            
        }
    }
?>