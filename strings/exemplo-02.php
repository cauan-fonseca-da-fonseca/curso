<?php

    $nome = "teste";

    $nome =  strtoupper($nome);
    echo $nome;

    echo "</br>";

    $nome = strtolower($nome);
    echo $nome;

    echo "</br>";
    echo ucwords($nome . " teste");

    echo "</br>";
    echo ucfirst($nome. " teste");
?>