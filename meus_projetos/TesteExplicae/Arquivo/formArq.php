<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Arquivo</title>
</head>
<body>
    <form method="POST" action="Arquivo.php" enctype="multipart/form-data">

    <input name="arquivo" type="file" required /><br/>

    <br/><input type="submit" value="Enviar arquivo" />
         <?php

        require_once 'Arquivo.php';

        if(isset($_FILES["texto"]["tmp_name"])){
            $texto = $_FILES["texto"]["tmp_name"];
            $t = new Arquivo();
            $t->ler($texto);
            echo $t->getTexto();
            
        }
    ?>
    </form>
   
</body>
</html>
