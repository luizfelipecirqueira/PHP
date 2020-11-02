<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Vetor</title>
</head>
<body>
<div>
    <pre>
    <?php //tag pre -> melhor organização do array
        $v = array("A", "J", "M", "X", "K");
        
        print_r($v);

        array_push($v, 7);

        print_r($v);

        array_unshift($v, "O");

        print_r($v);

        array_shift($v);

        print_r($v);

        sort($v);
        print_r($v);

        rsort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>