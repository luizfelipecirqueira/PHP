<?php
    $pizzas = new ArrayIterator(array('Margarita', 'Portuguesa', 'Calabresa'));
    $recheios = new ArrayIterator(array('Queijo', 'Ovos', 'Calabresa', 'Anchovas'));

    $appendIterator = new AppendIterator();

    $appendIterator->append($pizzas);
    $appendIterator->append($recheios);

    foreach($appendIterator as $key => $item){
        echo  $key. '=>' .$item . PHP_EOL;
    }
?>