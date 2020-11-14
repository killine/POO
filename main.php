<?php
    include 'certo_classe.php';

    $levi = new Aluno();
    $eren = new Aluno();
    $minho = new Aluno();

    $levi->matricula = 11206;
    $levi->nome = "Levi Ackerman";
    $levi->setN1(10);
    $levi->setN2(10);
    $levi->setT1(10);
    $levi->Media();

    $eren->matricula = 13542;
    $eren->nome = "Eren Yeager";
    $eren->setN1(5);
    $eren->setN2(7);
    $eren->setT1(9);
    $eren->Media();

    $minho->matricula = 02026;
    $minho->nome = "Minho Choi";
    $minho->setN1(9);
    $minho->setN2(9);
    $minho->setT1(9);
    $minho->Media();


    $levi->imprime();
    $eren->imprime();
    $minho->imprime();
?>