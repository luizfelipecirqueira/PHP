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
        $n = array(3,5,8,2);
        print_r($n);

        // Vetores em PHP podem ter elementos de vários tipos. Em PHP um vetor não é homogêneo
        $v = array("Nome" => "Luiz",
                    "Idade" => 26,
                    "Peso" => 70);
       // print_r($v);

       foreach($v as $campo => $valor){
           echo "O campo $campo possui o conteúdo $valor <br/>";
       }
        
    ?>
    </pre>
</div>
</body>
</html>