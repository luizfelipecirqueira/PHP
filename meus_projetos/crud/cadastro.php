<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //comandos que iniciam com mysql foram descontinuados. Agora inicia com mysqli
    $connect = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db('crud');
    $query_select = "SELECT login from usuarios WHERE login = '$login'";
    $select = mysqli_query($query_select, $connect);
    $array = mysqli_fetch_array($select);
    $logarray = $array['login'];

    if($login == "" || $login == null){
        echo "<script language='javascript' type='text/javascript'>
        alert('O campo login precisa ser preenchido');window.location.href='cadastro.html';</script>";
    }
    else{
        if($logarray == $login){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse login já existe');window.location.href='cadastro.html';</script>";
            die();
        }
        else{
            $query = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senha')";
            $insert = mysqli_query($query, $connect);

            if($insert){
                echo "<script language='javascript' type='text/javascript'>
                alert('Usuário Cadastrado com Sucesso!');window.location.href='cadastro.html';</script>";
            }
            else{
                echo"<script language='javascript' type='text/javascript'>
                alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
            }
        }
    }
?>