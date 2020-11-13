<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MegaSena</title>
</head>
<body>
    <?php

        function aleatorio(){
            
            $array = array();

            $count = 0;
    
            while($count <= 5){
            $n = rand(1, 60);
                if(! in_array($n, $array)){ //checando se o valor se encontra dentro do array para evitar repetição.
                    $array[] = $n; // se  o numero não existir no array, é incluído nele.
                    ++$count;
                }
            }
                sort($array); //ordenando do menor para o maior usando a função sort.

                return $array;
        }

        $megasena = array();
        $count = 1;
        
        while($count <= 3){
         
            $num = aleatorio();
            $r = 0;
            $jogo[] = $num;
            foreach($jogo as $j){

                $r = 0;

            foreach($num as $n){

                 if(in_array($n, $j)){
                    ++$r;
                }
            }
          
                if($r == 6){
                    break;
                }
            }

            $jogo[] = $num;
            ++$count;
        }
        
            
        foreach($jogo as $j){
        
                echo "<table>";
                echo "<tr>";
                $l = 1;
            
                for($i = 1; $i <= 60; ++$i){
               
                    if(in_array($i, $j)){
                    echo "<td bgcolor=#ff00ff>";
                } 
                
                else {
                    echo "<td>";
                }
                    echo $i;
                    echo "</td>";
                    ++$l;
                if($l > 10){
                    $l = 1;
                    echo "</tr>";
                    echo "<tr>";
                }
            }
                echo "</table>";
                echo "";
         }
    ?>
</body>
</html>