<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Operações Aritméticas em PHP</title>
</head>
<body>
<div>
    <?php
        $n1 = 50;
        $n2 = 5;
        $soma = $n1 + $n2;
        $subtracao = $n1 - $n2;
        $multiplicacao = $n1 * $n2;
        $divisao = $n1/$n2;
        $resto = $n1%$n2;

        echo "A soma vale $soma <br />";
        echo "A subtração vale $subtracao <br />";
        echo "A multiplicação vale $multiplicacao <br />";
        echo "A divisao vale $divisao <br />";
        echo "O resto da divisão vale $resto";

    ?>
</div>
</body>
</html>