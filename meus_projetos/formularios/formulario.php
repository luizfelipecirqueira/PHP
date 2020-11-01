<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Formulários em PHP</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET['valor'];
        $rq = sqrt($valor);
        echo "O valor da raiz quadrada de $valor é ".number_format($rq, 2);// formatando para 2 casas decimais
    ?>
    <br/><br/><a href="formulario.html"> Voltar </a>
</div>
</body>
</html>