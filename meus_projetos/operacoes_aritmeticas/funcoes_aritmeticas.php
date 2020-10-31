<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Funções Aritmeticas em PHP</title>
    <style>
        h2{
            font:15pt Arial;
            color: #171559;
        }
    </style>
</head>
<body>
<div>
    <?php
       $v1 = $_GET['x'];
       $v2 = $_GET['y'];

       echo "<h2>Valores recebidos: $v1 e $v2</h2>";
       echo "O valor absoluto de $v2 é ".abs($v2); // valor absoluto é eliminar o sinal negativo e só considerar o valor
       echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);// pow função de potenciação
       echo "<br/> A raiz de $v1 é ".sqrt($v1); //sqrt é raiz quadrada

       //round -> realiza o arredondamento de acordo com as regras da matemática
       //ceil -> só arredonda para cima
       //floor -> só arredonda para baixo
       //intval-> pega a parte inteira de um numero real
       echo "<br/>A parte inteira de $v2 é ".intval($v2);
    ?>
</div>
</body>
</html>