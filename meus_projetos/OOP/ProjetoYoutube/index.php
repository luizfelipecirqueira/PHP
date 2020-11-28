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
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Luiz", 26, "M", "lu");
        $g[1] = new Gafanhoto("Felipe", 26, "M", "fe");
        print_r($g[0]);

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);

        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);

        print_r($vis);
    ?>
</body>
</html>