<?php
    if(isset($_POST['Id'])){
        $Id = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    elsif(isset($_GET['Id'])){
        $Id = filter_input(INPUT_GET, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $Id = 0;
    }

    if(isset($_POST['Nome'])){
        $Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    elsif(isset($_GET['Nome'])){
        $Nome = filter_input(INPUT_GET, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $Nome = "";
    }

    if(isset($_POST['Sexo'])){
        $Sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    elsif(isset($_GET['Sexo'])){
        $Sexo = filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $Sexo = "";
    }

    if(isset($_POST['Cidade'])){
        $Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    elsif(isset($_GET['Cidade'])){
        $Cidade = filter_input(INPUT_GET, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $Cidade = "";
    }
?>