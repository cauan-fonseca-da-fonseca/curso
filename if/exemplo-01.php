<?php

    $qualASauaIdade = 70;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if ($qualASauaIdade < $idadeCrianca) {
        echo "voce é uma criança";
    } else if ($qualASauaIdade < $idadeMaior) {
        echo "voce é adolecente";
    } else if ($qualASauaIdade < $idadeMelhor) {
        echo "voce é um adulto";
    } else {
        echo "voce é um idoso";
    }

    echo "<hr>";

    echo ($qualASauaIdade < $idadeMaior)?"menor de idade" : "maior de idade";

?>