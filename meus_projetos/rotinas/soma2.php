<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Soma</title>
</head>
<body>
    <div>
        <?php
        // function com return
            function soma($a, $b){
                $soma = $a + $b;
                return $soma;
            }

            $x = 3;
            $y = 5;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual a $r";
        ?>
    </div>
</body>
</html>