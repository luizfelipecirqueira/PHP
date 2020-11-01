<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Formulários em PHP</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET['nome'])?$_GET['nome']:"Não informado";//verifica se o parâmetro foi configurado
        $ano = isset($_GET['ano'])?$_GET['ano']:0;
        $sexo = isset($_GET['sexo'])?$_GET['sexo']:"sem sexo";
        $idade = date('Y') - $ano;

        echo "$nome é $sexo e tem $idade anos";
    ?>
    <br/><br/><a href="formulario.html"> Voltar </a>
</div>
</body>
</html>