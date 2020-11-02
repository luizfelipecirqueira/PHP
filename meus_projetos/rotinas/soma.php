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
        // function sem return
            function soma($a, $b){
                $soma = $a + $b;
                echo "O valor da soma de $a + $b é $soma";
            }

            soma(3, 4);
        ?>
    </div>
</body>
</html>