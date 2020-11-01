<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Aula de Estruturas de Condição</title>
</head>
<body>
<div>
    <?php
        $ano = isset($_GET['ano'])?$_GET['ano']:1900;
        $idade = date('Y') - $ano;
        echo "Você nasceu em $ano e tem $idade anos.";

        if($idade >= 18){
            $votar = " Já pode votar<br/>";
            $dirigir = " Já pode dirigir";
        }
        else{
            $votar = " Não pode votar<br/>";
            $dirigir = " Não pode dirigir";
        }

        echo " Com essa idade você $votar e também $dirigir";
    ?>
</div>
</body>
</html>