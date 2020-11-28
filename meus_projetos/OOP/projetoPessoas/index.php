<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pessoas</title>
</head>
<body>
    <?php

    //Programa Principal
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Luiz");
        $p3->setNome("Joana");
        $p4->setNome("Ricardo");
        
        $p2->setCurso("Informática");
        $p3->setSalario(2500);
        $p4->setSetor("Estoque");

        $p3->receberAumento(440);
        $p4->mudarTrabalho();
        $p2->cancelarMatricula();

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
    ?>
</body>
</html>