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
    <form method="get" action="tabuada.php">
        <select name="num">  
        <?php
            for($c = 1; $c <= 10; $c++){
                echo "<option>$c</option>";
            }
        ?>
        </select>
        <input type="submit" value="Tabuada"/>
    </form>
</div>
</body>
</html>