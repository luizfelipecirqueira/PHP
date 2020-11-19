<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $categorias = [];
    $categorias = ['infantil'];
    $categorias = ['adolescente'];
    $categorias = ['adulto'];

    if(strlen($nome) < 3){ //conta a quantidade de caracteres
        echo "O nome deve conter mais de 3 caracteres";
    }

    if(strlen($nome) > 40){
        echo "O nome é muit extenso";
    }

    //verificar se a idade foi digitada como número realmente.
    if(!is_numeric($idade)){
        echo "Neste campo só são permitidos dados numéricos";
    }

    if($idade >= 6 && $idade <= 12){
        for($i = 0; $i <= count($categorias); $i++){
            if($categorias[$i] = 'infantil')
            echo "O nadador é o ".$nome. " e o mesmo é da categoria ".$categorias[$i];
        break;
        }
    }
    else if($idade >= 13 && $idade <= 17){
        for($i = 0; $i <= count($categorias); $i++){
            if($categorias[$i] = 'adolescente')
            echo "O nadador é o ".$nome. " e o mesmo é da categoria ".$categorias[$i];
        break;
        }
    }
    else if($idade >= 18){
        for($i = 0; $i <= count($categorias); $i++){
            if($categorias[$i] = 'adulto')
            echo "O nadador é o ".$nome. " e o mesmo é da categoria ".$categorias[$i];
        break;
        }
    }
?>
