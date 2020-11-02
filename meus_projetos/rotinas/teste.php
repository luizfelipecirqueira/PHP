<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Teste</title>
</head>
<body>
    <div>
        <?php
            function teste(&$x){
                $x += 2;
                echo "<p>O valor de x é $x</p>";
            }

            $a = 3;
            teste($a);
            echo "<br/>O valor de a é $a";
        ?>
    </div>
</body>
</html>