<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 - OOP - Get e Set</title>
</head>
<body>
    <pre>
    <?php
        require_once 'caneta.php'; //classe Caneta sendo carregada no arquivo index.php
        $c1 = new Caneta("BIC", "Azul", 0.5);
        print_r($c1);
       /* $c1->setModelo("BIC");
        $c1->setPonta(0.5);
        print_r("Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}");*/
    ?>
    </pre>
</body>
</html>