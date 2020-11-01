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

        if($idade < 16){
            $tipoDeVoto = " não vota";
        }
        else if(($idade >= 16 && $idade < 18) || ($idade > 65)){
            $tipoDeVoto = " voto opcional";
        }
        else{
            $tipoDeVoto = " voto obrigatório";
        }

        echo " Para essa idade, $tipoDeVoto";
    ?>
</div>
</body>
</html>