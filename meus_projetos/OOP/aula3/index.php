<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - OOP - Definição de visibilidades</title>
</head>
<body>
    <pre>
    <?php
        require_once 'caneta.php'; //classe Caneta sendo carregada no arquivo index.php
        $c1 = new Caneta(); // objeto c1 do tipo caneta
       
        $c1->modelo = "BIC Cristal";
        var_dump($c1);

        print_r($c1);
        $c1->rabiscar();
    ?>
    </pre>
</body>
</html>