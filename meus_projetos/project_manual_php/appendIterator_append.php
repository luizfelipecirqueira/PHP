<?php
    $array_1 = new ArrayIterator(array('a',' b',' c'));
    $array_2 = new ArrayIterator(array(' d',' e',' f'));

    $iterator = new AppendIterator;
    $iterator->append($array_1);
    $iterator->append($array_2);

    foreach($iterator as $count){
        echo $count;
    }
?>