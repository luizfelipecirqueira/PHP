<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Youtube</title>
</head>
<body>
    <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g = new Gafanhoto("Luiz", 26, "M", "lu");
        print_r($g);
    ?>
</body>
</html>