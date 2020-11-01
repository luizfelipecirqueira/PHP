<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Switch</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET['num'])?$_GET['num']:0;// passar o numero, se não retorna 0
        $o = isset($_GET['oper'])?$_GET['oper']:1; // não escolheu nenhuma operação então será a primeira (dobro)

        switch ($o){
            case 1:
                   $r = $n * 2;
            break;
            case 2:
                $r = $n * 3;
            break;
            case 3:
                $r = sqrt($n);
            break;
        }
        echo "Resultado da operação solicitada foi <span class='foco'>$r</span>";

    ?>
    <a href="condicional3.html">Voltar</a>
</div>
</body>
</html>