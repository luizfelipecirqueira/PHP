<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Soma</title>
</head>
<body>
    <div>
        <?php
            function soma(){
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for($i = 0; $i < $t; $i++){
                    $s = $s + $p[$i];
                }
                return $s;
            }
            $res = soma(4,5,3);
            echo" A soma dos valores é $res";
        ?>
    </div>
</body>
</html>