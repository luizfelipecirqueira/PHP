<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - OOP</title>
</head>
<body>
    <?php
        require_once 'caneta.php'; //classe Caneta sendo carregada no arquivo index.php
        $c1 = new Caneta(); // objeto c1 do tipo caneta
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->destampar();
        print_r($c1);

        echo "<br />";

        $c2 = new Caneta();
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
    ?>
</body>
</html>