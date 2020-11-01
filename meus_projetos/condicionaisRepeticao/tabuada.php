<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Aula sobre For</title>
</head>
<body>
<div>
    <?php
       $n = isset($_GET['num'])?$_GET['num']:1;
       for($cont = 1; $cont <= 10; $cont++){
           $r = $n * $cont;
           echo "$n x $cont = $r <br/>";
       }
    ?>
    <br /><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>